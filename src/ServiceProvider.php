<?php

namespace OtkruBiz\jdy;

use OtkurBiz\jdy\Factory;
use OtkurBiz\jdy\MiniProgram\Application as MiniProgram;
use Illuminate\Support\ServiceProvider as LaravelServiceProvider;
use Illuminate\Foundation\Application as LaravelApplication;
use Laravel\Lumen\Application as LumenApplication;
class ServiceProvider extends LaravelServiceProvider
{
    protected $defer = true;

    /**
     * Boot the provider.
     */
    public function boot()
    {
    }

    /**
     * Setup the config.
     */
    protected function setupConfig()
    {
        $source = realpath( __DIR__ . '/config/jdy.php' );

        if ($this->app instanceof LaravelApplication && $this->app->runningInConsole()) {
            $this->publishes([$source => config_path('jdy.php')], 'jdy');
        } elseif ($this->app instanceof LumenApplication) {
            $this->app->configure('jdy');
        }

        $this->mergeConfigFrom($source, 'jdy');
    }

    /**
     * Register the provider.
     */
    public function register()
    {
        $this->setupConfig();

        $apps = [
            'mini_program' => MiniProgram::class,
        ];

        foreach ($apps as $name => $class) {
            if (empty(config('jdy.'.$name))) {
                continue;
            }

            if (!empty(config('jdy.'.$name.'.app_id')) ) {
                $accounts = [
                    'default' => config('jdy.'.$name),
                ];
                config(['jdy.'.$name.'.default' => $accounts['default']]);
            } else {
                $accounts = config('jdy.'.$name);
            }

            foreach ($accounts as $account => $config) {
                $this->app->singleton("jdy.{$name}.{$account}", function ($laravelApp) use ($name, $account, $config, $class) {
                    $app = new $class(array_merge(config('jdy.defaults', []), $config));
                    if (config('jdy.defaults.use_laravel_cache')) {
                        $app['cache'] = $laravelApp['cache.store'];
                    }
                    $app['request'] = $laravelApp['request'];

                    return $app;
                });
            }
            $this->app->alias("jdy.{$name}.default", 'jdy.'.$name);

            $this->app->alias('jdy.'.$name, $class);
        }
    }
}
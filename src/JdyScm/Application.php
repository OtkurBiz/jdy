<?php
/*
 *
 *

 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace OtkurBiz\jdy\JdyScm;

use OtkurBiz\jdy\Auth\Auth\AuthServiceProvider;
use OtkurBiz\jdy\JdyScm\Customer\CustomerServiceProvider;
use OtkurBiz\jdy\Kernel\ServiceContainer;

/**
 * Class Application.
 *
 * @property \OtkurBiz\jdy\MiniProgram\Auth\AccessToken $access_token
 */
class Application extends ServiceContainer
{
    /**
     * @var array
     */
    protected $providers = [
        AuthServiceProvider::class,
        System\ServiceProvider::class,
        CustomerServiceProvider::class,
    ];
}

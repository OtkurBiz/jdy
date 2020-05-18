<?php
/*
 * This file is part of the otkurbiz/jdy.
 *
 * (c) alim <alim@bulutbazar.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace OtkurBiz\jdy\Auth\Auth;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

/**
 * Class ServiceProvider.
 *
 * @author alim <alim@bulutbazar.com>
 */
class AuthServiceProvider implements ServiceProviderInterface
{
    /**
     * {@inheritdoc}.
     */
    public function register(Container $app)
    {
        !isset($app['access_token']) && $app['access_token'] = function ($app) {
            return new AccessToken($app);
        };

        !isset($app['auth_code']) && $app['auth_code'] = function ($app) {
            return new AuthCode($app);
        };

        !isset($app['org_access_token']) && $app['org_access_token'] = function ($app) {
            return new OrgAccessToken($app);
        };
    }
}

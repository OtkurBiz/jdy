<?php
/*
 *
 *

 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace OtkurBiz\jdy\Auth\Auth;

use OtkurBiz\jdy\Kernel\AccessToken as BaseAccessToken;

/**
 * Class AuthorizerAccessToken.
 *
 * @author alim <alim@bulutbazar.com>
 */
class OrgAccessToken extends BaseAccessToken
{
    /**
     * @var string
     */
    protected $endpointToGetToken = 'https://api.kingdee.com/auth/org/access_token';
    protected $requestMethod = 'GET';
    protected $cachePrefix = 'otkurbiz.jdy.kernel.org.access_token.';
    /**
     * @return array
     */
    protected function getCredentials(): array
    {
        date_default_timezone_set('Asia/Shanghai');
        return [
            'tid' => $this->app['config']['tid'],
            'secret' => $this->app['config']['secret'],
            'client_id'      => $this->app['config']['client_id'],
            'client_secret'     => $this->app['config']['client_secret'],
        ];

    }
}

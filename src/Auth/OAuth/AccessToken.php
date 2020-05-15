<?php
/*
 * This file is part of the overtrue/wechat.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace OtkurBiz\jdy\Auth\OAuth;

use OtkurBiz\jdy\Kernel\AccessToken as BaseAccessToken;

/**
 * Class AuthorizerAccessToken.
 *
 * @author overtrue <i@overtrue.me>
 */
class AccessToken extends BaseAccessToken
{
    /**
     * @var string
     */
    protected $endpointToGetToken = 'https://api.kingdee.com/auth/oauth2/access_token';
    protected $requestMethod = 'POST';
    /**
     * @return array
     */
    protected function getCredentials(): array
    {
        $client_secret = $this->app['config']['client_secret'];
        date_default_timezone_set('Asia/Shanghai');
        $client_id = $this->app['config']['client_id'];
        $grand_type = 'authorization_code';
        return [
            'grant_type' => $grand_type,
            'client_id'      => $client_id,
            'client_secret'     => $client_secret,
        ];
    }
}

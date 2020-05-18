<?php
/*
 *
 *

 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace OtkurBiz\jdy\MiniProgram;

use OtkurBiz\jdy\Kernel\ServiceContainer;

/**
 * Class Application.
 *
 * @property \OtkurBiz\jdy\MiniProgram\Auth\AccessToken $access_token
 * @property \OtkurBiz\jdy\MiniProgram\Auth\Client $auth
 * @property \OtkurBiz\jdy\MiniProgram\KVData\Client $kv
 * @property \OtkurBiz\jdy\MiniProgram\QRCode\Client $qrcode
 * @property \OtkurBiz\jdy\MiniProgram\Message\Client $message
 */
class Application extends ServiceContainer
{
    /**
     * @var array
     */
    protected $providers = [
        Auth\ServiceProvider::class,
        KVData\ServiceProvider::class,
        QRCode\ServiceProvider::class,
        Message\ServiceProvider::class,
    ];
}

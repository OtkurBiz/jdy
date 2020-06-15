<?php
/*
 *
 *

 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace OtkurBiz\jdy\JdyAccounting;

use OtkurBiz\jdy\Auth\Auth\AuthServiceProvider;
use OtkurBiz\jdy\JdyAccounting\AccountingSubject\AccountingSubjectServiceProvider;
use OtkurBiz\jdy\JdyAccounting\Voucher\VoucherServiceProvider;
use OtkurBiz\jdy\JdyAccounting\System\SystemServiceProvider;
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
        SystemServiceProvider::class,
        AuthServiceProvider::class,
        AccountingSubjectServiceProvider::class,
        VoucherServiceProvider::class,
    ];
}

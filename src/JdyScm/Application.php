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
use OtkurBiz\jdy\JdyScm\Bill\BillServiceProvider;
use OtkurBiz\jdy\JdyScm\Customer\CustomerServiceProvider;
use OtkurBiz\jdy\JdyScm\Inventory\InventoryServiceProvider;
use OtkurBiz\jdy\JdyScm\Product\ProductServiceProvider;
use OtkurBiz\jdy\JdyScm\Sale\SaleServiceProvider;
use OtkurBiz\jdy\JdyScm\SaleOrder\SaleOrderServiceProvider;
use OtkurBiz\jdy\JdyScm\SaleReturn\SaleReturnServiceProvider;
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
        SaleOrderServiceProvider::class,
        ProductServiceProvider::class,
        BillServiceProvider::class,
        SaleServiceProvider::class,
        SaleReturnServiceProvider::class,
        InventoryServiceProvider::class,
    ];
}

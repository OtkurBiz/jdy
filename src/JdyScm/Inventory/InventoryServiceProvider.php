<?php
/*
 * This file is part of the otkurbiz/jdy.
 *
 * (c) alim <alim@bulutbazar.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace OtkurBiz\jdy\JdyScm\Inventory;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

/**
 * Class ServiceProvider.
 *
 * @author alim <alim@bulutbazar.com>
 */
class InventoryServiceProvider implements ServiceProviderInterface
{
    /**
     * {@inheritdoc}.
     */
    public function register(Container $app)
    {
        !isset($app['inventory']) && $app['inventory'] = function ($app) {
            return new Inventory($app);
        };
    }
}

<?php

/*
 *
 *

 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace OtkurBiz\jdy\Kernel\Contracts;

/**
 * Interface EventHandlerInterface.
 *
 * @author alim <alim@bulutbazar.com>
 */
interface EventHandlerInterface
{
    /**
     * @param mixed $payload
     */
    public function handle($payload = null);
}

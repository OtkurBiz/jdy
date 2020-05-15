<?php

/*
 * This file is part of the otkurbiz/jdy.
 *
 * (c) alim <alim@bulutbazar.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace OtkurBiz\jdy;

use Illuminate\Support\Facades\Facade as LaravelFacade;

/**
 * Class Facade.
 *
 * @author alim <alim@bulutbazar.com>
 */
class Facade extends LaravelFacade
{
    /**
     * 默认为 Server.
     *
     * @return string
     */
    public static function getFacadeAccessor()
    {
        return 'jdy.mini_program';
    }

    /**
     * @return \OtkurBiz\jdy\MiniProgram\Application
     */
    public static function miniProgram($name = '')
    {
        return $name ? app('jdy.mini_program.'.$name) : app('jdy.mini_program');
    }
}

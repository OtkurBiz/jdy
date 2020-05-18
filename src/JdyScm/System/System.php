<?php

/*
 *
 *

 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace OtkurBiz\jdy\JdyScm\System;

use OtkurBiz\jdy\Kernel\BaseClient;

/**
 * Class ServiceList.
 *
 * @author alim
 */
class System extends BaseClient
{
    /*
     * 查询账套列表
     * 获取精斗云进销存V3系统的账套列表
     */
    public function serviceList(int $id = 0)
    {
        $params = ['id'=>$id];
        return $this->httpGet('jdyscm/service/list', $params);
    }

    /*
     * 查询系统参数
     * 获取精斗云进销存V3系统的系统参数设置
     */
    public function profile(int $dbld){

        $params = ['dbId'=>$dbld];
        return $this->httpGet('jdyscm/profile/query', $params);
    }
}

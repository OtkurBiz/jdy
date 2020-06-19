<?php

/*
 *
 *

 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace OtkurBiz\jdy\JdyScm\Inventory;



use OtkurBiz\jdy\JdyScm\JdyScmClient;
use OtkurBiz\jdy\Kernel\BaseClient;

/**
 * Class ServiceList.
 *
 * @author alim
 */
class Inventory extends JdyScmClient
{
    /*
     * 查询客户列表
     * 获取精斗云进销存V3系统的客户列表（支持过滤）
     */
    public function list($number, $showZero = 0)
    {
        return $this->httpPostJson('jdyscm/inventory/list', ['number'=>$number, 'showZero'=>$showZero]);
    }

}

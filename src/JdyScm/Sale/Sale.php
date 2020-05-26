<?php

/*
 *
 *

 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace OtkurBiz\jdy\JdyScm\Sale;



use OtkurBiz\jdy\JdyScm\JdyScmClient;
use OtkurBiz\jdy\Kernel\BaseClient;

/**
 * Class ServiceList.
 *
 * @author alim
 */
class Sale extends JdyScmClient
{
    /*
     * 查询客户列表
     * 获取精斗云进销存V3系统的客户列表（支持过滤）
     */
    public function list($filter = [])
    {
        $filter = json_encode($filter, JSON_FORCE_OBJECT);
        return $this->httpPostJson('jdyscm/delivery/list', ['filter'=>$filter]);
    }

    public function addSale($data){
        return $this->httpPostJson('jdyscm/delivery/add', ['items'=>[$data]]);
    }

    public function addSales($items){
        return $this->httpPost('jdyscm/delivery/add', ['items'=>$items]);
    }

    public function updateSale($data){
        return $this->httpPostJson('jdyscm/delivery/update', ['items'=>[$data]]);
    }

    public function updateSales($items){
        return $this->httpPost('jdyscm/delivery/update', ['items'=>$items]);
    }



}

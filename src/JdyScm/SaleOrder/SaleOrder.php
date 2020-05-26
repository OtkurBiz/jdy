<?php

/*
 *
 *

 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace OtkurBiz\jdy\JdyScm\SaleOrder;



use OtkurBiz\jdy\JdyScm\JdyScmClient;
use OtkurBiz\jdy\Kernel\BaseClient;

/**
 * Class ServiceList.
 *
 * @author alim
 */
class SaleOrder extends JdyScmClient
{
    /*
     * 查询客户列表
     * 获取精斗云进销存V3系统的客户列表（支持过滤）
     */
    public function list($filter = [])
    {
        $filter = json_encode($filter, JSON_FORCE_OBJECT);
        return $this->httpPostJson('jdyscm/saleOrder/list', ['filter'=>$filter]);
    }

    public function addSaleOrder($data){
        return $this->httpPostJson('jdyscm/saleOrder/add', ['items'=>[$data]]);
    }

    public function addSaleOrders($items){
        return $this->httpPost('jdyscm/saleOrder/add', ['items'=>$items]);
    }

    public function updateSaleOrder($data){
        return $this->httpPostJson('jdyscm/saleOrder/update', ['items'=>[$data]]);
    }

    public function updateSaleOrders($items){
        return $this->httpPost('jdyscm/saleOrder/update', ['items'=>$items]);
    }



}

<?php

/*
 *
 *

 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace OtkurBiz\jdy\JdyScm\SaleReturn;



use OtkurBiz\jdy\JdyScm\JdyScmClient;
use OtkurBiz\jdy\Kernel\BaseClient;

/**
 * Class ServiceList.
 *
 * @author alim
 */
class SaleReturn extends JdyScmClient
{
    /*
     * 查询客户列表
     * 获取精斗云进销存V3系统的客户列表（支持过滤）
     */
    public function list($filter = [])
    {
        $filter = json_encode($filter, JSON_FORCE_OBJECT);
        return $this->httpPostJson('jdyscm/saleReturn/list', ['filter'=>$filter]);
    }

    public function addSaleReturn($data){
        return $this->httpPostJson('jdyscm/saleReturn/add', ['items'=>[$data]]);
    }

    public function addSaleReturns($items){
        return $this->httpPost('jdyscm/saleReturn/add', ['items'=>$items]);
    }

    public function updateSaleReturn($data){
        return $this->httpPostJson('jdyscm/saleReturn/update', ['items'=>[$data]]);
    }

    public function updateSaleReturns($items){
        return $this->httpPost('jdyscm/saleReturn/update', ['items'=>$items]);
    }



}

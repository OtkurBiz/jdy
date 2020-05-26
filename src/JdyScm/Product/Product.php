<?php

/*
 *
 *

 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace OtkurBiz\jdy\JdyScm\Product;



use OtkurBiz\jdy\JdyScm\JdyScmClient;
use OtkurBiz\jdy\Kernel\BaseClient;

/**
 * Class ServiceList.
 *
 * @author alim
 */
class Product extends JdyScmClient
{
    /*
     * 查询客户列表
     * 获取精斗云进销存V3系统的客户列表（支持过滤）
     */
    public function list($filter = [])
    {
        $filter = json_encode($filter, JSON_FORCE_OBJECT);
        return $this->httpPostJson('jdyscm/product/list', ['filter'=>$filter]);
    }

    public function addProduct($data){
        return $this->httpPostJson('jdyscm/product/add', ['items'=>[$data]]);
    }

    public function addProducts($items){
        return $this->httpPost('jdyscm/product/add', ['items'=>$items]);
    }

    public function updateProduct($data){
        return $this->httpPostJson('jdyscm/product/update', ['items'=>[$data]]);
    }

    public function updateSaleOrders($items){
        return $this->httpPost('jdyscm/product/update', ['items'=>$items]);
    }



}

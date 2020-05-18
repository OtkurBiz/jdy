<?php

/*
 *
 *

 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace OtkurBiz\jdy\JdyScm\Customer;



use OtkurBiz\jdy\JdyScm\JdyScmClient;
use OtkurBiz\jdy\Kernel\BaseClient;

/**
 * Class ServiceList.
 *
 * @author alim
 */
class Customer extends JdyScmClient
{
    /*
     * 查询客户列表
     * 获取精斗云进销存V3系统的客户列表（支持过滤）
     */
    public function customerList($filter = [])
    {
        return $this->httpPostJson('jdyscm/customer/list', ['filter'=>$filter]);
    }

    public function addCustomer($data){
        return $this->httpPostJson('jdyscm/customer/add', ['items'=>[$data]]);
    }

    public function addCustomers($items){
        return $this->httpPost('jdyscm/customer/add', ['items'=>$items]);
    }

}

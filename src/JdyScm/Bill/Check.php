<?php

/*
 *
 *

 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace OtkurBiz\jdy\JdyScm\Bill;



use OtkurBiz\jdy\JdyScm\JdyScmClient;
use OtkurBiz\jdy\Kernel\BaseClient;

/**
 * Class ServiceList.
 *
 * @author alim
 */
class Check extends JdyScmClient
{
    /*
     * 审核单据
     * @params
     * $billNumber 单据编号
     * $billType 单据类型（pur：购货单，po：购货订单，sale：销货单，so：销货订单，oi：其它入库单，oo：其它出库单，tf：调拨单）
     * $state 审核类型(1：审核，2：反审核)
     */

    public function check($billNumber, $billType, $state)
    {
        return $this->httpGet('jdyscm/bill/check', ['billNo'=>$billNumber, 'billType'=>$billType, 'state'=>$state]);
    }



}

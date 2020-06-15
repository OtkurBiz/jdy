<?php

/*
 *
 *

 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace OtkurBiz\jdy\JdyAccounting\System;

use OtkurBiz\jdy\JdyAccounting\JdyAccountingClient;

/**
 * Class ServiceList.
 *
 * @author alim
 */
class System extends JdyAccountingClient
{
    /*
     * 查询账套列表
     * 获取精斗云进销存V3系统的账套列表
     */
    public function serviceList(int $id = 0)
    {
        $params = [];
        if($id){
            $params = ['id'=>$id];
        }

        return $this->httpGet('jdyaccouting/service', $params);
    }

    /*
     * 备注： 目前支持以下key

acct_rule - 科目编码规则（例如4-2-2-2）
acct_std - 会计准则 —CHS.XQY_2011: 小企业制度(2013) —CHS.NewAcct: 新会计准则（2006） —CHS.NGO：民间非营利组织会计制度 —CHS.XQY.Normal 小企业会计制度（2004年颁） —CHS.QY.Normal 企业会计制度（2000年颁） —CHS.NewAcct_2018 新会计准则(2018年未执行新金融、新收入准则)
cur_period - 当前期间(例如201805代表2018年第05期)
start_period - 启用期间
acct_name	- 公司名称
std_currency	- 本位币编码

     */
    public function profile(string  $key){

        return $this->httpGet('jdyaccouting/profile', ['key'=>$key]);
    }

    public function balanceCheck(){

        return $this->httpGet('jdyaccouting/balance/check', []);
    }

    public function balanceQuery(int $classId, string $currency = 'RMB'){

        return $this->httpGet('jdyaccouting/balance/query', ['classId'=>$classId, 'currency'=>$currency]);
    }

    public function getLog(string $username){
        return $this->httpGet('jdyaccouting/log/logCount4KJSchool', ['username'=>$username]);

    }
}

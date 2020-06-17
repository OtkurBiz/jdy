<?php

/*
 *
 *

 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace OtkurBiz\jdy\JdyAccounting\Voucher;

use OtkurBiz\jdy\JdyAccounting\JdyAccountingClient;

/**
 * Class ServiceList.
 *
 * @author alim
 */
class Voucher extends JdyAccountingClient
{
    /*
     * 查询账套列表
     * 获取精斗云进销存V3系统的账套列表
     * --fromPeriod	true	number	起始期间(例如201801)
--toPeriod	true	number	结束期间（例如201802）
--vchGroup	false	string	凭证字
--vchNum	false	string	凭证号(支持多个，或范围，示例：1,2,3或1-3)
--vchId	false	string	凭证Id
--linkId	false	string	外部系统编号(唯一)
--status	false	number	状态（0-未审核; 1-已审核）
--onlyMech	false	number	是否只查询机制凭证（系统生成） (0 - 否；1 - 是)
--exp	false	string	摘要
--account	false	string	科目编码或编码范围（示例：单个科目：1001；多科目：1001,1002；范围：1001-1009）
--itemClsName	false	string	自定义辅助核算类别名称
--itemName	false	string	自定义辅助核算名称（需配合itemClsName使用）
--fromAmount	false	number	凭证合计金额范围（从）
--toAmount	false	number	凭证合计金额范围（至）
--userName	false	string	制单人
--currency	false	string	货币名称
--transTypeName	false	string	凭证模板
--page	false	number	页码
--pageSize	false	number	每页记录数
     */
    public function list(array $filter = [])
    {
        return $this->httpPostJson('jdyaccouting/voucherlist', ['filter'=>$filter]);
    }

    public function add(array $vouchers, bool $mode = false){
        return $this->httpPostJson('jdyaccouting/voucher', $vouchers, ['mode'=>$mode]);
    }


}

<?php

/*
 *
 *

 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace OtkurBiz\jdy\JdyAccounting\AccountingSubject;

use OtkurBiz\jdy\JdyAccounting\JdyAccountingClient;

/**
 * Class ServiceList.
 *
 * @author alim
 */
class AccountingSubject extends JdyAccountingClient
{
    /*
     * 查询账套列表
     * 获取精斗云进销存V3系统的账套列表
     */
    public function list(array $params = [])
    {
        return $this->httpGet('jdyaccouting/account', $params);
    }

    /**
     * @param array $params
     *                     --number	true	number	科目编码
    --name	true	string	科目名称
    --dc	true	number	借/贷 （借方科目：1；贷方科目:-1）
    --groupName	true	string	科目类别名称
    --itemClsName	false	string	自定义辅助核算项目类别1名称
    --itemClsName1	false	string	自定义辅助核算项目类别2名称
    --currency	false	string	货币代码
    --useCustomer	false	number	是否使用“客户”核算
    --useSupplier	false	number	是否使用“供应商”核算
    --useDept	false	number	是否使用“部门”核算
    --useEmp	false	number	是否使用“职员”核算
    --useInventory	false	number	是否使用“存货”核算
    --useProject	false	number	是否使用“项目”核算
    --useQtyAux	false	number	是否使用数量辅助核算
    --qtyUnit	false	string	数量单位编码
     *
     * @return array|object|\OtkurBiz\jdy\Kernel\Support\Collection|\Psr\Http\Message\ResponseInterface|string
     * @throws \OtkurBiz\jdy\Kernel\Exceptions\InvalidConfigException
     *
     *
     */
    public function create(array $params = [])
    {
        return $this->httpPost('jdyaccouting/account', $params);
    }

}

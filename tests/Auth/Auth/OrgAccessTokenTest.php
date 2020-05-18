<?php

use OtkurBiz\jdy\Factory;
use PHPUnit\Framework\TestCase;

class OrgAccessTokenTest extends TestCase
{
    public function testToken()
    {
        $config = require __DIR__.'/../../config.php';
        $app = Factory::make($config);
        $token = $app->access_token->getToken();
        $accessToken = $token['data']['access_token'];


        $jdyscm = Factory::make($config, 'jdyScm');
//        $serviceList = $jdyscm->system->serviceList();
//        $serviceList = $jdyscm->system->profile(792129189262);

//        $customerList = $jdyscm->customer->customerList();die;
//        $customer = $jdyscm->customer->customerList(['number'=>7]);
//        var_dump($customer);die;
//        $data = [
//            'category'  => '',
//            'level'     => 0,
//            'remark'    => '',
//            'name'      => 'alim',
//            'number'    => 7,
//            'contacts'  => [[
//                'isPrimary' => true,
//                'name'      => 'alim',
//                'mobile'    => '13498989898',
//                'address'   => '新疆乌鲁木齐'
//            ]]
//        ];
//        $customerList = $jdyscm->customer->addCustomer($data);

        var_dump($customerList);die;
    }
}

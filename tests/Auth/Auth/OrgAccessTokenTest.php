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
//        var_dump($serviceList);die;
//        $serviceList = $jdyscm->system->profile(792129189262);

//        $customerList = $jdyscm->customer->customerList();
//        var_dump($customerList);die;
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

//        var_dump($customerList);die;
//
//        $productList = $jdyscm->product->list();
//        var_dump($productList);die;


//        $saleOrderList = $jdyscm->saleOrder->list();
//        var_dump($saleOrderList);die;
//        $saleData = [
//            'number'    => 9545215123123,
//            'date'      => '2020-05-21 11:00:12',
//            'customerNumber'    => 7,
//            'receivedAmt' => 10.33,
//            'entries'   => [
//                [
//                    'productNumber' => 31350,
//                    'location'  => 'CK001',
//                    'qty'       => 1,
//                    'price'     => 10.33,
//                    'unit'      => 129689680396318333
//                ]
//            ]
//        ];
//        $saleOrder = $jdyscm->saleOrder->addSaleOrder($saleData);
//        var_dump($saleOrder);die;

//        $bill = $jdyscm->check->check('9545215123123', 'so', 1);
//        var_dump($bill);die;


//
        $product = $jdyscm->product->list(['productNumber'=>31140]);
        $saleData = [
            'number'    => 954521512312312,
            'date'      => '2020-05-21 11:00:12',
            'customerNumber'    => 7,
            'receivedAmt' => 15,
            'accounts'  => [[
                'payment'=> 15,
                'number' => 1003,

            ]],
            'entries'   => [
                [
                    'productNumber' => 31140,
                    'location'  => 'CK001',
                    'qty'       => 1,
                    'price'     => 10,
                    'unit'      =>$product['items'][0]['unit']
                ]
            ]
        ];

//        $sale = $jdyscm->sale->addSale($saleData);
//        var_dump($sale, 1);die;

        $bill = $jdyscm->check->check('954521512312312', 'sale', 2);
        var_dump($bill);die;
    }
}

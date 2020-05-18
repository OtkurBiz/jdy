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

        $customerList = $jdyscm->customer->customerList();

        var_dump($customerList);die;
    }
}

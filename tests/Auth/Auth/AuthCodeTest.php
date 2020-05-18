<?php

use OtkurBiz\jdy\Factory;
use PHPUnit\Framework\TestCase;

class AuthCodeTest extends TestCase
{
    public function testToken()
    {
        $config = require __DIR__.'/../../config.php';
        $app = Factory::make($config);
        $code = $app->auth_code->authCode($app->access_token->getToken()['data']['access_token']);
        $this->assertEquals(0, $code['errcode']);
        $this->assertArrayHasKey('data', $code);
        $this->assertArrayHasKey('auth_code', $code['data']);
    }

    public function validateAuthCode()
    {
        $config = require __DIR__.'/../../config.php';
        $app = Factory::make($config);
        $result = $app->auth_code->validate($app->auth_code->authCode($app->access_token->getToken()['data']['access_token']));
        $this->assertEquals(0, $result['errcode']);
        $this->assertArrayHasKey('data', $result);
        $this->assertArrayHasKey('uid', $result['data']);
    }
}

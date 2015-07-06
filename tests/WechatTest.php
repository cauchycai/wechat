<?php

namespace \Wechat\Test;

use \Wechat\Wechat;
use \WechatCrypto\Crypto;

class WechatTest extends \PHPUnit_Framework_TestCase
{
    private $token;
    private $encodingAesKey;
    private $appId;

    public function setUp()
    {
        $this->token = 'pamtest';
        $this->encodingAesKey = 'abcdefghijklmnopqrstuvwxyz0123456789ABCDEFG';
        $this->appId = 'wxb11529c136998cb6';
    }

    /**
     * @dataProvider checkSignatureWorksData
     */
    public function testCheckSignatureWorks($query, $token)
    {
        $success = Wechat::checkSignature($query, $token);
        $this->assertTrue($success);
    }

    public function checkSignatureWorksData()
    {
        return array(
            array(
                'query' => array('signature' => 'signature', 'timestamp' => '1435909566'),
                'token' => 'token'
            ),
        );
    }
}

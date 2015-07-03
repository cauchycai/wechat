<?php

namespace Wechat\Test;

use \Wechat\Wechat;

class WechatTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
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

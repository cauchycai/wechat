<?php
/**
 * MsgBase
 *
 * Base Class for Message Classes
 *
 * @author    Cauchy Cai <cauchy.cai@gmail.com>
 * @createDate 2015-07-07 14:06
 * @copyright Copyright (c) 2015 Cauchy Cai
 */

namespace \Wechat;

use \Exception;

abstract class MsgBase
{
    private $basicItems = ['ToUserName', 'FromUserName', 'CreateTime'];
    protected $extraItems = [];
    protected $msgData;

    public function __construct(array $msgData)
    {
        $this->checkBasicItems($msgData);
        $this->checkExtraItems($msgData);
        $this->msgData = $msgData;
    }

    protected function checkBasicItems(array $msgData)
    {
        if (!isset($msgData['CreateTime'])) $msgData['CreateTime'] = time();
        foreach ($this->basicItems as $name) {
            if (!isset($msgData[$name])) throw new Exception();
        }
        return true;
    }

    abstract protected function checkExtraItems(array $msgData);

    public function getMsgType()
    {
        return $this->msgData['MsgType'];
    }
}

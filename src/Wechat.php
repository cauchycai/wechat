<?php
/**
 * Wechat
 *
 * Wechat Message Callback Processing
 *
 * @author     Cauchy Cai <cauchy.cai@gmail.com>
 * @createDate 2015-07-03 11:46
 * @copyright Copyright (c) 2015 Cauchy Cai
 */

namespace Wechat;

class Wechat
{
    public static function checkSignature(array $query, $token)
    {
        $signature = $query['signature'];
        $timestamp = $query['timestamp'];
        $nonce = $query['nonce'];
        $tmpArr = array($token, $timestamp, $nonce);
        sort($tmpArr, SORT_STRING);
        $tmpStr = implode($tmpArr);
        $tmpStr = sha1($tmpStr);
        return $tmpStr === $signature;
    }
}

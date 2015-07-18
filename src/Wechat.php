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

namespace \Wechat;

class Wechat
{
    const MSG_TYPE_TEXT = 'text';
    const MSG_TYPE_LINK = 'link';
    const MSG_TYPE_NEWS = 'news';
    const MSG_TYPE_EVENT = 'event';
    const MSG_TYPE_IMAGE = 'image';
    const MSG_TYPE_VOICE = 'voice';
    const MSG_TYPE_VIDEO = 'video';
    const MSG_TYPE_MUSIC = 'music';
    const MSG_TYPE_LOCATION = 'location';
    const EVENT_SUBSCRIBE = 'subscribe';
    const EVENT_UNSUBSCRIBE = 'unsubscribe';
    const EVENT_VIEW = 'view';
    const EVENT_CLICK = 'click';
    const EVENT_SCAN = 'scan';
    const EVENT_LOCATION = 'location';
    const EVENT_SCANCODE_PUSH = 'scancode_push';
    const EVENT_SCANCODE_WAITMSG = 'scancode_waitmsg';

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

    public static function reply()
    {

    }
}

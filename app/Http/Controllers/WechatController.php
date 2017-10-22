<?php
/**
 * PHP version 5.5
 *
 * @copyright  Copyright (c) 2012-2015 EELLY Inc. (http://www.eelly.com)
 * @link       http://www.eelly.com
 * @license    衣联网版权所有
 */



namespace App\Http\Controllers;


use Illuminate\Http\Request;

class WechatController extends Controller
{

    /**
     * index.
     *
     * @param Request $request
     * @return bool|mixed
     * @requestExample({})
     * @returnExample(true)
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2017年10月22日
     */
    public function index(Request $request)
    {
        $echoStr = $request->get("echostr",'');
        $signature = $request->get("signature",'');
        $timestamp = $request->get("timestamp",'');
        $nonce = $request->get("nonce",'');
        $token = 'wechat112';
        $tmpArr = array($token, $timestamp, $nonce);
        sort($tmpArr);
        $tmpStr = implode($tmpArr);
        $tmpStr = sha1($tmpStr);
        if ($tmpStr == $signature) {
            return $echoStr;
        } else {
            return '';
        }
    }
}
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
use Illuminate\Support\Facades\Log;

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
        /*$echoStr = $request->get("echostr",'');
        $signature = $request->get("signature",'');
        $timestamp = $request->get("timestamp",'');
        $nonce = $request->get("nonce",'');*/
        $token = 'wechat112';

        $APPID = 'wx1062854dd7b2dbd6';
        $APPSECRET = 'bc623d22ecaa944ca4e7fdd5ef79f16b';


        $url = 'https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid='.$APPID.'&secret='.$APPSECRET;
        $contents = file_get_contents($url);
        dd($contents);

        $url = 'https://api.weixin.qq.com/scan/merchantinfo/get?access_token='.$token;
        $contents = file_get_contents($url);
        dd($contents);
        /*$tmpArr = array($token, $timestamp, $nonce);
        sort($tmpArr);
        $tmpStr = implode($tmpArr);
        $tmpStr = sha1($tmpStr);
        if ($tmpStr == $signature) {
            Log::info($echoStr.'kkk');
            return $echoStr;
        } else {
            return '';
        }*/
    }
}
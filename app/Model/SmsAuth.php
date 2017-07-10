<?php

namespace App\Library\Tools\SMS;

use Cache;
/**
 *   使用方法:为手机短信验证服务
 */
class SmsAuth {

    public function smsAuth($action, $phone)
    {
        //阿里大鱼的两个key
        $appkey = '';
        $secretkey = '';
        //创建短信验证类
        $alisms = new \App\Library\Tools\SMS\AliSms($appkey, $secretkey, '', '');
        //return var_dump($alisms);
        //生成随机的验证码
        $code = rand(100000, 999999);
        //创建短信内容信息数组
        $smsarr=array();
        //判断用户行为
        switch ($action) {
            case '注册验证':
                $smsarr=['data' => ['code' => strval($code), 'product' => '恒大在线教育'], 'code' => 'SMS_70450030'];
                break;
            case '变更验证':
                $smsarr=['data' => ['code' => strval($code), 'product' => '恒大在线教育'], 'code' => 'SMS_70450028'];
                break;
            case '登录验证':
                $smsarr=['data' => ['code' => strval($code), 'product' => '恒大在线教育'], 'code' => 'SMS_70450032'];
                break;
            case '身份验证':
                $smsarr=['data' => ['code' => strval($code), 'product' => '恒大在线教育'], 'code' => 'SMS_70450034'];
                break;
            default:
                return [false, '数据出错,发送失败'];
                break;
        }
        //得到结果
        $result = $alisms->sign('')->data($smsarr['data'])->code($smsarr['code'])->send($phone);
        //将返回的json数据转成数组
        $result = json_decode($result,true);
        if(!$result) return [false,'发送失败，请重新发送'];
        //根据返回的json数据信息判断是否发送成功，并输出内容
        foreach ($result as $key => $value) {
            if($key == 'error_response'){
                return [false,'发送失败，'.$value['sub_msg'].'，请重新发送！'];
            }elseif($key == 'alibaba_aliqin_fc_sms_num_send_response' && $value['result']['success'] == '1'){

                Cache::put("STRING:USER:FLAG:".$phone, 1, 1);                //用于设置缓存值    有效期为1分钟
                Cache::put("STRING:USER:".$phone.":".$action, $code, 30);    //用于设置缓存值    有效期为30分钟

                return [true, '发送成功'];
            }else{
                return [false, '发送失败，请重新发送！'];
            }
        }
    }
}

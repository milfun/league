<?php
/**
 * @Author: MilFun
 * @Date:   2019-09-25 10:06:13
 * @Last Modified by:   milfun
 * @Last Modified time: 2019-10-25 10:47:46
 */
namespace app\index\model;

use think\Model;
use thinl\Request;

class Config extends Model
{
    public function getConfigList()
    {   
        $res = $this->field('name,value')->select();
        $res = json_decode(json_encode($res),true);
        //dump($res);
        $config = [];
        if ($res && is_array($res)) {
            foreach ($res as $v) {
                $config[$v['name']] = $v['value'];
            }
        }
        return $config;
    }

    /*
		获取随机字符串
	*/
    protected function randstr($length=6)
    {
    	$hash='';
        $chars= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz@#!~?:-='; 
        $max=strlen($chars)-1;   
        mt_srand((double)microtime()*1000000);   
        for($i=0;$i<$length;$i++)   {   
        	$hash.=$chars[mt_rand(0,$max)];   
        }
        return $hash;
    }

    protected function getPwdHash($uid)
    {
    	# code...
    	$res = $this->where('uid',$uid)->value('pwd_hash');
    	return $res;
    }


}
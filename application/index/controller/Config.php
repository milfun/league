<?php

/**
 * @Author: MilFun
 * @Date:   2019-09-25 10:59:13
 * @Last Modified by:   milfun
 * @Last Modified time: 2019-10-21 09:44:09
 */
namespace app\index\controller;

use think\Controller;

class Config extends Controller{
    public function index()
    {
    	echo "Config Controller";
    }

    public function getConfigCache()
    {
        # code...
        $config = cache('DB_CONFIG_DATA');
        if (!$config) {
            //echo "111111111";
            $config =model('Config')->getConfigList();
            cache('DB_CONFIG_DATA',$config);
        }
        config($config);
    }

    
    
}
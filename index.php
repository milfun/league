<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// [ 应用入口文件 ]

// 定义应用目录
define('APP_PATH', __DIR__ . '/application/');

/********* 线上线下切换 **********/
// test
define('APP_DOMAIN', 'http://milfun.com');
// online
//define('APP_DOMAIN', 'https://mp.milfun.fun');
/*************************
还要去config.php文件里改app_status	
- test  	为本地测试    
- online 	为线上部署
*************************/

/********* 线上线下切换 **********/

// 定义静态资源目录
define('IMG_PATH', __DIR__ . '/public/static/img/');
define('CSS_PATH', __DIR__ . '/public/static/css/');
define('JS_PATH', __DIR__ . '/public/static/js/');

// 定义配置文件目录和应用目录同级
define('CONF_PATH', __DIR__.'/config/');

//

// 加载框架引导文件
require __DIR__ . '/thinkphp/start.php';

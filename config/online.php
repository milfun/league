<?php

/**
 * @Author: MilFun
 * @Date:   2019-10-25 10:15:45
 * @Last Modified by:   milfun
 * @Last Modified time: 2019-10-25 10:16:08
 */
return [
	'database' => [
// 数据库类型
    'type'            => 'mysql',
    /*************milfun服务器*************/
    'database'               => 'bdm257366249_db',   // 数据库名
    //'DB_HOST'               => '47.89.48.123',   // 服务器地址
    //'DB_HOST'               => '123.56.127.173',   
    'hostname'               => 'bdm257366249.my3w.com',   // 
    // 服务器地址
    'username'               => 'bdm257366249',          // 用户名
    'password'                => '520shmily',     // 密码
    /************************************/
    
    // 端口
    'hostport'        => '3306',
    // 连接dsn
    'dsn'             => '',
    // 数据库连接参数
    'params'          => [],
    // 数据库编码默认采用utf8
    'charset'         => 'utf8',
    // 数据库表前缀
    'prefix'          => 'wz_',
    // 数据库调试模式
    'debug'           => true,
    // 数据库部署方式:0 集中式(单一服务器),1 分布式(主从服务器)
    'deploy'          => 0,
    // 数据库读写是否分离 主从式有效
    'rw_separate'     => false,
    // 读写分离后 主服务器数量
    'master_num'      => 1,
    // 指定从服务器序号
    'slave_no'        => '',
    // 是否严格检查字段是否存在
    'fields_strict'   => true,
    // 数据集返回类型
    'resultset_type'  => 'array',
    // 自动写入时间戳字段
    'auto_timestamp'  => false,
    // 时间字段取出后的默认时间格式
    'datetime_format' => 'Y-m-d H:i:s',
    // 是否需要进行SQL性能分析
    'sql_explain'     => false,
],

    
];

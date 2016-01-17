<?php
/**
 * Created by PhpStorm.
 * User: a1311
 * Date: 2015/12/14
 * Time: 23:40
 */
require "Lib/Zeus.php";
$config=array(
    //数据库配置信息
    'DB_TYPE'   => 'mysql', // 数据库类型
    'DB_HOST'   => 'localhost', // 服务器地址
    'DB_NAME'   => 'str', // 数据库名
    'DB_USER'   => 'root', // 用户名
    'DB_PWD'    => 'root', // 密码
    'DB_PORT'   => 3306, // 端口
    'DB_PREFIX' => 'str_', // 数据库表前缀
    'DB_CHARSET'=> 'utf8', // 字符集
);
Lib\Library\Db\Db::getInstance($config);
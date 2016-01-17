<?php

/**
 * Created by PhpStorm.
 * User: a1311
 * Date: 2015/12/15
 * Time: 0:23
 */
// 系统常量定义
defined('ZEUS_PATH')   or define('ZEUS_PATH',     __DIR__.'/');
defined('APP_PATH')     or define('APP_PATH',       dirname($_SERVER['SCRIPT_FILENAME']).'/');

function autoload($class){
      require APP_PATH.$class.'.class.php';
//    print_r(APP_PATH.$class.'.class.php');
}

spl_autoload_register('autoload');
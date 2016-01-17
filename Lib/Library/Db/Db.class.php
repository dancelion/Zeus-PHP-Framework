<?php
/**
 * Created by PhpStorm.
 * User: a1311
 * Date: 2015/12/15
 * Time: 0:58
 */

namespace Lib\Library\Db;
class Db
{
    static private  $_instance  =  null;   //  当前数据库连接实例
    private function __construct(){}

    static function getInstance($config=array()){
        $config=array('type'=>"mysql");
        if(! self::$_instance){
            if($config['type']=='mysql'){
                self::$_instance=new Driver\Mysql($config);
            }
        }
        return self::$_instance;
    }
}
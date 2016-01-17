<?php
/**
 * Created by PhpStorm.
 * User: a1311
 * Date: 2016/1/5
 * Time: 22:41
 */

namespace Lib\Library\Db\Driver;
use Lib\Library\Db\Driver;

class Mysql extends Driver{
    private $setting=array();

    function __construct($config){
        $this->setting=$config;
    }

    function connect(){

    }

    function query(){

    }

    function close(){

    }
}
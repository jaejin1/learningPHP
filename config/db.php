<?php
/**
 * Created by PhpStorm.
 * User: jaejin
 * Date: 2017. 2. 4.
 * Time: PM 12:39
 */

define('DB_NAME','phpstudy');
define('DB_USER','root');
define('DB_PASSWORD','1111');
define('DB_HOST','localhost');

error_reporting(E_ALL ^ E_DEPRECATED);

class DBConnect{

    function __construct(){
        $connector = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
        if(!$connector){
            die('could not connect: ' . mysql_error());
        }
        mysql_select_DB(DB_NAME,$connector);
        mysql_query("SET NAMES utf8");
    }
}

$DBConnect = new DBConnect();
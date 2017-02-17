<?php
/**
 * Created by PhpStorm.
 * User: jaejin
 * Date: 2017. 2. 3.
 * Time: PM 9:11
 */
session_start();
include_once $_SERVER['DOCUMENT_ROOT'] . '/Sites/config/config.php';
#include_once ROOT_PATH . '/config/config.php';
if(isset($_SESSION["session_id"]))
    $id = $_SESSION["session_id"];
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title> jaejin study page </title>
    <link rel="stylesheet" type="text/css" href="<?echo HOME_PATH?>/css/main/header">


</head>
<body>

    <? Header::render(); ?>


        <?
            $a = 'home';
            echo $a;
        ?>
    <!--<script type="text/javascript">
        var xhr;
        function getServerTime(){
            xhr = new XMLHttpRequest();
            xhr.open('HEAD',"http://uiandwe.tistory.com/",false);
            xhr.setRequestHeader("Content-Type", "text/html");
            //document.write("1asdf");

            xhr.send('');
            document.write("1asdf");

            eval("reg.timer").value = xhr.getResponseHeader("Date");
            xhr = null;
        }

        window.setInterval("getServerTime();",100);
    </script>-->
    <script language="javascript">
        var xmlHttp;
        function srvTime(){
            xmlHttp = new XMLHttpRequest();
            xmlHttp.open('HEAD',"http://localhost/Sites/index",false);  //헤더 정보만 받기 위해 HEAD방식으로 요청.

            xmlHttp.setRequestHeader("Content-Type", "text/html");
            xmlHttp.send('');
            document.write("1asdf");

            eval("reg.timer").value=xmlHttp.getResponseHeader("Date");
            return xmlHttp.getResponseHeader("Date");  //받은 헤더정보에서 Date 속성을 리턴.
        }

        var serverTime = srvTime(), clientTime = new Date();

        document.write( 'crootTime is ' + serverTime + '<br /> clientTime is ' + clientTime +'<br />');
        document.write(url);
        document.write("http://www.naver.com");

    </script>





    <script src="<?echo JS_ROOT?>/header/header.js"></script>
</body>
</html>

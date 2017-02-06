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
            $a = 'asdf';
            echo $a;
        ?>
    </div>


    <script src="<?echo JS_ROOT?>/header/header.js"></script>
</body>
</html>

<?php
/**
 * Created by PhpStorm.
 * User: jaejin
 * Date: 2017. 2. 3.
 * Time: PM 9:11
 */
include_once $_SERVER['DOCUMENT_ROOT'] . '/Sites/config/config.php';
#include_once ROOT_PATH . '/config/config.php';

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
    <div class="login">
        <a href="../Sites/templates/login/login.php">로그인</a>
    </div>

    <script src="<?echo JS_ROOT?>/header/header.js"></script>
</body>
</html>

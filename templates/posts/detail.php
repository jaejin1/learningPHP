<?php
/**
 * Created by PhpStorm.
 * User: jaejin
 * Date: 2017. 2. 7.
 * Time: PM 4:42
 */
session_start();

include_once $_SERVER['DOCUMENT_ROOT'] . '/Sites/config/config.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Sites/config/db.php';

if(isset($_SESSION['session_id'])) {
    $id = $_SESSION['session_id'];
}
?>


<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title> jaejin study page </title>
    <!--<link rel="stylesheet" type="text/css" href="'.CSS_ROOT.'/main/header.css">-->
    <link rel="stylesheet" type="text/css" href="<?echo HOME_PATH?>/css/main/header">
    <link rel="stylesheet" type="text/css" href="<?echo HOME_PATH?>/css/main.css">

</head>
<body>

<? Header::render(); ?>
<script src="<?echo JS_ROOT?>/header/header.js"></script>


</body>
</html>
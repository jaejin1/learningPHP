<?php
/**
 * Created by PhpStorm.
 * User: jaejin
 * Date: 2017. 2. 4.
 * Time: PM 2:14
 */

//session_start();  //아이디 가지고 로그인 유지 시킬려고

include_once $_SERVER['DOCUMENT_ROOT'] . '/Sites/config/config.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Sites/config/db.php';


$id = $_POST['id'];
$pw = $_POST['pw'];
echo $id;
echo $pw;

if($id == ""){
    echo "<script>alert('아이디를 입력하세요.');location.replace('/Sites/templates/login/login.php');</script>";
}elseif($pw == ""){
    echo "<script>alert('비밀번호를 입력하세요.');location.replace('/Sites/templates/login/login.php');</script>";
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

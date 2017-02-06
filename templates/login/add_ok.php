<?php
/**
 * Created by PhpStorm.
 * User: jaejin
 * Date: 2017. 2. 6.
 * Time: PM 1:43
 */
session_start();
include_once $_SERVER['DOCUMENT_ROOT'] . '/Sites/config/config.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Sites/config/db.php';


$id = $_POST['id'];
$pw = $_POST['pw'];

$sql = "select * from login where id='$id'";
$stmt = mysql_query($sql);
$row = mysql_fetch_array($stmt, MYSQL_NUM);
if($id == $row[1]) {
    echo "<script>alert('이미존재하는 아이디입니다.');location.replace('/Sites/templates/login/add.php');</script>";
}else{
    $sql = "insert into login (id,pw) values ('$id','$pw');";
    mysql_query($sql);
}

if($id == ""){
    echo "<script>alert('아이디를 입력하세요.');location.replace('/Sites/templates/login/add.php');</script>";
}elseif($pw == ""){
    echo "<script>alert('비밀번호를 입력하세요.');location.replace('/Sites/templates/login/add.php');</script>";
}

echo "<script>alert('회원가입을 완료하였습니다.');location.replace('/Sites/templates/login/login.php');</script>";



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

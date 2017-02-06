<?php
/**
 * Created by PhpStorm.
 * User: jaejin
 * Date: 2017. 2. 4.
 * Time: PM 2:14
 */
session_start();
include_once $_SERVER['DOCUMENT_ROOT'] . '/Sites/config/config.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Sites/config/db.php';


$id = $_POST['id'];
$pw = $_POST['pw'];
$sql = "select * from login where id='$id'";

$stmt = mysql_query($sql);
$row = mysql_fetch_array($stmt, MYSQL_NUM);
echo $row[1];




if($id == ""){
    echo "<script>alert('아이디를 입력하세요.');location.replace('/Sites/templates/login/login.php');</script>";
}elseif($pw == ""){
    echo "<script>alert('비밀번호를 입력하세요.');location.replace('/Sites/templates/login/login.php');</script>";
}

if($row[0] != $id){
    echo "
        <script>
            alert('아이디가 없습니다.');
            location.replace('/Sites/templates/login/login.php');
        </script>
        ";
}else if($row[1] != $pw){
    echo "
        <script>
            alert('비밀번호가 틀립니다.');
            location.replace('/Sites/templates/login/login.php');
        </script>
        ";
}else{
    $_SESSION['session_id'] = $id;
    echo "<script>location.replace('/Sites/index.php');</script>";
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

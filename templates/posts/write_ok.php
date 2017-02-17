<?php
/**
 * Created by PhpStorm.
 * User: jaejin
 * Date: 2017. 2. 7.
 * Time: PM 1:38
 */
session_start();
include_once $_SERVER['DOCUMENT_ROOT'] . '/Sites/config/config.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Sites/config/db.php';

if(isset($_SESSION['session_id'])) {
    $id = $_SESSION['session_id'];
}
$post = $_POST['name'];
$txtcomment = $_POST['txtcomment'];



if($post == ""){
    echo "<script>alert('제목을 입력하세요.');
    location.replace('/Sites/templates/posts/write');</script>";
}else if($txtcomment == ""){
    echo "<script>alert('내용을 입력하세요.');
    location.replace('/Sites/templates/posts/write');</script>";
}

$sql = "insert into notice (id,name,text) values ('$id','$post','$txtcomment')";
mysql_query($sql);

echo "<script>alert('작성되었습니다.');location.replace('/Sites/templates/posts/post1?block=1&block2=1');</script>";






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

$delete = $_GET['delete'];

$sql = "delete from notice where num='$delete'";
$stmt = mysql_query($sql);

    echo "<script>alert('삭제되었습니다.');location.replace('/Sites/templates/posts/post1');</script>";


?>


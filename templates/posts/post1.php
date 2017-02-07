<?php
/**
 * Created by PhpStorm.
 * User: jaejin
 * Date: 2017. 2. 7.
 * Time: AM 11:52
 */
session_start();

include_once $_SERVER['DOCUMENT_ROOT'] . '/Sites/config/config.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Sites/config/db.php';

if(isset($_SESSION['session_id'])) {
    $id = $_SESSION['session_id'];
}

$sql = "select MAX(num) as num from notice";
$stmt = mysql_query($sql);
$row = mysql_fetch_array($stmt, MYSQL_NUM);
$num = $row[0];

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
    <div class = "write">
    <?
        if(isset($id)){
            ?>
            <a href="../posts/write"> 글쓰기 </a>
            <?
        }
    ?>
    </div>

    <div class ="posts">
        <table border="0" cellpadding="1" cellspacing="1" class="posts-table">
            <tr>
                <td> 번호 </td>
                <td> 제목 </td>
                <td> 작성자 </td>
                <td> 작성날짜 </td>
            </tr>
        <?
               for(;$num>0; $num--) {
                    ?><tr><?
                   $sql = "select * from notice where num='$num'";
                    $stmt = mysql_query($sql);
                    $row = mysql_fetch_array($stmt, MYSQL_NUM);
                   ?>
                   <td> <?echo $row[4]?> </td>
                   <td> <?echo $row[1]?> </td>
                   <td> <?echo $row[0]?> </td>
                   <td> <?echo $row[3]?> </td>
                   </tr><?
                }
        ?>

        </table>
    </div>

</body>
</html>


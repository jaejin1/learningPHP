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
$maxnum = $row[0];
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


    <? if(isset($_GET['post'])) {
        $post = $_GET['post'];
        $sql = "select * from notice where num='$post'";
        $stmt = mysql_query($sql);
        $row = mysql_fetch_array($stmt, MYSQL_NUM);

        echo '제목 :   '.$row[1].'<br/>';
        echo '작성자 :   '.$row[0];
        echo '<h2>내용 :  '.$row[2].'</h2>';
        echo '<a href = "./post1">뒤로가기</a>';

    }else{
    ?>
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
                   <td> <a href="?post=<?echo $row[4]?>"><?echo $row[1]?></a> </td>
                   <td> <?echo $row[0]?> </td>
                   <td> <?echo $row[3]?> </td>
                   </tr><?
                }
        ?>

        </table>
    </div>

    <div class = "num">
        <a href="./post1">처음</a>
        <?
        while($maxnum>0){
            echo 'asdf';
        }
        ?>
        2
        3
        4
        5
        다음
    </div>
    <? } ?>
</body>
</html>


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

$block = $_GET['block'];
$block2 = $_GET['block2'];

$sql2 = "select count(*) from notice";
$stmt2 = mysql_query($sql2);
$row2 = mysql_fetch_array($stmt2, MYSQL_NUM);
$row2[0]--;
$i =1;

$number = ($row2[0] - ($row2[0]%5))/5 ;
$number2 = $number;
$start = $block*5;

$block2 = (($block) - (($block)%5))/5 ;

echo $block2;
echo 'number = '.$number;
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

        echo '제목 :   '.$row[2].'<br/>';
        echo '작성자 :   '.$row[1];
        echo '<h2>내용 :  '.$row[3].'</h2>';
        echo '<a href = "./post1">뒤로가기</a>'.'<br/>';
        echo '<a href = "./delete_ok?delete='. $row[0] .'">삭제</a>';

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
                $row2[0] = $row2[0] - $start +5;
               for(;$start>$block*5-5; $start--) {
                    ?><tr><?
                   if($row2[0]>=0){
                    $sql = "select * from notice limit $row2[0],1";
                    $stmt = mysql_query($sql);
                    $row = mysql_fetch_array($stmt, MYSQL_NUM);
                    $row2[0]--;
                   ?>
                   <td> <? echo $row2[0]+2 ?> </td>
                   <td> <a href="?post=<?echo $row[0]?>"><?echo $row[2]?></a> </td>
                   <td> <?echo $row[1]?> </td>
                   <td> <?echo $row[4]?> </td>
                   </tr><?}
               }
        ?>

        </table>
    </div>

    <div class = "num">
        <? if($block != 1){ ?>
            <a href="./post1?block=1&block2=1">처음</a>
        <? }else{
            echo '처음';
        }
         if($block != 1) { ?>
            <a href="./post1?block=<?echo $block-1 ?>&block2=<? echo $block2 ?>">이전</a>
        <? }else
            echo '이전';


        for($first = $block2 ;$number>0;$number--){
                ?>
                <a href="./post1?block=<? echo $i . '&block2=' . $block2 ?>"><? echo $i ?></a>

                <?

            $i++;
        }



         if($block != ($number2+1)) { ?>
            <a href="./post1?block=<?echo $block+1 ?>&block2=<? echo $block2 ?>">다음</a>
        <? } ?>
    </div>

    <? } ?>

</body>
</html>


<?php
/**
 * Created by PhpStorm.
 * User: jaejin
 * Date: 2017. 2. 7.
 * Time: PM 1:11
 */
session_start();

include_once $_SERVER['DOCUMENT_ROOT'] . '/Sites/config/config.php';

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
<div class ="write-post">
    <form id="writeform" action="./write_ok.php" name="ok" method="post">
        <div class = "write-sub">
            <table border="0" cellpadding="1" cellspacing="1" class="table">
                <tr>
                    <td class ="write-title" rowspan="1">글쓰기</td>
                </tr>
                <tr>
                    <td class = "name">제목    </td>
                    <td class = "name-input"><input type="text" id="nameform" name="name"></td>
                </tr>
                <tr>
                    <td class = "text">내용  </td>
                    <td class = "text-input">
                        <textarea id = "txtform" name="txtcomment"  cols="40" rows="10" placeholder="내용을 입력하세요 "></textarea>
                    </td>
                </tr>
                <tr>
                    <td class = "description" >
                        <input type="submit" class = "btn_login" value="작성" />

                    </td>
                </tr>
            </table>
        </div>
</form>
</div>

</body>
</html>


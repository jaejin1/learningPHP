<?php
/**
 * Created by PhpStorm.
 * User: jaejin
 * Date: 2017. 2. 6.
 * Time: PM 1:41
 */

#session_start();
include_once $_SERVER['DOCUMENT_ROOT'] . '/Sites/config/config.php';

#echo $_SESSION[user];

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

<a href="/Sites/templates/login/login.php">돌아가기</a>
<br>
<div class = login-form>
    <form id="loginform" action="./add_ok.php" name="ok" method="post">
        <div class = "login-sub">
            <table border="0" cellpadding="1" cellspacing="1" class="table">
                <tr>
                    <td class ="id-title" rowspan="1">회원가입</td>
                </tr>
                <tr>
                    <td class = "id">아이디입력해    </td>
                    <td class = "id-input"><input type="text" id="idform" name="id"></td>
                </tr>
                <tr>
                    <td class = "pw">비밀번호도 입력하  </td>
                    <td class = "pw-input"><input type="text" id="pwform" name="pw"></td>
                </tr>
                <tr>
                    <td class = "description" >
                        <input type="submit" class = "btn_login" value="회원가입" />

                    </td>
                </tr>
            </table>
        </div>
</div>
</form>
</div>
</body>
</html>


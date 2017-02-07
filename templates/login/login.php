<?php
/**
 * Created by PhpStorm.
 * User: jaejin
 * Date: 2017. 2. 4.
 * Time: PM 1:06
 */

session_start();
include_once $_SERVER['DOCUMENT_ROOT'] . '/Sites/config/config.php';


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

    <a href="/Sites/index.php">돌아가기</a>
    <br>
    <div class = login-form>
    <form id="loginform" action="./login_ok.php" name="ok" method="post">
            <div class = "login-sub">
                <table border="0" cellpadding="1" cellspacing="1" class="table">
                    <tr>
                        <td class ="id-title" rowspan="1">로그인</td>
                    </tr>
                    <tr>
                        <td class = "id">아이디    </td>
                        <td class = "id-input"><input type="text" id="idform" name="id"></td>
                    </tr>
                    <tr>
                        <td class = "pw">비밀번호  </td>
                        <td class = "pw-input"><input type="password" id="pwform" name="pw"></td>
                    </tr>
                    <tr>
                        <td class = "description" >
                            <input type="submit" class = "btn_login" value="로그인" />

                        </td>
                        <td><a href = "add.php" >회원가입</a></td>
                    </tr>
                </table>
            </div>
        </div>
    </form>
    </div>
</body>
</html>


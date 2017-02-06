<?php
/**
 * Created by PhpStorm.
 * User: jaejin
 * Date: 2017. 2. 6.
 * Time: PM 2:30
 */
session_start();
session_destroy();


echo "                                                       
    <script>                                                 
        alert('로그아웃 됐습니다.');                                
        location.replace('/Sites/index.php');
    </script>                                                
    ";
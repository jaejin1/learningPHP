<?php
/**
 * Created by PhpStorm.
 * User: jaejin
 * Date: 2017. 2. 3.
 * Time: PM 9:41
 */
session_start();
include_once $_SERVER['DOCUMENT_ROOT'] . '/Sites/config/db.php';

if(isset($_SESSION['session_id'])) {
    $id = $_SESSION['session_id'];
}
echo '<div class="login">';

if(!isset($id)) {
    echo "<a href=\"/Sites/templates/login/login.php\">로그인</a>&nbsp&nbsp&nbsp";
}else{
    echo $id . '님 어서오세요';
    echo "</br>";
    echo "<a href=\"/Sites/templates/login/logout.php\">로그아웃</a>";

}
echo '</div>';

$_SESSION['user'] = 'jaein';

class Header{
    public static function render(){
        echo '
        <nav role="navigation" class="nav">
            <ul class="nav-items">
                <span class="title">
                    <a href="/Sites/index.php" >Jaejin</a>
                </span>
                <li class="nav-item">
                    <a href="/Sites/index.php" class="nav-link"><span>Home</span></a>
                </li> 
                <li class="nav-item dropdown">
                    <a href="/Sites/templates/posts/post1.php" class="nav-link"><span>Posts</span></a>
                        <nav class="submenu">
                            <ul class="submenu-items">
                                <li class="submenu-item"><a href="/Sites/index.php" class="submenu-link">공지사항</a></li>
                                <li class="submenu-item"><a href="#" class="submenu-link">자유게시판</a></li>
                                <li class="submenu-item"><a href="#" class="submenu-link">자료실</a></li>
                            </ul>
                        </nav>
                </li> 
                <li class="nav-item">
                    <a href="/Sites/templates/posts/post1.php" class="nav-link"><span>Posts</span></a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"><span>Pricing</span></a>
                </li> 
                <li class="nav-item">
                    <a href="#" class="nav-link"><span>News</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link"><span>More</span></a>
                        <nav class="submenu">
                            <ul class="submenu-items">
                                <li class="submenu-item"><a href="#" class="submenu-link">About</a></li>
                                <li class="submenu-item"><a href="#" class="submenu-link">Contact</a></li>
                                <li class="submenu-item"><hr class="submenu-seperator" /></li>
                                <li class="submenu-item"><a href="#" class="submenu-link">Support</a></li>
                                <li class="submenu-item"><a href="#" class="submenu-link">FAQs</a></li>
                                <li class="submenu-item"><a href="#" class="submenu-link">Careers</a></li>
                            </ul>
                        </nav>
                </li>  
            </ul>
            
        
        </nav>
        ';
    }
}


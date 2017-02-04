<?php
/**
 * Created by PhpStorm.
 * User: jaejin
 * Date: 2017. 2. 3.
 * Time: PM 9:41
 */
include_once $_SERVER['DOCUMENT_ROOT'] . '/Sites/config/db.php';

session_start();

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
                    <a href="#" class="nav-link"><span>Home</span></a>
                </li> 
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link"><span>Products</span></a>
                        <nav class="submenu">
                            <ul class="submenu-items">
                                <li class="submenu-item"><a href="#" class="submenu-link">Product #1</a></li>
                                <li class="submenu-item"><a href="#" class="submenu-link">Product #2</a></li>
                                <li class="submenu-item"><a href="#" class="submenu-link">Product #3</a></li>
                            </ul>
                        </nav>
                </li> 
                <li class="nav-item">
                    <a href="#" class="nav-link"><span>Services</span></a>
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

<?php
/**
 * Created by PhpStorm.
 * User: jaejin
 * Date: 2017. 2. 3.
 * Time: PM 9:11
 */
session_start();
include_once $_SERVER['DOCUMENT_ROOT'] . '/Sites/config/config.php';
#include_once ROOT_PATH . '/config/config.php';
if(isset($_SESSION["session_id"]))
    $id = $_SESSION["session_id"];
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title> jaejin study page </title>
    <link rel="stylesheet" type="text/css" href="<?echo HOME_PATH?>/css/main/header">

    <script src="js/Chart/Chart.bundle.js"></script>
    <script src="js/Chart/utils.js"></script>
    <style>
        canvas {
            -moz-user-select: none;
            -webkit-user-select: none;
            -ms-user-select: none;
        }
    </style>

</head>
<body>

    <? Header::render(); ?>





    <div style="width:40%">
        <canvas id="canvas"></canvas>
    </div>

    <script>
        var randomScalingFactor = function() {
            return Math.round(Math.random() * 100);
        };

        var color = Chart.helpers.color;
        var config = {
            type: 'radar',
            data: {
                labels: [["Eating", "Dinner"], ["Drinking", "Water"], "Sleeping", ["Designing", "Graphics"], "Coding", "Cycling", "Running"],
                datasets: [{
                    label: "My First dataset",
                    backgroundColor: color(window.chartColors.red).alpha(0.2).rgbString(),
                    borderColor: window.chartColors.red,
                    pointBackgroundColor: window.chartColors.red,
                    data: [
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor()
                    ]
                }, {
                    label: "My Second dataset",
                    backgroundColor: color(window.chartColors.blue).alpha(0.2).rgbString(),
                    borderColor: window.chartColors.blue,
                    pointBackgroundColor: window.chartColors.blue,
                    data: [
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor()
                    ]
                },]
            },
            options: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Chart.js Radar Chart'
                },
                scale: {
                    ticks: {
                        beginAtZero: true
                    }
                }
            }
        };

        window.onload = function() {
            window.myRadar = new Chart(document.getElementById("canvas"), config);
        };  //표 그리기


    </script>



    <script src="<?echo JS_ROOT?>/header/header.js"></script>
</body>
</html>

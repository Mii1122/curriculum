<?php
    // index.php
    echo ceil(3.5);
    echo '<br>';
    echo floor(3.5);
    echo '<br>';
    echo round(3.5);
    echo '<br>';

    echo pi();
    echo '<br>';

    function circleArea($r) {
        $circle_area = $r * $r * pi();
        echo $circle_area; 
    }
    // 半径が2の円の面積の計算
    circleArea(5);
    echo '<br>';

    echo mt_rand(21,68);
    echo '<br>';

    $str = "aoyagi";
    echo strlen($str);
    echo '<br>';

    $str = "aoyagimisato";
    echo strpos($str, "a");
    echo '<br>';

    $str = "aoyagimisato";
    echo substr($str, 2, 2);
    echo '<br>';

    $str = "aoyagimisato";
    echo str_replace("ao", "sato", $str);
    echo '<br>';

    $str = "I am Misato";
    echo str_replace(" ", "", $str);
    echo '<br>';

    $str = "らりるれろ";
    echo strlen($str);
    echo '<br>';

    $str = "さしすせそ";
    echo mb_strlen($str);
    echo '<br>';

    $name = "青柳さん";
    $limit_number = 40;
    ?>
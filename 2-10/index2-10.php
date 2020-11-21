<?php

function getTriangleArea($base, $height) {
    $area = $base * $height / 2;
    print "三角形の面積は".$area."だよ。";
}
//1.
getTriangleArea(10,5);
//2.
getTriangleArea(15,8);
//3.
getTriangleArea(8,6);

function sayHi($name = "goto") {
    $myname = "php";
    return "Hi! ".$name." from ".$myname;
}

echo sayHi();
echo $myname;

//課題
echo "<br />";
function getSquareArea($strate, $height, $line) {
    $area = $strate * $height * $line;
    print "直方体の体積は".$area."だよ。";
}
getSquareArea(5, 10, 8);

//1.ハッシュ化 規則性のない固定長の値を求めて、その値によって元のデータを置き換えること
//2.総合テスト 本番と同じ環境でテストを実行すること
//3.デバッグ 
?>
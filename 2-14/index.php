<?php
$members = ["yamanaka","ogura","yanagisawa","okutsu"];
echo count($members);
echo '<br>';

$members = ["yamanaka","ogura","yanagisawa","okutsu"];
sort($members);
var_dump($members);
echo '<br>';

$nembers = [12,23,34,45];
sort($numbers);
var_dump($numbers);
echo '<br>';

$members = ["yamanaka","ogura","yanagisawa","okutsu"];
var_dump(in_array("ogura", $members));
echo '<br>';

$members = ["yamanaka","ogura","yanagisawa","okutsu"];
if(in_array("ogura", $members)) {
    echo "小椋さんがいるよ！";
} else {
    echo "小椋さんはいないよ";
}
echo '<br>';

$members = ["yamanaka","ogura","yanagisawa","okutsu"];
$atstr = implode($members);
var_dump($atstr);
echo '<br>';

$members = ["yamanaka","ogura","yanagisawa","okutsu"];
$atstr = implode("@",$members);
var_dump($atstr);
$re_members = explode("@",$atstr);
var_dump($re_members);
echo '<br>';

$str = "1,2,3,4,5,6";
$array = explode(",",$str);
var_dump($array);
?>
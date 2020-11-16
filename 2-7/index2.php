<?php
$countries = ["America", "Japan", "Chaina", "Korea"];

echo $countries[0];
echo $countries[1];
echo $countries[2];
echo $countries[3];

?>
<?php
echo '<br>';
$fluits = ["りんご", "みかん", "ぶどう"];

echo $fluits[0];
echo '<br />';
echo $fluits[1];
echo '<br />';
echo $fluits[2];
echo '<br />';
echo $fluits[] = "もも";
var_dump($fluits);

?>

<?php
echo '<br>';
$colors = ["red"=>"赤", "blue"=>"青", "green"=>"緑","yellow"=>"黄色"];

echo $colors["red"];
echo '<br />';
echo $colors["blue"];
echo '<br />';
echo $colors["green"];
echo '<br />';
echo $colors["yellow"];
echo '<br />';
var_dump($colors);

//1.プルリクエスト 一人で作ると気づかないところも直し、品質を向上させる
//2.Git Flow Gitの機能であるブランチを活用した開発手法、ツールである
//3.CRON 何を、いつするのか設定するシステム

?>
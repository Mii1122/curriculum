<?php
$fruits = ["appleといったら"=>"りんご","orangeといったら"=>"みかん","peachといったら"=>"もも"];

foreach($fruits as $key => $value) {
    echo $key;
    echo $value;
    echo '<br />';
}
//1.トランザクション 複数の処理をまとめた処理単位
//2.排他ロック 同時アクセスを制限するシステム
//3.チューニング パフォーマンスの向上を図ること
?>
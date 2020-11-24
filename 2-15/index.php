<?php
echo time();
var_dump(time());
echo '<br>';

//現在時刻を取得
echo date("Y/m/d H:i:s", time());
echo '<br>';

echo strtotime("2017/2/16 11:25:00");
echo '<br>';

//先週の日曜日
echo strtotime("last Sunday");
echo '<br>';
//2日後
echo strtotime("+2 day");
echo '<br>';

//1.ログ(意味、確認の仕方)   履歴や記録をとること、windowsログを取得して確認する
//2.クラウドサーバー、レンタルサーバー、VPSの違い   クラウド上にある仮想のサーバー、レンタルサーバーは共有、専用がある、VPSは専用のため利用者ごとに用意される
//3.PHPのFWの種類と特徴 ・CakePHP…機能が豊富で開発しやすい ・Zend Framework…豊富なライブラリ ・Symfony…高速動作が利点、比較的機能追加がしやすい

?>
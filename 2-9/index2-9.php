<?php

for ($i = 1; $i <=100; $i++) {
    if ($i % 15 === 0) {
        echo '<br />';
        echo "FizzBuzz";
        echo PHP_EOL;
    }elseif ($i % 5 === 0) {
        echo '<br />';
        echo "Buzz";
        echo PHP_EOL;
    }elseif ($i % 3 === 0) {
        echo '<br />';
        echo "Fizz";
        echo PHP_EOL;
    }else {
        echo '<br />';
        echo $i;
        echo PHP_EOL;
    }
}

//1.パフォーマンス
//2.スロークエリ
//3.クエリログ

?>
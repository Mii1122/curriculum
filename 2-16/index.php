<?php
$testfile = "test.txt";
$contents = "こんにちは！";

if(is_writable($testfile)) {
    $fp = fopen($testfile,"a");
    fwrite($fp,$contents);
    fclose($fp);
    echo "finish writing!!";
} else {
    echo "not writable!";
    exit;
}

$test_file = "test2.txt";
    
    if (is_readable($test_file)) {
        $fp = fopen($test_file, "r");
        while ($line = fgets($fp)) {
            echo $line.'<br>';
        }
        fclose($fp);
    } else {
        echo "not readable!";
        exit;
    }
//1.CakePHPの2系・3系の違い 
//2.LAMP 
//3.AWS 
?>
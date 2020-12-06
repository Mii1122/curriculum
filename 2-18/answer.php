<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>2章チェックテスト</title>
  <link rel="stylesheet" href="style.css">
</head>

<div id="wrapper">

<?php 
//結果
$q1_ans = $_POST["ans_1"];
$q2_ans = $_POST["ans_2"];
$q3_ans = $_POST["ans_3"];

//回答
$q1_true = $_POST["true_1"];
$q2_true = $_POST["true_2"];
$q3_true = $_POST["true_3"];
?>

<p class="empty"><?php echo $_POST['next_name'] ?>さんの結果は・・・？</p>
<p class="empty">①の答え</p>
<p class="empty">
    <?php 
        if($q1_ans == $q1_true) {
            echo "正解！";
        }else {
            echo "残念・・・";
        }
    ?>
</p>

<p class="empty">②の答え</p>
<p class="empty">
<?php 
        if($q2_ans == $q2_true) {
            echo "正解！";
        }else {
            echo "残念・・・";
        }
    ?>
</p>

<p class="empty">③の答え</p>
<p class="empty">
<?php 
        if($q3_ans == $q3_true) {
            echo "正解！";
        }else {
            echo "残念・・・";
        }
    ?>
</p>
</div>
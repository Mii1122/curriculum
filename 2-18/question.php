<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" href="style.css">
  
</head>
    <?php
    //問題の選択肢
    $question_1 = array(80,22,20,21);
    $question_2 = array("PHP","CSS","Python","HTML");
    $question_3 = array("join","select","insert","update");
    ?>

    <div id="wrapper">
    
        <!-- 名前の表示 -->
        <p class="top">お疲れ様です<?php echo $_POST['my_name']; ?>さん</p>
        <br>
        <form action="answer.php" method="post">
            <!-- 名前と正解の送信 -->
            <input type="hidden" name="next_name" value="<?php echo $_POST['my_name'] ?>">
            <input type="hidden" name="true_1" value="<?php echo $question_1[0] ?>">
            <input type="hidden" name="true_2" value="<?php echo $question_2[0] ?>">
            <input type="hidden" name="true_3" value="<?php echo $question_3[1] ?>">

            <!-- 問題 -->
            <div class="question">
                <h2>①ネットワークのポート番号は何番？</h2>
                <br>
                <?php foreach($question_1 as $ans_1) { ?>
                    <input type="radio" name="ans_1" value="<?php echo $ans_1;?>"> <?php echo $ans_1;?>
                <?php }?>
                </div>

            <div class="question">
                <h2>②Webページを作成するための言語は？</h2>
                <br>
                <?php foreach($question_2 as $ans_2) { ?>
                    <input type="radio" name="ans_2" value="<?php echo $ans_2;?>"> <?php echo $ans_2;?>
                <?php }?>
                </div>
            
            <div class="question">
                <h2>③MySQLで情報を取得するためのコマンドは？</h2>
                <br>
                <?php foreach($question_3 as $ans_3) { ?>
                    <input type="radio" name="ans_3" value="<?php echo $ans_3;?>"> <?php echo $ans_3;?>
                <?php }?>
                </div>
            <input type="submit" value="回答する">
        </form>
     </div>
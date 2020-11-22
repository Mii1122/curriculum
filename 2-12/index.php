<form action="result.php" method="post">
    
        <!-- この中にinputタグを記述していきます。 --> 
        私の名前：<input type="text" name="my_name" />
        <br>
        パスワード：<input type="password" name="password" />
        <br>
        性別：
        <input type="radio" name="sex" value="男性">男性
        <input type="radio" name="sex" value="女性">女性
        <br>
        <input type="hidden" name="hidden_param" value="隠しパラメータから" />
        <br>
        年齢：
    <select name="number">
      <?php for ($i=21;$i<=24;$i++){ ?>
        <option value="<?php echo $i; ?>">
          <?php echo $i; ?>
        </option>
      <?php } ?>
    </select>
    <br>
        <input type="submit" value="送信するよ！" />
    </form>

<form action="result.php" method="post">
    お名前：<input type="text" name="my_name" />
    <br>
    ご希望の商品：
    <input type="radio" name="award" value="A賞">A賞
    <input type="radio" name="award" value="B賞">B賞
    <input type="radio" name="award" value="C賞">C賞
    <br>
    個数：
    <select name="number">
      <?php for ($i=1;$i<=10;$i++){ ?>
        <option value="<?php echo $i; ?>">
          <?php echo $i; ?>
        </option>
      <?php } ?>
    </select>
    <br>
    <input type="submit" value="申込" />
    </form>

  <?php
    //1.モジュール 交換可能な構成部分などを意味する
    //2.バージョン管理システム 変更履歴管理システム
    //3.サブクエリ データベースなどの問い合わせ文の中に含まれる別の問い合わせ、副問い合わせ
    ?>
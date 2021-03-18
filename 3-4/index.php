<?php
//getData.php PDO実装参照
require_once("getData.php");
//インスタント作成 第３章クラスとインスタンス参照
session_start();

$post = new getData();

?>

<html lang="ja">
<head>
  <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>index</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wapper">
        <div>
            <div class = header>
                <!-- ロゴ -->
                <div class = logo_box>
                    <img src="y&i.png" alt="" width="200",height="120">
                </div>
                    <!-- ユーザーネーム -->
                    <div class = right_box>
                        <div class = right_upper>ようこそ
                                <?php
                                    //ユーザーネームを表示
                                        $users = $post->getUserData();
                                        echo $users['last_name'],$users['first_name'];
                                ?>さん
                        </div>
                        <!-- 最終ログイン日 -->
                        <div class = right_lower>最終ログイン日：
                                <?php
                                //最終ログイン日を表示
                                    $users = $post->getUserData();
                                    echo $users['last_login'];
                                ?>
                        </div>
                    </div>
            </div>
            <div class = center_box>
                <table>
                    <tr>
                    <thead>                  
                                <?php
                                $header = ["記事ID","タイトル","カテゴリー","本文","投稿日"];
                                foreach ($header as $value) {
                                    ?><th>
                                        <div class = header> <?php
                                        echo $value;
                                        ?> </div> </th>
                                <?php }
                                ?>
                             </thead> </tr>
                            <tboty>
                            <?php
                            //$sql = ["id","title","category_no","comment","time"];
                            $posts = $post->getPostData();
                            ?> 
                            <?php
                                foreach ($posts as $value2) { ?> <tr>
                                    <td> <div class = line> <?php echo $value2['id']; ?> </div> </td>
                                    <td> <div class = line> <?php echo $value2['title']; ?> </div></td>
                                    <td> <div class = line> <?php 
                                    if ( $value2['category_no'] == 1){
                                        echo "食事";
                                    } else if ($value2['category_no'] == 2){
                                        echo "旅行";
                                    } else {
                                        echo "その他";
                                    }?> </div></td>
                                    <td> <div class = line> <?php echo $value2['comment']; ?> </div></td>
                                    <td> <div class = line> <?php echo $value2['time']; ?> </div></td>
                                </tr> <?php }?>
                                </tbody>
                                </table>
            </div>
                <!-- フッター -->
                <div>
                    <div class = footer>
                        <p>Y&I group.inc</p>
                    </div>
                    
                </div>  
    </div class>
</body>
</html>
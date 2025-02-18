<!doctype HTML>
<html lang = "ja">


<head>
  <meta charset="utf-8">
<title>お問い合わせフォームを作る</title>
  <link rel="stylesheet" type="text/css"  href="style2.css">
</head>

<body>
  <h1>お問い合わせ内容確認</h1>

  <div class="confirm">
    <p>お問い合わせ内容はこちらで宜しいでしょうか
      <br>よろしければ「送信する」ボタンを押してください。
    </p>
    <p>名前
      <br>
      <?php
        echo $_POST['name'];
      ?>
    </p>

    <p>メールアドレス
      <br>
      <?php
        echo $_POST['mail'];
      ?>
    </p>


    <p>年齢
      <br>
      <?php
        //echo $_POST['age'."崔];
        //変なコメントを混ぜた上に　"の後をとじなかった ため、エラーが起きた。
        //のちのphp文でも""に囲まれかけるような状態になる
        echo $_POST['age'];
      ?>
    </p> 
      

     <p>コメント
        <br>
        <?php
          echo $_POST['comments'];
        ?>
      </p>

      <div class="buttons">
         <form action="index.html">
          <input type="submit" class="button1" value="戻って修正する">
        </form>

        <form action="insert.php" method="post">
          <input type="submit" class="button2" value="登録する">
          <input type="hidden" value="<?php echo $_POST['name'] ?>" name="name">
          <input type="hidden" value="<?php echo $_POST['mail'] ?>" name="mail">
          <input type="hidden" value="<?php echo $_POST['age'] ?>" name="age">
          <input type="hidden" value="<?php echo $_POST['comments'] ?>" name="comments">
        </form>
      </div>
<!-- /* 
form action= をリンク先のURL(ファイル名),今もってる変数を送る対象のファイル
input value= ボタン上に表示されるテキスト
input type= hidden 今持っている変数をweb上に表示しない
*/ -->

  </div>
</body>


<!-- 
--prog12345
--browser12345
ctrl shift リロードボタンで更新
プログラムが反映されないとき
強制リロードで対応


オブジェクト指向

-->


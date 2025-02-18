<?php
  
mb_internal_encoding("utf8");
$pdo= new PDO("mysql:dbname=les_phpb16;host=localhost;","root","");
$sql = "insert into contactform (name, mail, age, comments) values (?, ?, ?, ?)";
$stmt = $pdo->prepare($sql);

$stmt->bindValue(1, $_POST['name']);
$stmt->bindValue(2, $_POST['mail']);
$stmt->bindValue(3, $_POST['age']);
$stmt->bindValue(4, $_POST['comments']);


$stmt->execute();
?>


<!-- 
W:\__777MR-GiAe1y2\__177FVL-GiAe1y2\___777VMW-GiAe1y2\_350Prog\_344htdocs_xampp_GA1y2m\725ProgrammerCollege\555Html\555PHP-b16\contactform

http://localhost/725ProgrammerCollege/555Html/555PHP-b16/contactform/index.html

-->


<!doctype HTML>
<html lang="ja">

<head>
<meta charset="utf-8">
  <title>お問い合わせフォームを作る</title>
<link rel="stylesheet" type="text/css" href="style2.css">

</head>

<body>
  
  <h1>お問い合わせフォーム</h1>

  <div class= "confirm">
    <p>
      お問い合わせありがとうございました。<br>3営業日以内に担当者よりご連絡差し上げます。
    </p>

  </div>


</body>


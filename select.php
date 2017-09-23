<?php

//2. DB接続
try {
  $pdo = new PDO('mysql:dbname=gs_db24;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DbConnectError:'.$e->getMessage());
}

//３．SQLを作って実行
$stmt = $pdo->prepare("SELECT * FORM gs_an_table");
$status = $stmt->execute();

//４．
$view = "";
if($status==false){
  $error = $stmt->errorInfo();
  exit("QueryError:".$error[2]);
  
}else{
  //Selectデータの数だけ⾃動でループしてくれる􀀁
while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){􀀁
$view .= '<p>';􀀁
$view .= $result["indate"] ."：". $result["name"] ;􀀁
$view .= '</p>';

}








?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>フリーアンケート表示</title>
<link rel="stylesheet" href="css/range.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="main">
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="index.php">データ登録</a>
      </div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<div>
    <div class="container jumbotron">ここにPHP変数を埋め込む</div>
</div>
<!-- Main[End] -->

</body>
</html>

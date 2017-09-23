<?php
//1.データ受信(post)
$name = $_POST["name"];
$email = $_POST["email"];
$naiyou = $_POST["naiyou"]




//2. DB接続
try {􀀁
$pdo=new PDO('mysql:dbname=gs_db24;charset=utf8;host=localhost','root','');􀀁
} catch (PDOException $e) {􀀁
exit( 'DbConnectError:' . $e->getMessage() );􀀁
}

//３．SQLを作って実行
$stmt = $pdo->prepare("INSERT INTO gs_an_table(id, name, email, naiyou,
indate )VALUES(NULL, :name, :email, :naiyou, sysdate())");
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
$stmt->bindValue(':naiyou', $baiyou, PDO::PARAM_STR);
$status = $stmt->execute();

//４．
if($status==false){
  $error = $stmt->errorInfo();
  exit("QueryError:".$error[2]);
  
}else{
  header("Location: index.php");
  exit;

}
?>

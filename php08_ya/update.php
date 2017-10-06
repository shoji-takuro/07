<?php
//1.POSTでParamを取得


//2.DB接続など


//3.UPDATE gs_an_table SET ....; で更新(bindValue)
//　基本的にinsert.phpの処理の流れです。
$stmt = $pdo->prepare("UPDATE gs_an_table SET name=:name,email=:email,naiyou=:naiyou WHERE id=:id");
$stmt->bindValue(':name', $name);
$stmt->bindValue(':email', $email);
$stmt->bindValue(':naiyou', $naiyou);
$stmt->bindValue(':id', $id);
$status = $stmt->execute();



?>

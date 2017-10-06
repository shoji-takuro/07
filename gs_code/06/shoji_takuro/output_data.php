<?php
include("func.php");


$name  = $_POST["name"];
$email = $_POST["email"];
$age  = $_POST["age"];
$sex  = $_POST["sex"];
$food  = $_POST["food"];
$quest = $_POST["quest"];



//書き込み
$d =date("Y-m-d H:i:s");
$str = $d.",".$name.",".$email.",".$age.",".$sex.",".$food.",".$quest;
$file = fopen("data/data.csv","a");	// ファイル読み込み
flock($file, LOCK_EX);			// ファイルロック
fwrite($file, $str."\n");
flock($file, LOCK_UN);			// ファイルロック解除
fclose($file);


$lines = file('data/data.csv');
$view  = "";

foreach($lines as $line){
    $data = explode(',',$line);

    $view.= '<tr>';
    $view.= '<td>';
    $view.= h("$data[0]",ENT_QUOTES);
    $view.= '</td>';
    $view.= '<td>';
    $view.= h("$data[1]",ENT_QUOTES);
    $view.= '</td>';
    $view.= '<td>';
    $view.= h("$data[2]",ENT_QUOTES);;
    $view.= '</td>';
    $view.= '<td>';
    $view.= h("$data[3]",ENT_QUOTES);;
    $view.= '</td>';
    $view.= '<td>';
    $view.= h("$data[4]",ENT_QUOTES);;
    $view.= '</td>';
    $view.= '<td>';
    $view.= h("$data[5]",ENT_QUOTES);;
    $view.= '</td>';
    $view.= '<td>';
    $view.= h("$data[6]",ENT_QUOTES);;
    $view.= '</td>';
    $view.= '</tr>';
}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>アンケート結果</title>
</head>
<body>
<table border="1" bordercolor="#333333">
    <tr>
        <th>時間</th>
        <th>名前</th>
        <th>Email</th>
        <th>年齢</th>
        <th>性別</th>
        <th>好きな料理のジャンル</th>
        <th>理由</th>
    </tr>
    <?= $view ?>
</table>
</body>
</html>
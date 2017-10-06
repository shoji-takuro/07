<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>アンケート</title>
</head>
<body>
<form action="output_data.php" method="post">
    <h1>アンケート</h1>
    <p>名前：<input type="text" name="name"></p>
    <p>Email：<input type="text" name="email"></p>
    <p>年齢：<select name="age">
        <option value="10~20">10~20</option>
        <option value="20~30">20~30</option>
        <option value="30~40">30~40</option>
        <option value="40~50">40~50</option>
    </select></p>
    <p>性別：
        <input type="radio" name="sex" value="男性">男性
        <input type="radio" name="sex" value="女性">女性
    </p>
    <p>好きな料理ジャンル
        <input type="radio" name="food" value="和食">和食
        <input type="radio" name="food" value="中華">中華
        <input type="radio" name="food" value="イタリアン">イタリアン
        <input type="radio" name="food" value="フレンチ">フレンチ
    </p>
    理由：<br>
    <textarea name="quest" id="" cols="30" rows="10"></textarea>
    <input type="submit" value="送信">
</form>
</body>
</html>
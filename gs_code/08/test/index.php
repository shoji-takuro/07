<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>プロ野球予想</title>
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/infiniteslide.js"></script>
    <script type="text/javascript" src="js/jquery.pause.min.js"></script>
    <script type="text/javascript" src="js/index.js"></script>
</head>
<body>
    <header></header>
    
   <!-- menu -->
    <div id="menu">
        <?php
include("menu.php");
?>
    </div>
   <!-- //menu -->
    
   <!-- メニューを開いたときのカバー -->
    <div id="cover"></div>
   <!-- //メニューを開いたときのカバー -->

   <!-- メニューボタン -->
    <div id="show">
        <img src="images/baseball01.png" alt="" height="180px" width="180px">
        <p>メニュー</p>
    </div>
   <!-- //メニュボタン -->

    <article>
       <!-- 画像(スライドショー) -->
        <div id="main_slide">
            <ul>
                <li><img src="images/%E7%A6%8F%E5%B2%A1%E3%83%A4%E3%83%95%E3%82%AA%E3%82%AF!%E3%83%89%E3%83%BC%E3%83%A0.jpg" alt="" /></li>
                <li><img src="images/MazdaZoom-Zoom%E3%82%B9%E3%82%BF%E3%82%B8%E3%82%A2%E3%83%A0%E5%BA%83%E5%B3%B6.jpg" alt="" /></li>
                <li><img src="images/%E3%83%A1%E3%83%83%E3%83%88%E3%83%A9%E3%82%A4%E3%83%95%E3%83%89%E3%83%BC%E3%83%A0.jpg" alt="" /></li>
                <li><img src="images/%E9%98%AA%E7%A5%9E%E7%94%B2%E5%AD%90%E5%9C%92%E7%90%83%E5%A0%B4.jpg" alt="" /></li>
                <li><img src="images/Kobo%E3%83%91%E3%83%BC%E3%82%AF%E5%AE%AE%E5%9F%8E.jpg" alt="" /></li>
                <li><img src="images/%E6%A8%AA%E6%B5%9C%E3%82%B9%E3%82%BF%E3%82%B8%E3%82%A2%E3%83%A0.jpg" alt="" /></li>
            </ul>
        </div>
       <!-- //画像(スライドショー) -->
    </article>
</body>
</html>
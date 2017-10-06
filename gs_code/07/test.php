[JavaScript部分]

<script>

function changeForm()
{
var league = document.forms.teamRank.selectLeague; //変数leagueを宣言
var team = document.forms.teamRank.selectTeam; //変数teamを宣言

team.options.length = 0; // 選択肢の数がそれぞれに異なる場合は、これが重要になってくる

if (league.options[league.selectedIndex].value == "central")
{
// name 属性の設定
team.name = "firstC";
select2.options[0] = new Option("りんご");
select2.options[1] = new Option("みかん");
select2.options[2] = new Option("オレンジ");
}

else if (select1.options[select1.selectedIndex].value == "野菜")
{
select2.options[0] = new Option("キャベツ");
select2.options[1] = new Option("きゅうり");
select2.options[2] = new Option("にんんじん");
select2.options[3] = new Option("たまねぎ");
}
} 

</script>


[HTML部分]
<body onLoad="changeForm()">
<form name="teamRank" method="post" action="./pathToProgramFile">
<fieldset>
<legend>順位予想</legend><!-- name属性はすべて変える -->
<!-- 解説者 -->
<label>解説者名：<input type="text" name="name"></label><br>
<!-- 元所属球団 -->
元所属球団（選手・監督両方）：<br>
<label><input type="radio" name="team[]" value="広島">広島</label>
<label><input type="radio" name="team[]" value="巨人">巨人</label>
<label><input type="radio" name="team[]" value="DeNA">DeNA</label>
<label><input type="radio" name="team[]" value="阪神">阪神</label>
<label><input type="radio" name="team[]" value="ヤクルト">ヤクルト</label>
<label><input type="radio" name="team[]" value="中日">中日</label><br>
<label><input type="radio" name="team[]" value="日ハム">日ハム</label>
<label><input type="radio" name="team[]" value="ソフトバンク">ソフトバンク</label>
<label><input type="radio" name="team[]" value="ロッテ">ロッテ</label>
<label><input type="radio" name="team[]" value="西武">西武</label>
<label><input type="radio" name="team[]" value="楽天">楽天</label>
<label><input type="radio" name="team[]" value="オリックス">オリックス</label><br>
<!-- 掲載・放送日 -->
<label>掲載・放送日：<input type="date" name="date"></label><br>
<!-- 出所 -->
<label>出所：<input type="text" name="source"></label><br>
<!-- リーグを選択 -->
<label for="lea">予想するリーグ</label>
<select id="lea" name = "selectLeague" onChange="changeForm()">
<option value = "central">セ・リーグ</option>
<option value = "pacific">パ・リーグ</option>
</select>
<!-- 1位（リーグ選択の項目によって変化）-->
<label for="one">優勝</label>
<select id="one" name = "first">
</select>
<!-- 2位（リーグ選択の項目によって変化）-->
<label for="two">2位</label>
<select id="two" name = "second">
</select>
<!-- 3位（リーグ選択の項目によって変化）-->
<label for="three">3位</label>
<select id="three" name = "third">
</select>
<!-- 4位（リーグ選択の項目によって変化）-->
<label for="four">4位</label>
<select id="four" name = "fourth">
</select>
<!-- 5位（リーグ選択の項目によって変化）-->
<label for="five">5位</label>
<select id="five" name = "fifth">
</select>
<!-- 6位（リーグ選択の項目によって変化）-->
<label for="six">6位</label>
<select id="six" name = "sixth">
</select>
<!-- 備考 -->
<label><textArea name="remarks" rows="4" cols="40"></textArea></label><br>
<input type="submit" value="送信">
</fieldset>
</body>


        <!-- 元所属球団 -->
        元所属球団（選手・監督両方）：<br>
        <label><input type="radio" name="team" class="te" value="広島">広島</label>
        <label><input type="radio" name="team" class="te" value="巨人">巨人</label>
        <label><input type="radio" name="team" class="te" value="DeNA">DeNA</label>
        <label><input type="radio" name="team" class="te" value="阪神">阪神</label>
        <label><input type="radio" name="team" class="te" value="ヤクルト">ヤクルト</label>
        <label><input type="radio" name="team" class="te" value="中日">中日</label><br>
        <label><input type="radio" name="team" class="te" value="日ハム">日ハム</label>
        <label><input type="radio" name="team" class="te" value="ソフトバンク">ソフトバンク</label>
        <label><input type="radio" name="team" class="te" value="ロッテ">ロッテ</label>
        <label><input type="radio" name="team" class="te" value="西武">西武</label>
        <label><input type="radio" name="team" class="te" value="楽天">楽天</label>
        <label><input type="radio" name="team" class="te" value="オリックス">オリックス</label><br>
        
           var team = document.forms.teamRank.team; //元所属球団
           
                   team.name = "teamC"; //元所属球団
                   
                           team.name = "teamP"; //元所属球団
                           
                           
inset
         
         //$teamC = $_POST["teamC"];//元所属球団
         
         //$stmt->bindValue(':teamC', $teamC, PDO::PARAM_STR);
         
          
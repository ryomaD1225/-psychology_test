<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="sample.css">
<title>POST練習</title>
</head>
<body>
<form name="hoge" action="write.php" method="post" onSubmit="return check()">
<h1>【心理テスト】</h1></br>
たった7つの質問で、あなたの性格が暴かれる！</br>
あなたは美しい森の中にいます。太陽はキラキラと輝き、風があなたの頬を気持ちよくなでています。</br>
さて、ここから質問に入りましょう。</br>
<h1>Q1.誰と一緒に歩いていますか？</h1></br>
<label><input type="radio" name="q1" value="50" style="margin-right:10px;">友達</label>
<label><input type="radio" name="q1" value="75" style="margin-right:10px;">家族</label>
<label><input type="radio" name="q1" value="100" style="margin-right:10px;">恋人</label></br>
<p>あなたは誰かと一緒に森の中を歩き続けていくと、ある動物に出会います。</p>
 
<h1>Q2.その動物は、一体何ですか？</h1></br>
<label><input type="radio" name="q2" value="50" style="margin-right:10px;">犬</label>
<label><input type="radio" name="q2" value="75" style="margin-right:10px;">馬</label>
<label><input type="radio" name="q2" value="100" style="margin-right:10px;">龍</label></br>
<p>さらに深く森の中を進むと空き地に出ました。その中心には、一軒の家があります。</p>

<h1>Q3.見つけた家はどれくらいの大きさ？</h1></br>
<label><input type="radio" name="q3" value="50" style="margin-right:10px;">鳥カゴサイズ</label>
<label><input type="radio" name="q3" value="75" style="margin-right:10px;">普通の一軒家</label>
<label><input type="radio" name="q3" value="100" style="margin-right:10px;">お城サイズ</label></br>
<p>家に近づいてみたところ、ドアが少し開いていました。そっと中へ入るとそこにはテーブルがありました。</p>

<h1>Q4.テーブルの上には何が置かれていますか？</h1></br>
<label><input type="radio" name="q4" value="50" style="margin-right:10px;">ご馳走</label>
<label><input type="radio" name="q4" value="75" style="margin-right:10px;">花瓶に入った花</label>
<label><input type="radio" name="q4" value="100" style="margin-right:10px;">何もない</label></br>
<p>あなたは家の中をひと通り見て、裏口から外に出ます。</br>
そこには芝生が広がっていて、中心には庭があります。そこで、あなたはマグカップを見つけます。</p>

<h1>Q5.マグカップは何で出来ていますか？</h1></br>
<label><input type="radio" name="q5" value="50" style="margin-right:10px;">プラスチック</label>
<label><input type="radio" name="q5" value="75" style="margin-right:10px;">木</label>
<label><input type="radio" name="q5" value="100" style="margin-right:10px;">鉄</label></br>
<p>庭を進み続けると、あなたは自分が水の中にいることに気付きます。</p>

<h1>Q6.それは、湖ですか？川ですか？池ですか？</h1></br>
<label><input type="radio" name="q6" value="50" style="margin-right:10px;">湖</label>
<label><input type="radio" name="q6" value="75" style="margin-right:10px;">川</label>
<label><input type="radio" name="q6" value="100" style="margin-right:10px;">池</label></br>
<p>家に帰るためには、その水の中を渡りきらなければなりません。</p>

<h1>Q7.どれぐらい濡れてしまいましたか？</h1></br>
<label><input type="radio" name="q7" value="50" style="margin-right:10px;">つま先</label>
<label><input type="radio" name="q7" value="75" style="margin-right:10px;">腰</label>
<label><input type="radio" name="q7" value="100" style="margin-right:10px;">頭までずぶぬれ</label></br>

<input type="submit" style="margin-top:70px;" value="送信">
<script>
	 function check() {
        if(document.hoge.q1.value == "") {
            alert("Q1が未入力です。");
            return false;
        }
        if(document.hoge.q2.value == "") {
            alert("Q2が未入力です。");
            return false;
        }
        if(document.hoge.q3.value == "") {
            alert("Q3が未入力です。");
            return false;
        }
		if(document.hoge.q4.value == "") {
            alert("Q4が未入力です。");
            return false;
        }
		if(document.hoge.q5.value == "") {
            alert("Q5が未入力です。");
            return false;
        }
		if(document.hoge.q6.value == "") {
            alert("Q6が未入力です。");
            return false;
        }
		if(document.hoge.q7.value == "") {
            alert("Q7が未入力です。");
            return false;
        }
    }
</script>
</form>
<!-- <ul>
<li><a href="index.php">戻る</a></li>
</ul> -->
</body>
</html>
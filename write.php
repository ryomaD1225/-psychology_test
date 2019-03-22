<?php

$q1 = $_POST["q1"];
settype($q1, 'int');
// $php_json = json_encode($q1);
$q2 = $_POST["q2"];
settype($q2, 'int');
$q3 = $_POST["q3"];
settype($q3, 'int');
$q4 = $_POST["q4"];
settype($q4, 'int');
$q5 = $_POST["q5"];
settype($q5, 'int');
$q6 = $_POST["q6"];
settype($q6, 'int');
$q7 = $_POST["q7"];
settype($q7, 'int');
$c = ",";
$br = "\r\n";
$str = $q1.$c.$q2.$c.$q3.$c.$q4.$c.$q5.$c.$q6.$c.$q7."\r\n";
$var = array();
$var [] = $q2;
$var [] = $q3;
$var [] = $q4;
$var [] = $q5;
$var [] = $q6;
$var [] = $q7;
$php_json = json_encode($var);
// echo is_array($php_json) ? 'Array' : 'not an Array';  //配列かどうか確認
// echo "\n";

// echo "<pre>";
// var_dump($php_json);       //数値か確認
// echo "</pre>";

?>
<html>
<head>
<meta charset="utf-8">
<title>File書き込み</title>
<link rel="stylesheet" href="sample1.css">
<script src="jquery-2.1.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.min.js"></script>

</head>
<body>
<h1>心理テストの結果</h1>
<h2>Q1の結果:</h2>
<p>森の中を一緒に歩いているのは、人生で一番大切な存在です。</p>
<h2>Q2の結果:</h2>
<p>出会った動物の大きさは、抱えている問題の大きさを示しています。</br>
もし、その動物が警戒心が強く、近寄りがたいようであれば、あなたは積極的な人です。</br>
逆に、のほほんとした平的な雰囲気であれば、受け身の傾向があるでしょう。</p>
<h2>Q3の結果:</h2>
<p>家の大きさは、野心の強さを示しています。</br>
フェンスがあるか無いかは、あなたが開放的な性格かどうかを示しています。無い人は、より素直な性格です。</p>
<h2>Q4の結果:</h2>
<p>テーブルの上に、食べ物や人、または花を見つけた人は、幸せだと感じている可能性が高いです。</br>
それらが無かった人は、あまり幸せではないのかも…！？</p>
<h2>Q5の結果:</h2>
<p>マグカップがどれほど丈夫であるかによって、森の中を一緒に歩く人との関係の強さが分かります。</br>
また、それを使って何をするかは、あなたがその人に対し、どのような態度を取るかを表しています。</p>
<h2>Q6の結果:</h2>
<p>湖か、川か、池か…その大きさは、あなたの性欲の強さです。</p>
<h2>Q7の結果:</h2>
<p>水に濡れた程度で、あなたがセックスをどれほど重要しているかが分かります。</p>

<canvas id="myRadarChart" width="200" height="200"></canvas>
<script>var sampleStr = JSON.parse('<?php echo $php_json; ?>');</script>
<script>$(function(){console.log(sampleStr);});</script>
<script>
    // var arr1 = new Array();
    // arr1.push(sampleStr);
    // console.log(arr1);
    // myRadarChart.config.data.datasets[data] = arr1;
    var ctx = document.getElementById("myRadarChart");
    var myRadarChart = new Chart(ctx, {
  //グラフの種類
  type: 'radar',
  //データの設定
  data: {
      //データ項目のラベル
      labels: ["抱えてる問題", "野心", "幸福度", "関係の強さ", "性欲の強さ", "性の重要度"],
      //データセット
      datasets: [
          {
              //凡例
              label: "総合評価",
              //背景色
              backgroundColor: "rgba(179,181,198,0.2)",
              //枠線の色
              borderColor: "rgba(179,181,198,1)",
              //結合点の背景色
              pointBackgroundColor: "rgba(179,181,198,1)",
              //結合点の枠線の色
              pointBorderColor: "#fff",
              //結合点の背景色（ホバーしたとき）
              pointHoverBackgroundColor: "#fff",
              //結合点の枠線の色（ホバーしたとき）
              pointHoverBorderColor: "rgba(179,181,198,1)",
              //結合点より外でマウスホバーを認識する範囲（ピクセル単位）
              hitRadius: 5,
              //グラフのデータ
              data: sampleStr,
          }
      ]
  },
  options: {
        scale: {
            ticks: {
                suggestedMin: 30,
                suggestedMax: 100
            }
        }
    }
});
console.log(myRadarChart);
</script>
</body>
<?php
//文字作成
//$str = date("Y-m-d H:i:s")."文字列";// . は js のプラスと一緒。
//File書き込み
$file = fopen("data/data.csv","a");	// ファイル読み込み fopen関数 開きたいファイのパス指定
fwrite($file, $str); //関数
fclose($file); //$fileは"このファイル"ってこと。
?>
<ul>
<li><a href="post.php">post.php</a></li>
</ul>
</body>
</html>
<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="description" content="ゲーミフィケーションハッカソン">
<meta name="viewport" content="width=device-width">
<title>ポケGO</title>
<link rel="stylesheet" href="css/materialize.css"/>
</head>

<body id="top">
<header id="header">
	<div id="headerWrap">
		<h1><img src="images/title.png" alt="logo"></h1>
	</div>
</header>

<hr>
<div align="center">
<h1>購入しました！</h1>

<img src="images/illustrain06-kaimono03.png" alt="logo" width="25%">
<hr>
<h3><a href="index.html">戻る</a></h3>
</div>

<div id="gauge">
  <?php
     $f=fopen("./text/kakin.txt","r");
     $sum = 0;
     if($f){
       while($num = fgets($f)){
         $sum += $num;
       }
     }
     fclose($f);
     echo "貯金額$sum";

     $f = fopen("../text/goal.txt","r");
     $goal = fgets($f);
     fclose($f);
     echo "目標$goal";

     $g_tmp = $goal/10;
     $s_tmp = $sum;
     $i = 0;
     while($s_tmp > $g_tmp){
       $s_tmp -= $g_tmp;
       $i++;
     }

  echo "レベル$i";

  $f=fopen("./text/level.txt","r");
  $lev = fgets($f);
  fclose($f);

  if($i != $lev){
  $lev = $i - $lev;
  echo $lev;
  echo "レベルが上がりました。";
  }
  echo "$s_tmp";
  ?>
  <meter value="<?php echo $s_tmp; ?>" min="0" max="<?php echo $g_tmp; ?>"></meter>
</div>
</body>
</html>

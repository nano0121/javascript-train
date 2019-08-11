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
		<nav id="mainnav">
			<p id="menuWrap"><a id="menu"><span id="menuBtn"></span></a></p>
			<div class="panel">
				<ul>
					<li><a href="./index.html">タイトルに戻る</a></li>
					<li><a href="itembuy.php">進化アイテム購入</a></li>
				</ul>
			</div>
		</nav>
	</div>
</header>
<br><br>
<hr>

<?php
   $f = fopen("./text/item.txt","r");
   $num = fgets($f);
   fclose($f);
   echo $num;
   if(isset($_POST["push"])){
   $num--;
   
   $f = fopen("./text/item.txt","w");
   @fwrite($f,$num);
   fclose($f);
   header("Location: result.html");
   }
   ?>

<center>
    <br><br><a href="index.html"><img src="images/okame004.gif" alt="logo" width="350"></a><a href="index3.html"><img src="images/anime.gif" width="350" alt="logo"></a>
</center>

<hr>


</body>
</html>

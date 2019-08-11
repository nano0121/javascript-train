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
   echo "<h2>　　進化剤残り：$num</h2>";
   if(isset($_POST["push"])){
   $num--;
   
   $f = fopen("./text/item.txt","w");
   @fwrite($f,$num);
   fclose($f);
   header("Location: result.html");
   }
   ?>
     <div align="center">
 <br><br><img src="images/okame004.gif" alt="logo" width="350"><img src="images/tnm.png" width="450" alt="logo"><img src="images/okame007.gif" width="350" alt="logo">
<form method="POST" action="">

   <h2> <input type="submit" name="push" value="進化"></button></h2>
   
 
</form>
</div>

<hr>


</body>
</html>

<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="description" content="ゲーミフィケーションハッカソン">
<meta name="viewport" content="width=device-width">
<title>貯蓄ゲームマイページ</title>

</head>

<body id="top">
<header id="header">
	<div id="headerWrap">
		<h1><img src="images/title.png" width="142" height="80" alt="logo"></h1>
		
	</div>
</header>
<br><br>
<hr>

<?php
   if(isset($_POST["ok"])){
   $num = $_POST["num"];
   $f = fopen("./text/goal.txt","w");
   @fwrite($f,$num);
   fclose($f);
   }
   ?>
<div align="center" >
  <form method="POST" action="">
    目標<input type="number" name="num" id="num"/><br>
    <input type="submit" name="ok" value="決定">
  </form>
</div>
<hr>


</body>
</html>

<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="description" content="ゲーミフィケーションハッカソン">
<meta name="viewport" content="width=device-width">
<title>ポケGO</title>
<link rel="stylesheet" href="css/materialize.css"/>
<link rel="stylesheet" href="css/table.css"/>
</head>

<body id="top">
<header id="header">
	<div id="headerWrap">
		<h1><img src="images/title.png" alt="logo"></h1>
		<nav id="mainnav">
			<p id="menuWrap"><a id="menu"><span id="menuBtn"></span></a></p>
			<div class="panel">
				<ul>
					<li><a href="index.html">タイトルに戻る</a></li>
					<li><a href="gradeup.php">モンスター進化</a></li>
				</ul>
			</div>
		</nav>
	</div>
</header>
<br><br>
<hr>

<?php
   $f = fopen("./text/item.txt","r");
   $itemnum = fgets($f);
   fclose($f);

   $f=fopen("./text/kakin.txt","r");
     $sum = 0;
     if($f){
       while($num = fgets($f)){
         $sum += $num;
       }
     }
     fclose($f);

   $f = fopen("../text/goal.txt","r");
   $goal = fgets($f);
   fclose($f);
   
   $goal = $goal/10;
   $i=0;
   while($sum > $goal){
   $sum -= $goal;
   $i++;
   }

   $f=fopen("./text/level.txt","w");
   @fwrite($f,$i);
   fclose($f);

   if(isset($_POST["push"])){
   $num = $_POST["money"]."00\n";
   $f = fopen("./text/kakin.txt","a");
   @fwrite($f,$num);
   fclose($f);
   $itemnum += $_POST["money"];
   $f = fopen("./text/item.txt","w");
   @fwrite($f,$itemnum);
   fclose($f);
   header("Location: http:get.php");
   }
   ?>
   


<hr>




<table>
  <tr>
    <th>アイテム名</th>
    <th>説明</th>
    <th>消費ポイント</th>
    <th>確定</th>
  </tr>
  <tr>
    <td class="icon bird">進化剤</td>
    <td>怪物を進化させられます</td>
    <td>2000P</td>
    <td><form method="POST" action="">
  <div align="center">
    個数<input type="number" name="money" id="num"/><br>
    <input type="submit" name="push" value="このボタンを押すと課金が確定されます"></button>
  </div>
</form></td>
  </tr>
  <tr>
    <td class="icon whale">強化剤</td>
    <td>怪物を強化させられます</td>
    <td>1000P</td>
    <td><form method="POST" action="">
  <div align="center">
    個数<input type="number" name="money" id="num"/><br>
    <input type="submit" name="push" value="このボタンを押すと課金が確定されます"></button>
  </div>
</form></td>
  </tr>
  <tr>
    <td class="icon crab">怪物の卵</td>
    <td>怪物のヒナを獲得できます</td>
    <td>500P</td>
    <td><form method="POST" action="">
  <div align="center">
    個数<input type="number" name="money" id="num"/><br>
    <input type="submit" name="push" value="このボタンを押すと課金が確定されます"></button>
  </div>
</form></td>
  </tr>
</table>

</body>
</html>

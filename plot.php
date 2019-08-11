<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="description" content="ゲーミフィケーションハッカソン">
<meta name="viewport" content="width=device-width">
<title>貯蓄状況</title>

</head>

<body id="top">
  <header id="header">
    <link rel="stylesheet" type="text/css" href="./css/hack.css">
    　　<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
    <div id="headerWrap">
      <h1><img src="poke/images/title.png" width="142" height="80" alt="logo"></h1>
      
    </div>
  </header>
  <br><br>
  <hr>
  <div align="center" id="now">

    <?php
       if(isset($_POST["ok"])){
       $num = $_POST["num"];
       $f = fopen("./text/goal.txt","w");
       @fwrite($f,$num);
       fclose($f);
       }
       ?>
  </div>
  <form method="POST" action="">
    <div align="center">
      <h3>目標金額の入力</h3>
    </div>
      <div align="center" class="cp_iptxt">
	<input type="number" name="num" id="num" class="ef"/>
	<input type="submit" name="ok" value="決定" class="button">
      </div>
      <div align="center">
	
      </div>
    </form>
    
<hr>
    <br>

    <div align="center" id="now">
      <h2>現在の金額<h2>
	  <?php
	     $f = fopen("./poke/text/kakin.txt","r");
	     $sum = 0;
	     if($f){
	     while($num = fgets($f)){
	     $sum += $num;
	     }
	     }
	     echo "<h2>￥$sum</h2>";
	     fclose($f);
	     
	     ?>
    </div>
  <div align="center" id="goal">
    <h2>目標金額</h2>
    <?php
       $f = fopen("./text/goal.txt","r");
       $goal = fgets($f);
       echo "<h2>￥$goal</h2>";
       fclose($f);
       ?>
  </div>
  <br><br><br><br><br><br><br><br><br><br>
  <div align="center">
    <h2>目標金額まであと</h2>
    <p class="goal1">
    <?php
       echo "￥".($goal-$sum);
       ?>
    </p>
  </div>
  
  <?php
     $py="python3 /var/www/html/hack/pyfile/plot.py";
     exec($py,$out);
     ?>

  <div align="center" id="plot">
    <img border="0" src="./images/figure.png" width="80%" height="80%" >
  </div>

  <br><br>
  <a href="http://localhost/hacason2/">
    <h2>戻る</h2>
  </a>
  <hr>


</body>
</html>

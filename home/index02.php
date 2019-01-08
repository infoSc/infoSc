
<?php
$money = 10000;
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>メニュー表</title>
<link rel="stylesheet" href="home.css">
</head>
<body>
<center><h1>メニュー表</h1></center>
<center><p>ユーザ名xxx  残高<?php echo $money; ?>円</p><center>
<hr>


<div class="gazo-box">
<ul>
<li><a href="next.html">セットメニュー</li>
<li><a href="next.html">ドリンクメニュー</li>
<li>期間限定メニュー</li>
</ul>
</div>




<div class="gazo-box">
<ul>
<li><img src="ramen.jpg" width="300" height="250" alt="サンプル画像"><br>商品名<br>¥580円<br>商品説明ーーー<br><button class="btn" type="button"><a href="index03.php">購入</a></button>

</script>

<br>

<li><img src="suteki.jpg" width="300" height="350" alt="サンプル画像"><br>商品名<br>¥580円<br>商品説明ーーー<br><button class="btn" type="button"><a href="index03.php">購入</a></button>


</script>

</ul>
</div>


<div class="gazo-box">
<ul　list-style: none;>
<li><img src="udon.jpg" width="300" height="250" alt="サンプル画像"><br>商品名<br>¥580円<br>商品説明ーーー<br><button class="btn"
type="button" onclick="location.href='移動先のファイルのパスを書く'">購入</button></li>

<li><img src="han.jpg" width="300" height="350" alt="サンプル画像"><br>商品名<br>¥580円<br>商品説明ーーー<br><button class="btn"
type="button" onclick="location.href='移動先のファイルのパスを書く'">購入</button></li>
</ul>
</div>



</body>
</html>

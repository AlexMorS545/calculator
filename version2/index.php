<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="style.css">
  <title>Calculator</title>
</head>
<body>
<?php
	require "server.php";
?>
<h2>Пример №2</h2>
<form class="form2" action="#" method="post">
	<div class="wrp">
		<span>Введите первое число</span>
		<input type="number" name="num1">
	</div>
	<div class="wrp">
		<span>Введите второе число</span>
		<input type="number" name="num2">
	</div>
	<div class="wrp">
		<span>Результат</span>
		<span class="result"><?= $result?></span>
	</div>
	<div class="btn-wrp">
		<button type="submit" name="operation" value="+">+</button>
		<button type="submit" name="operation" value="-">-</button>
		<button type="submit" name="operation" value="*">*</button>
		<button type="submit" name="operation" value="/">/</button>
	</div>
</form>
</body>
</html>

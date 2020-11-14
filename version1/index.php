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
<h2>Пример №1</h2>
<form action="#" method="post">
	<div class="wrp">
		<span>Введите первое число</span>
		<input type="number" name="num1">
	</div>
	<div class="wrp">
		<span>Выберите операцию</span>
		<select name="operation">
			<option value="+">+</option>
			<option value="-">-</option>
			<option value="*">*</option>
			<option value="/">/</option>
		</select>
	</div>
	<div class="wrp">
		<span>Введите второе число</span>
		<input type="number" name="num2">
	</div>
	<button type="submit">=</button>
	<div class="wrp">
		<span>Результат</span>
		<span class="result"><?= $result?></span>
	</div>
</form>
</body>
</html>

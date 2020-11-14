<?php

if($_POST['operation']) {
  $result = mathOperation($_POST['num1'], $_POST['num2'], $_POST['operation']);
}

function sum($a, $b) {
  return $a + $b;
}

function subtract($a, $b) {
  return $a - $b;
}

function multi($a, $b) {
  return $a * $b;
}

function division($a, $b) {
  if($b == 0) {
    return "На ноль делить нельзя!";
  }
  return $a / $b;
}

function mathOperation($arg1, $arg2, $operation) {
  switch ($operation) {
    case "+":
      return sum($arg1, $arg2);
    case "-":
      return subtract($arg1, $arg2);
    case "*":
      return multi($arg1, $arg2);
    case "/":
      return division($arg1, $arg2);
  }
}

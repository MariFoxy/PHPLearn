<?php

$var = 1;
$Var = 2;
$VAR = 3;
$_name = 'John';

$right = 'right';

// print 'hello';

$$right = 1;

// echo $right;

//ошибка
//$1a
//$!b
//$c!
//$d-f

// echo '<pre>';
// var_dump($var, $Var, $VAR, $_name);
// echo '</pre>';

$a = '100';
$b = '200';
$c = '300';
$b .= $a; //тоже самое $b = $b.$a;

// echo $a + $c.'<br>';

// echo $b.$a.'<br>';

// echo '$a + $c';

// echo '<br>';

// echo $a.'+'.$c;

// echo '<br>';

// echo "\n$a + $c<br>";

$some = 'Hell';

//Notice
// echo "$someo world!";
//Корреткная интерполяция
// echo '<br>';
// echo $some."o world!";
// echo '<br>';
// echo "{$some}o world!";
// echo '<br>';
// echo "${some}o world!";

// $c = <<<_TEXT_
// Здесь я могу писать все, что угодно.
// Вот переменные $a, $c.
// _TEXT_;

echo $c;
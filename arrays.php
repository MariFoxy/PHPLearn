<?php

//объявление массива
$a = array();
$b = [];

//список
$b = [1, 2, 3];

// echo $b[0];
// echo $b[1];
// echo $b[2];

// list($b1, $b2, $b3) = $b;
// var_dump($b1, $b2, $b3);

// $firstquarter = [1 => 'January', 'February', 'March'];
// print_r($firstquarter);

//key может быть либо типа int, либо типа string. value может быть любого типа.
// $array = [
//     "foo" => "bar",
//     "bar" => "foo",
// ];

//преобразование ключей
// $array = [
//     1 => 'a',
//     '1' => 'b',
//     1.5 => 'c',
//     true => 'd',
// ];
// var_dump($array);

//Доступ к элементам массива

// $array = [
//     'foo' => 'bar',
//     42 => 24,
//     'multi' => [
//          'dimensional' => [
//              'array' => 'foo',
//          ],
//     ],
// ];

// var_dump($array['foo']);
// var_dump($array[42]);
// var_dump($array['multi']['dimensional']['array']);

//итерация элементов массива
$array = [1, 2, 3, 4, 5];

// echo '<pre>';
// foreach ($array as $key => $value) {
//     var_dump('ключ:'.$key.', значение:'.$value);
// }
// echo '</pre>';


// изменяем элементы (ничего не произойдет)
// echo '<pre>';
// foreach ($array as $key => $value) {
//     ++$value;
// }
// echo '</pre>';
// var_dump($array);

// изменяем элементы (элементы увеличились)
// echo '<pre>';
// foreach ($array as $key => &$value) {
//     ++$value;
// }
// echo '</pre>';
// var_dump($array);
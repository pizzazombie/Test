<?php

// вводим количество ступеней и числа каждой ступени через пробел
echo "Введите количество ступеней:";
$input = fgets(STDIN);
$steps = (int)trim($input);

$tr = array();
for ($i = 0; $i < $steps; $i++)
{


echo "Введите числа ступени: ";
$input = fgets(STDIN);
$arr = explode(" ", trim($input));

//  превращаем массив строк в массив чисел
$nums = array();
$index = 0;
foreach ($arr as $str)
{
    $nums[$index] = (int)trim($str);
    $index++;
}
//  закидываем в пирамиду (массив массивов)
array_push($tr, $nums);
}

$i = 0;
$res = array(); // массив чисел наименьшего пути
$sum = 0;  // текущая длина пути
while ($i < count($tr))
{
    //  находим наименьшее число в ступени
    array_push($res, min($tr[$i]));
    $sum = $sum + min($tr[$i]);
    $i++;
}

echo "Минимальный путь равен $sum\n";
for ($i = 0; $i < $steps; $i++)
    echo $res[$i] . " ";
?>
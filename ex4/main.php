<?php
// функция возвращает сумму чисел в массиве от индекса $a до индекса $b
function get_sum(array $arr, $a, $b) {
    $sum = 0;
    for ($i = $a; $i <= $b; $i++) {
        $sum = $sum + $arr[$i];
    }
    echo "max_sum=$sum\n";
    return $sum;
}

// функция возвращает копию массива от $a до $b
function copy_arr(array $arr, $a, $b){
    $res = array();
    for ($i = $a; $i <= $b; $i++) {
        array_push($res,  $arr[$i]);
    }
    print_r($res);
    return $res;
}

//считываем массив чисел разделенных запятыми
echo "Array: ";
$input = fgets(STDIN);
$arr = explode(",", trim($input));

// превращаем массив строк в массив чисел
$nums = array();
$index = 0;
foreach ($arr as $str)
{
    $nums[$index] = (int)trim($str);
    $index++;
}

// инициализируем переменные
$i = 0;
$j = 0;
$best_arr = array();
$max_sum = 0;
$len = count($nums);

// проходимся по массивую перебирая числа от текущего до последнего
while ($i < $len)
{
    $j = $i;
    while ($j < $len)
    {
        // Если при текущих $i и $j сумма больше записанной максимальной, 
        // то копируем часть массива и сохраняем его сумму как максимальную
        if (get_sum($nums, $i, $j) > $max_sum)
        {
            $max_sum = get_sum($nums, $i, $j);
            $best_arr = copy_arr($nums, $i, $j);
        }
        $j++;
    }
    $i++;
}

// наш массив
print_r($best_arr);

?>
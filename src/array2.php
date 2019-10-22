<?php
/////////////////////////////////////////////////////////////////////
echo '<h3>1. Максимальное число из массива с четными индексами</h3>';
// 1) среди элементов массива с четными индексами, найти тот, который имеет максимальное значение.
$randomArray = [];
$j = rand(10, 100);
for ($i = 1; $i < $j; $i++) {
    $randomArray[] = rand(-100, 100);
}

echo implode(', ', $randomArray) . '<br>';

$maxValue = 0;
foreach ($randomArray as $key => $value) {
    if ($key % 2 == 0) {
        $evenKey[$key] = $value;

        if ($evenKey[$key] > $maxValue) {
            $maxValue = $evenKey[$key];
        }
    }
}
echo 'Максимальное число массива - ' . $maxValue;


////////////////////////////////////////////////////////////////////////////////////
echo '<h3>2. Формирование массива из значений меньших чем среднеарифметическое</h3>';
//Найти в массиве те элементы, значение которых меньше среднего арифметического, взятого от всех элементов массива.(здесь елементом массива выступает случайно число от 0 до 1000)
$randomArray2 = [];
$j = rand(10, 100);
for ($i = 1; $i < $j; $i++) {
    $randomArray2[] = rand(0, 1000);
}

$sum = 0;
foreach ($randomArray2 as $value) {
    $sum = $sum + $value;
}
echo 'Сумма значений массива - ' . $sum . '<br>';
echo  'Кол-во элементов массива - ' . count($randomArray2) . '<br>';
echo 'Среднее арифметическое - ' . $averengeItem = $sum / count($randomArray2) . '<br>';

foreach ($randomArray2 as $item) {
    if ($item < $averengeItem) {
        $minArray[] = $item;
    }
}

echo implode(', ', $minArray);

////////////////////////////////////////////////////////////////////////
echo '<h3>3. Два максимальных и два минимальных значения массива.</h3>';
//3) Найти два минимальных и два  максимальных  элемента массива
$randomArray3 = [];
$j = rand(10, 20);
for ($i = 1; $i < $j; $i++) {
    $randomArray3[] = rand(0, 100);
}

echo 'Исходный массив - ' . implode(', ', $randomArray3) . '<br>';

$cnt = count($randomArray3);

for ($i = 0; $i < $cnt; $i++) {
    for ($j = 0; $j < $cnt - 1; $j++) {
        $elem1 = $randomArray3[$j];
        $elem2 = $randomArray3[$j + 1];
        if ($elem1 > $elem2) {
            $randomArray3[$j] = $elem2;
            $randomArray3[$j + 1] = $elem1;
        }
    }
}

echo 'Отсортированный массив - ' .  implode(', ', $randomArray3) . '<br>';
//echo '<pre>';
//var_dump($randomArray3);
//echo '</pre>';
echo 'Два первых (минимальных) элемента массива - ' . $randomArray3[0] . ', ' . $randomArray3[1] . '<br>';
echo 'Два последних (максимальных) элемента массива - ' . $randomArray3[$cnt - 2] . ', ' . $randomArray3[$cnt - 1] . '<br>';

echo '<h3>4. Вычислить сумму модулей элементов массива, расположенных после первого отрицательного элемента.</h3>';
//Вычислить сумму модулей элементов массива, расположенных после первого отрицательного элемента.
//Например, в массиве [5, 3, -1, 8, 0, -6, 1] первый отрицательный элемент является третьим по счету,
//а сумма модулей стоящих после него элементов массива будет составлять 8 + 0 + 6 + 1 = 15.<p>
echo 'Исходный массив  -  $array = [5, 3, -1, 8, 0, -6, 1, -10, 10]  <br>';

$array = [5, 3, -1, 8, 0, -6, 1, -10, 10];

$sum = 0;
$i = 0;
while ($array[$i] > 0) {
    unset($array[$i]);
    $i++;
}

foreach ($array as $key => $value) {
    if ($key != $i) {
        $sum = $sum + abs($array[$key ]);
    }
}
echo 'Сумма - ' . $sum;


//////////////////////////////
echo '<h3>5. В массиве найти сумму элементов, находящихся между минимальным и максимальным элементами..</h3>';
// В массиве найти сумму элементов, находящихся между минимальным и максимальным элементами. Сами минимальный и максимальный элементы в сумму не включать.
$randomArray4 = [];
$j = rand(10, 20);
for ($i = 1; $i < $j; $i++) {
    $randomArray4[] = rand(0, 100);
}

echo 'Исходный массив - ' . implode(', ', $randomArray4) . '<br>';

$cnt = count($randomArray4);

$maxValue = null;
$minValue = null;
$maxIndex = null;
$minIndex = null;

foreach ($randomArray4 as $key => $value) {
    if ($value > $maxValue || $maxValue === null) {
        $maxValue = $value;
        $maxIndex = $key;
    }
    if ($value < $minValue || $minValue === null) {
        $minValue = $value;
        $minIndex = $key;
    }
}

echo 'Минимальное значение - ' . $minValue . '<br>';
echo 'Индекс минимального значения - ' . $minIndex . '<br><br>';
echo 'Максимальное значение - ' . $maxValue . '<br>';
echo 'Индекс максимального значения - ' . $maxIndex . '<br><br>';


$summ = 0;
if ($minIndex < $maxIndex) {
    for ($i = $minIndex +1; $i < $maxIndex; $i++) {
        $summ += $randomArray4[$i];
    }
} else {
    for ($i = $maxIndex +1; $i < $minIndex; $i++) {
        $summ += $randomArray4[$i];
    }
}

echo 'Сумма - ' . $summ;

echo '<h3>6. Найти среднее арифметическое положительных элементов массива.</h3>';

$randomArray5 = [];
$j = rand(10, 20);
for ($i = 1; $i < $j; $i++) {
    $randomArray5[] = rand(-100, 100);
}

echo 'Исходный массив - ' . implode(', ', $randomArray5) . '<br>';

$cnt = count($randomArray5);

foreach ($randomArray5 as $key => $value) {
    if ($randomArray5[$key] > 0) {
        $newArray[] = $randomArray5[$key];
    }
    $cnt = count($newArray);
    $summ = 0;
    foreach ($newArray as $value) {
        $summ += $value;
    }
}

echo 'Массив положительных чисел - ' . implode(', ', $newArray) . '<br>';
echo 'Среднее арифметическое положительных чисел массива - ' . $middleNumber = $summ / $cnt;


echo '<h3>7. Определить, какое число в массиве встречается чаще всего.</h3>';
echo '???????????????????????????????';
echo '???????????????????????????????';
// Определить, какое число в массиве встречается чаще всего. (здесь диапозон значение елементов массива от 50 до 75)

$randomArray6 = [];
$j = rand(10, 30);
for ($i = 1; $i < $j; $i++) {
    $randomArray6[] = rand(50, 75);
}
echo '<pre>';
echo 'Исходный массив - ' . implode(', ', $randomArray6);
echo '</pre>';

$cnt = count($randomArray6);


//////////////////////////////
echo '<h3>8. В массиве случайных целых чисел поменять местами минимальный и максимальный элементы.</h3>';
// В массиве случайных целых чисел поменять местами минимальный и максимальный элементы.
$randomArray7 = [];
$j = rand(10, 20);
for ($i = 1; $i < $j; $i++) {
    $randomArray7[] = rand(-100, 100);
}

echo 'Исходный массив - ' . implode(', ', $randomArray7) . '<br>';

$maxValue = null;
$minValue = null;
$maxIndex = null;
$minIndex = null;

foreach ($randomArray7 as $key => $value) {
    if ($value > $maxValue || $maxValue === null) {
        $maxValue = $value;
        $maxIndex = $key;
    }
    if ($value < $minValue || $minValue === null) {
        $minValue = $value;
        $minIndex = $key;
    }
}

echo 'Минимальное значение - ' . $minValue . '<br>';
echo 'Индекс минимального значения - ' . $minIndex . '<br><br>';
echo 'Максимальное значение - ' . $maxValue . '<br>';
echo 'Индекс максимального значения - ' . $maxIndex . '<br><br>';


$tempMinValue = $minValue;
$tempMaxValue = $maxValue;

$randomArray7[$minIndex] = $tempMaxValue;
$randomArray7[$maxIndex] = $tempMinValue;

echo 'Конечный результат - ' . implode(', ', $randomArray7) . '<br>';







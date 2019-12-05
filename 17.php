<?php
$items = ['where', 'is', 'my', 'money'];
$sum = 0;
//общий цикл
for ($i=0; $i<100; $i++)
    {
       if ($i%3 == 0) {echo "$i делится без остатка на 3<br/>";}
       if ($i%5 == 0) {$sum += $i;}
       if ($i%5 == 0 and $i%3 == 0) {shuffle($items);}
    }
//вывод перемешанного массива $items
foreach ($items as $item) {
    echo "$item ";
}
//вывод $sum
echo "<br/> сумма чисел кратных пяти: ".$sum;
?>
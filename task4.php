<?php


function create(array $array, int $deep, int $x): array {
    $deep--;
    for ($i = 0; $i < $x; $i++) {
        if ($deep > 0) {
            $array[] = [];
            $array[$i] = create($array[$i], $deep, $x);
        }
        else {
            $array[] = random_int(10, 10000);
        }
    }
    return $array;
}

function createDeepArrayOfNumbers(int $deep): array {
    // Реализуйте функцию, которая случайным образом создает массив из X элементов,
    // состоящий из случайных целых чисел и из массивов целых чисел.
    // Глубина массива - $deep.
    // X должно быть больше 5 и меньше 10
    // Числа должны находиться в диапозоне от 10 до 10000


    $x = random_int(6, 8);
    $array = [];
    $array = create($array, $deep, $x);
    return $array;
}

function calculateSum(array $deepArrayOfNumbers): int {
    // Напишите функцию которая вычисляет сумму чисел всех элементов и подэлементов структуры,
    // создаваемой функцией createDeepArrayOfNumbers.

      return summ($deepArrayOfNumbers);
}


 function Summ(array $array):int{
    $sum=0;
    foreach ($array as $i){
        if (is_integer($i)){
            $sum +=$i;
        }
        else{
            $sum += Summ($i);
        }
    }
    return $sum;
 }
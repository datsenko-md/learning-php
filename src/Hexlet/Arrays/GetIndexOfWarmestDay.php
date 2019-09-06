<?php

/*
Есть массив данных описывающих
изменение температуры в городе.
    $data = [
            [-1, 3, 2], //1 день [утро, день, вечер]
            [0, 4, 5], //2 день [утро, день, вечер]
            [2, 7, 10],//3 день [утро, день, вечер]
        ];
Функция возвращает индекс дня,
в котором зафиксирована максимальная температура.
Если массив пуст - возвращает null.
Если есть два дня с одинаковой максимальной температурой -
возвращает индекс последнего
*/
    

namespace Php\Hexlet\Arrays\GetIndexOfWarmestDay;

//Первый вариант решения
/*
function getIndexOfWarmestDay(array $temperatures)
{
    if (empty($temperatures)) {
        return null;
    }

    $maxTemp = $temperatures[0][0];
    $index = 0;

    foreach ($temperatures as $day => $dayTemp) {
        foreach ($dayTemp as $temp) {
            if ($temp >= $maxTemp) {
                $maxTemp = $temp;
                $index = $day;
            }
        }
    }

    return $index;
}
*/
//Второй вариант
function getIndexOfWarmestDay(array $data)
{
    $maxTemp = PHP_INT_MIN;
    $index = null;
    
    foreach ($data as $key => $temperatures) {
        foreach ($temperatures as $value) {
            if ($value >= $maxTemp) {
                $maxTemp = $value;
                $index = $key;
            }
        }
    }
    
    return $index;
}

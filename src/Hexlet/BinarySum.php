<?php

/* 
* Функция принимает на вход два двоичных числа в виде строк
* и возвращает их сумму. Сумма также возвращается в виде строки.
*/

namespace Learning\Php\Hexlet\BinarySum;

function binarySum($num1, $num2)
{
    return decbin(bindec($num1) + bindec($num2));
}

<?php

/*
Функция строит список HTML из элементов коллекции
*/
    
namespace Php\Hexlet\Arrays\BuildList;

//Первый вариант решения
/*
function buildList(array $col)
{
    $result = '';
    foreach ($col as $value) {
        $result .= "<li>{$value}</li>";
    }

    return "<ul>{$result}</ul>";
}
*/
//Второй вариант
function buildList(array $col)
{
    $parts = [];
    
    foreach ($col as $item) {
        $parts[] = "<li>{$item}</li>";
    }
    
    $innerValue = implode('', $parts);
    
    return "<ul>{$innerValue}</ul>";
}

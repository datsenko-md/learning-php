<?php

/*
Функция строит список определений HTML из элементов коллекции
*/
    
namespace Php\Hexlet\Arrays\BuildDefinitionList;

function buildDefinitionList(array $definitions)
{
    if (empty($definitions)) {
        return '';
    }
    
    $parts = [];
    
    foreach ($definitions as $definition) {
        $name = $definition[0];
        $description = $definition[1];
        $parts[] = "<dt>{$name}</dt><dd>{$description}</dd>";
    }
    
    $innerValue = implode($parts, '');
    
    return "<dl>{$innerValue}</dl>";
}

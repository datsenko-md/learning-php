<?php

/*
Функция возвращает ассоциативный массив composerTest.json
*/

namespace Php\Hexlet\AssociativeArrays\GetComposerFileData;

function getComposerFileData()
{
    return [
        'autoload' => [
            'files' => [
                'src/Arrays.php'
            ]
        ],
        'config' => [
            'vendor-dir' => '/composer/vendor'
        ]
    ];
}

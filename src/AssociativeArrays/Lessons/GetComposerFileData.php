<?php

/*
Функция возвращает ассоциативный массив composerTest.json
*/

namespace App\AssociativeArrays\Lessons\GetComposerFileData;

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

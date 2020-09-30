<?php

/*
*/

namespace App\AssociativeArrays\Challenges\FindWhere;

function findWhere(array $books, array $search)
{
    foreach ($books as $book) {
        if ($book == array_merge($book, $search)) {
            return $book;
        }
    }
    
    return null;
}

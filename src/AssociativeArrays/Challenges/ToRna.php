<?php

/*
*/

namespace App\AssociativeArrays\Challenges\ToRna;

function toRna($dna)
{
    $vocabulary = [
        'G' => 'C',
        'C' => 'G',
        'T' => 'A',
        'A' => 'U',
    ];
    
    $rna = [];
    
    for ($i = 0, $length = strlen($dna); $i < $length; $i++) {
        $nucleotide = $dna[$i];
        $rna[] = $vocabulary[$nucleotide];
    }
    
    return implode('', $rna);
}

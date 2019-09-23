<?php

namespace Tests\Hexlet\OODesign;

use PHPUnit\Framework\TestCase;
use function Php\Hexlet\OODesign\Normalizer\normalize;
use function Php\Hexlet\OODesign\Normalizer\getQuestions;

class NormalizerTest extends TestCase
{
    public function testNormalize()
    {
        $raw = [
            [
                'name' => 'istambul',
                'country' => 'turkey'
            ],
            [
                'name' => 'Moscow ',
                'country' => ' Russia'
            ],
            [
                'name' => 'iStambul',
                'country' => 'tUrkey'
            ],
            [
                'name' => 'antalia',
                'country' => 'turkeY '
            ],
            [
                'name' => 'samarA',
                'country' => '  ruSsiA'
            ],
            [
                'name' => 'istambul',
                'country' => 'usa'
            ],
        ];

        $actual = normalize($raw);
        $expected = [
            'russia' => [
                'moscow', 'samara'
            ],
            'turkey' => [
                'antalia', 'istambul'
            ],
            'usa' => [
                'istambul'
            ]
        ];
        $this->assertEquals($expected, $actual);
    }

    public function testNormalize2()
    {
        $raw = [
            [
                'name' => 'pariS ',
                'country' => ' france'
            ],
            [
                'name' => ' madrid',
                'country' => ' sPain'
            ],
            [
                'name' => 'valencia',
                'country' => 'spain'
            ],
            [
                'name' => 'marcel',
                'country' => 'france'
            ],
            [
                'name' => ' madrid',
                'country' => ' sPain'
            ],
        ];

        $actual = normalize($raw);
        $expected = [
            'france' => [
                'marcel', 'paris'
            ],
            'spain' => [
                'madrid', 'valencia'
            ]
        ];
        $this->assertEquals($expected, $actual);
    }
    
    public function testGetQuestions()
    {
        $text = <<<HEREDOC
lala\r\nr
ehu?
vie?eii
\n \t
i see you
/r \n
one two?\r\n\n
HEREDOC;
        $expected = "ehu?\none two?";
        $actual = getQuestions($text);
        $this->assertEquals($expected, $actual);
    }
}

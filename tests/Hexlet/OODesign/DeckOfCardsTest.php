<?php

namespace Tests\Hexlet\OODesign;

use PHPUnit\Framework\TestCase;
use Php\Hexlet\OODesign\DeckOfCards;

class DeckOfCardsTest extends TestCase
{
    public function testDeckOfCards()
    {
        $deck = new DeckOfCards([2, 3, 5, 'king']);
        $expected = [
            2, 2, 2, 2,
            3, 3 , 3, 3,
            5, 5, 5, 5,
            'king', 'king', 'king', 'king'];
        $actual = $deck->getFullDeck()->all();
        $this->assertEquals($expected, $actual);
    }
    
    public function testShuffledDeck()
    {
        $deck = new DeckOfCards([2, 3, 5, 'king']);
        $shuffled1 = $deck->getShuffled();
        $shuffled2 = $deck->getShuffled();
        
        $this->assertNotEquals($shuffled1, $shuffled2);
    }
}

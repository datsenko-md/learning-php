<?php

namespace Php\Hexlet\OODesign;

use Tightenco\Collect\Support;

class DeckOfCards
{
    private $deck;
    
    public function __construct(array $cards)
    {
        $this->deck = collect($cards);
    }
    
    public function getFullDeck()
    {
        return $this->deck->map(function ($card) {
            return array_fill(0, 4, $card);
        })->collapse();
    }
    
    public function getShuffled()
    {
        $fullDeck = collect($this->getFullDeck());
        return $fullDeck->shuffle()->all();
    }
}

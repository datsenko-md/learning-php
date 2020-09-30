<?php

namespace App\OODesign\Challenges;

use Ds\Deque;

class Drunkard
{
    public function run(array $cards1, array $cards2): string
    {
        $deck1 = new Deque($cards1);
        $deck2 = new Deque($cards2);
        $round = 0;
        
        while ($round !== 100) {
            if ($deck1->isEmpty() && $deck2->isEmpty()) {
                return 'Botva!';
            } elseif ($deck1->isEmpty()) {
                return "Second player. Round: {$round}";
            } elseif ($deck2->isEmpty()) {
                return "First player. Round: {$round}";
            }

            $card1 = $deck1->shift();
            $card2 = $deck2->shift();

            if ($card1 > $card2) {
                $deck1->push($card1, $card2);
            } elseif ($card2 > $card1) {
                $deck2->push($card2, $card1);
            }
            
            $round++;
        }
        
        return 'Botva!';
    }
}

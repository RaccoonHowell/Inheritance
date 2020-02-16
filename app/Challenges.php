<?php

namespace App;

class Challenges
{
    public function start()
    {
        echo "\nChallenges\n";

        // load challenges
        $this->spoon();
    }

    public function spoon()
    {
        echo "\n01) Spoon\n";

        $spoon = new Cutlery\Spoon();
        $runcible = new Cutlery\RuncibleSpoon();

        $spoon->scoop()->scoop();
        $runcible->scoop()->scoop();

        dump(
            $spoon->howManyScoops(), // 2
            $runcible->howManyScoops() // 4
        );
    }
}
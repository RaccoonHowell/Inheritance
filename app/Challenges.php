<?php

namespace App;

class Challenges
{
    public function start()
    {
        echo "\nChallenges\n";

        // load challenges
        $this->spoon();
        $this->languages();
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

    public function languages()
    {
        echo "\n02) Languages\n";

        $english = new Languages\English();
        $french = new Languages\French();
        $arabic = new Languages\Arabic();

        dump(
            $english->name(), // "English"
            $english->hello(), // "Hello"

            $french->name(), // "French"
            $french->hello(), // "Bonjour

            $arabic->name(), // "Arabic"
            $arabic->hello() // "مرحبا"
        );
    }
}
<?php

namespace App\Cutlery;

class RuncibleSpoon extends Spoon
{
    protected $scoops = 0;

    public function scoop() : Spoon
    {
        $this->scoops += 2;
        return $this;
    }
}

// Create a class Spoon in the App\Cutlery namespace. It should have a scoop() method. When you call howManyScoops() it should tell you how many times it has been scooped. Also create a RuncibleSpoon class in the same namespace. It should extend the Spoon class. Override its scoop() method so that it does two scoops for each call of scoop()
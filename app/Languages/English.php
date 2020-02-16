<?php

namespace App\Languages;

class English extends Language
{
    protected $name = "English";
    
    public function hello() : string
    {
        return "Hello";
    }
}

// Create an abstract class Language in the App\Languages namespace. It should have a $name property and a name() method, which returns the language name. It should declare an abstract hello() method. Then create three child classes:

// English:
// name(): "English"
// hello(): "Hello"
// French:
// name(): "French"
// hello(): "Bonjour"
// Arabic:
// name(): "Arabic"
// hello(): "مرحبا"
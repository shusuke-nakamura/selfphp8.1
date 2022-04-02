<?php

use Dog as GlobalDog;

interface Animal
{
    function outputVoice(): string;
}

class Cat implements Animal
{

    public function outputVoice(): string
    {
        return "ニャー";
    }
}

class Dog implements Animal
{

    public function outputVoice(): string
    {
        return "バゥ";
    }
}

$cat = new Cat();
print $cat->outputVoice() . '<br />';
$dog = new Dog();
print $dog->outputVoice();

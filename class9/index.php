<?php

interface Human {
    public function speak($name);
}

class BengaliHuman implements Human {
    public function speak($name)
    {
        echo $name . ' is speaking in Bangla...';
    }
}

class EnglishHuman implements Human {
    public function speak($name)
    {
        echo $name . ' is speaking in English...';
    }
}

class FrenchHuman implements Human {
    public function speak($name)
    {
        echo $name . ' is speaking in French...';
    }
}

class Person {
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function show(Human $human)
    {
        $human->speak($this->name);
    }

}

$person = new Person('Sumon');
echo $person->show(new FrenchHuman);




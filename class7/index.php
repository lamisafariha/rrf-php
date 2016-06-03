<?php

/**
* Defines Human Class.
*/
class Human
{
    public $name = '';
    private $gender = '';

    function __construct($name) {
        echo __CLASS__ . ' is constructing...';
        $this->name = $name;
    }

    public function watch() {
        $this->think();
        echo $this->name . ' watching...<br/>';
    }

    public function walk() {
        $this->think();
        echo $this->name . ' walking...<br/>';
    }

    private function think() {
        echo $this->name . ' thinking...<br/>';
    }

    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    public function getGender()
    {
        return $this->gender;
    }

    function __destruct() {
        echo __CLASS__ . ' is destroyed...';
    }
}

$adnan = new Human('Adnan');
$adnan->walk();

// sleep(10);

// echo 'Another process is running...';

//$adnan->walk();

// $adnan = new Human();
// $adnan->name = 'Adnan';
// $adnan->walk();
// $adnan->setGender('male');
// echo $adnan->getGender();

// echo '<br/>';

// $sumon = new Human();
// $sumon->name = 'Sumon';
// $sumon->walk();
// $sumon->watch();


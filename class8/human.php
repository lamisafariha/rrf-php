<?php

/**
* Defines Human Class.
*/
class Human
{
    public $name = '';
    private $gender = '';
    protected $education = 'MBBS';

    function __construct($name) {
        //echo __CLASS__ . ' is constructing...';
        $this->name = $name;
    }

    function __call($name, $arguments) {

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
        //echo __CLASS__ . ' is destroyed...';
    }
}

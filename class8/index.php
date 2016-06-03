<?php
require_once('human.php');

class Doctor extends Human {
    public $discipline = '';

    public function operates() {
        echo ' is operating...<br/>';
    }

    public function setEducation($education)
    {
        $this->education = $education;
    }

    public function getEducation()
    {
        return $this->education;
    }

    public function __invoke()
    {
         var_dump($this);
    }

    public function see() {

    }
}


$human = new Doctor('Tiasha');
// isset($human->age);
// echo 'Age is: ' . $human->age;
// $doctor = new Doctor('Tushar');
// $doctor->discipline = 'Skin';
// $doctor->setGender('Male');
// $doctor->setEducation('MBBS');
// echo 'Doctor Name: ' . $doctor->name . '<br/>';
// echo 'Doctor Gender: ' . $doctor->getGender() . '<br/>';
// echo 'Doctor Education: ' . $doctor->getEducation() . '<br/>';
// echo 'Doctor Disciplne: ' . $doctor->discipline . '<br/>';

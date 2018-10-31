<?php
require_once ('iTemplate.php');
use Template\BadTemplate as Template;

interface Car{
    public function printInfo();
}

class Sedan implements Car{
    private $fuil;
    private $weight;
    private $model;

    public function __construct($model,$weight,$fuil)
    {
        $this->fuil = $fuil;
        $this->model = $model;
        $this->weight = $weight;
    }

    public function printInfo(){
        print_r([
                '$model' => $this->model,
            '$weight' => $this->weight,
            '$fuil' => $this->fuil
        ]);
    }
}

$honda = new Sedan("Honda C5",250,"dizel");
$honda->printInfo();

$bmw = new Template();
$bmw->setVariable("model","BMW");
$bmw->setVariable("weight","290");
$bmw->setVariable("fuil","gaz");
$bmw->getHtml("New car model {model} weight is {weight} and have fiul for {fuil}");

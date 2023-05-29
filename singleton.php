<?php

class Car{
    private $name;
    private $surname;
    public static $count;
    public static $instance;

    private function __construct()
    {
        self::$count++;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
         $this->name = $name;

    }

    public static function getInstance(): Car
    {
        if(self::$instance==null)
        {
            self::$instance = new self();
        }
        return self::$instance;
    }
}
echo "123";
$car  = Car::getInstance();
$car->setName('car');
echo $car->getName().'<br />';
$car2 = Car::getInstance();
$car2->setName('car2');
echo $car2->getName().'<br />';
$car3 = Car::getInstance();
$car3->setName('car3');
echo $car3->getName().'<br />';
echo Car::$count;

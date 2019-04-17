<?php

namespace WilliamTome\People;

class Person{

    private $data;
    private $age;
    private $weight;

    public function __construct() {
        echo 'classe instanciada' . PHP_EOL;
    }

    public function setName(string $name){
        $this->data[] = $name;
    }
    public function setAge(int $age){
        $this->age = $age;
    }
    public function setWeight(float $weight){
        $this->weight = $weight;
    }

    public function __set($propertie, $value)
    {
        $method = 'set' . ucfirst($propertie);
        if (method_exists($this, $method)) {
            $this->$method($value);
        }
        $this->propertie = $value;
    }
    
    public function __get($propertie)
    {
        $method = 'get' . ucfirst($propertie);
        if (method_exists($this, $method)) {
            return $this->$method();
        }
        return $this->propertie;
    }

    public function __toString() :string{
        return $this->name . ', ' . $this->age . ', ' . $this->weight . '.';
    }
}
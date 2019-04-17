<?php

require __DIR__.'/autoload.php';

// $person = new WilliamTome\People\Person;
// $person->setName("William");
// $person->setAge(30);
// $person->setWeight(65);

// var_dump($person);

var_dump((new WilliamTome\DB\MySQL)->connect());
var_dump((new WilliamTome\DB\Postgres)->connect());
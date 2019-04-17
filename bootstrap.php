<?php

require __DIR__.'/autoload.php';

$person = new WilliamTome\People\Person;
$person->name = 'Eric';
$person->age = 30;
$person->weight = 65;

var_dump($person->name);
var_dump($person->age);

echo $person;

// var_dump((new WilliamTome\DB\MySQL)->connect());
// var_dump((new WilliamTome\DB\Postgres)->connect());

// var_dump((new WilliamTome\DB\ORM)->select(false));

// try {
//     (new WilliamTome\DB\ORM)->select(false);
// } catch (WilliamTome\MyException $e) {
//     echo "Erro: ".$e->getMessage();
// }


<?php
require __DIR__.'/src/Autoload.php';

$autoload = new WilliamTome\Autoload;
$autoload->register();
$autoload->addNamespace('WilliamTome', 'src');
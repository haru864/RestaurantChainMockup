<?php

require_once 'Interfaces/FileConvertible.php';
require_once 'Models/User.php';
require_once 'Models/Company.php';
require_once 'Models/Employee.php';
require_once 'Models/RestaurantChain.php';
require_once 'Models/RestaurantLocation.php';

use Models\Company;
use Models\RestaurantChain;

$restaurantChain = new RestaurantChain(
    "restaurantChain-name",
    1950,
    "This is fake company!",
    "URL",
    "123",
    "Fake-Industory",
    "hogehoge",
    true,
    "hogehoge",
    "hogehoge",
    2,
    123,
    [],
    "fake-cuisine-type",
    0,
    "hogehoge"
);
echo $restaurantChain->toString() . PHP_EOL;
echo $restaurantChain->toHTML() . PHP_EOL;



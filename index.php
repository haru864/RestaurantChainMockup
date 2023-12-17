<?php
// コードベースのファイルのオートロード
spl_autoload_extensions(".php");
spl_autoload_register();

// composerの依存関係のオートロード
require_once 'vendor/autoload.php';
require_once 'Helpers/RandomGenerator.php';
require_once 'Interfaces/FileConvertible.php';
require_once 'Models/User.php';
require_once 'Models/Company.php';
require_once 'Models/Employee.php';
require_once 'Models/RestaurantChain.php';
require_once 'Models/RestaurantLocation.php';

use Helpers\RandomGenerator;

$restaurantChains = [];
array_push($restaurantChains, RandomGenerator::RestaurantChain());
array_push($restaurantChains, RandomGenerator::RestaurantChain());
// var_dump($restaurantChains);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profiles</title>
    <style>
        /* ユーザーカードのスタイル */
    </style>
</head>

<body>
    <h1>User Profiles</h1>

    <?php foreach ($restaurantChains as $restaurantChain) : ?>
        <div class="restaurant_chain-card">
            <?php var_dump($restaurantChain); ?>
        </div>
    <?php endforeach; ?>

</body>

</html>
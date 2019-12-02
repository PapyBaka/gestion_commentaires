<?php

use App\Connection;
use App\Connexion;

require dirname(__DIR__) . '/vendor/autoload.php';

$pdo = Connexion::getPDO();

$pdo->exec("SET FOREIGN_KEY_CHECKS = 0");
$pdo->exec("TRUNCATE TABLE commentaires");
$pdo->exec("TRUNCATE TABLE labels");
$pdo->exec("SET FOREIGN_KEY_CHECKS = 1");

$faker = Faker\Factory::create('fr_FR');

/* $posts = [];
$categories = []; */


for ($i = 0; $i < 11; $i++) {
$contenu = $faker->sentences(10);
$contenu[] = "INTERDIT";
$contenu = $faker->shuffle($contenu);
$contenu = implode(' ', $contenu);
$pdo->exec("INSERT INTO commentaires SET contenu='{$contenu}'");
   // $posts[] = $pdo->lastInsertId();
}

for ($i = 1; $i < 12; $i++) {
    $pdo->exec("INSERT INTO labels SET label='INTERDIT', id_comment='{$i}'");
   // $categories[] = $pdo->lastInsertId();
}

/* foreach ($posts as $post) {
    $randomCategories = $faker->randomElements($categories,rand(0,count($categories)));
    foreach ($randomCategories as $category) {
        $pdo->exec("INSERT INTO post_category SET post_id='{$post}', category_id='{$category}'");
    }
} */
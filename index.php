<?php

require_once 'vendor/autoload.php';

$collName = array('Name', 'Surname', 'Email');

genCsv($collName, 5);

function genCsv($coll,$limit){

    $faker = Faker\Factory::create();

    $fp = fopen('file.csv', 'w');
    fputcsv($fp, $coll);

    for($i =0; $i<$limit; $i++){

        fputcsv($fp, [$faker->name(),$faker->lastname(),$faker->email()]);

    }

    fclose($fp);    
}


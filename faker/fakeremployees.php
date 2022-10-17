<?php
require('vendor/autoload.php');
require_once('config\config.php');
require_once('config\db.php');

$faker = Faker\Factory::create();
for ($i = 0; $i <= 199; $i++) {

    $e_lname = mysqli_real_escape_string($conn, $faker->lastName);    
    $e_fname = mysqli_real_escape_string($conn, $faker->firstName);    
    $e_address = mysqli_real_escape_string($conn, $faker->address);     
    $e_office = mysqli_real_escape_string($conn, $faker->Company); 

    $mysql = "INSERT INTO `employees`(`last_name`, `first_name`, `address`, `office`) VALUES ('$e_lname',' $e_fname','$e_address','$e_office')";
    mysqli_query($conn, $mysql);
}
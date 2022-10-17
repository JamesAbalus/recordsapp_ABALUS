<?php
require('vendor/autoload.php');
require_once('config\config.php');
require_once('config\db.php');

$faker = Faker\Factory::create();
for ($i = 0; $i <= 199; $i++) {

    $name = mysqli_real_escape_string($conn, $faker->Company);    
    $contact_number = mysqli_real_escape_string($conn, $faker->phoneNumber);    
    $email = mysqli_real_escape_string($conn, $faker->email);      
    $address = mysqli_real_escape_string($conn, $faker->streetAddress);     
    $city = mysqli_real_escape_string($conn, $faker->city);        
    $country = mysqli_real_escape_string($conn, $faker->country);         
    $postal = mysqli_real_escape_string($conn, $faker->postcode);    
    


    $mysql = "INSERT INTO `offices`(`name`, `contact_number`, `email`, `address`, `city`, `country`, `postal`) VALUES ('$name','$contact_number','$email','$address','$city','$country',' $postal')";
    mysqli_query($conn, $mysql);
}
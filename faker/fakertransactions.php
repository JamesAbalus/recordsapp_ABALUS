<?php
require('vendor/autoload.php');
require_once('config\config.php');
require_once('config\db.php');

$actionstatus = array('IN', 'OUT', 'COMPLETE');


$remarksstatus = array('Signed', 'For approval', 'Pending', '');


$faker = Faker\Factory::create();
for ($i = 0; $i <= 199; $i++) {

    $datelog = mysqli_real_escape_string($conn, date("F j, Y, g:i a"));      
    $document_code = mysqli_real_escape_string($conn, $faker->numberBetween($min = 100, $max = 300));    
    $randomnum = rand(0, 2);
    $action = mysqli_real_escape_string($conn, $actionstatus[$randomnum]);    
    $office = mysqli_real_escape_string($conn, $faker->Company);    
    $employee = mysqli_real_escape_string($conn, $faker->name);    
    $randomnotes = rand(0, 3);
    $remarks = mysqli_real_escape_string($conn, $remarksstatus[$randomnotes]);
    


    $mysql = "INSERT INTO `transactions`(`datelog`, `document_code`, `action`, `office`, `employee`, `remarks`) VALUES ('$datelog','$document_code','$action','$office','$employee','$remarks')";
    mysqli_query($conn, $mysql);
}
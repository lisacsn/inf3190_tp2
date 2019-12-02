<?php 

require 'lib/Medoo.php';
use Medoo\Medoo;

$database = new Medoo([
    'database_type'=>'mysql',
    'database_name' => 'inf3190',
    'server' => 'localhost',  
    'username' => 'root',
    'password' => ''
]);

?>
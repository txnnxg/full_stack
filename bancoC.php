
<?php
global $servername ;
global $username;
global $password;
global $database;

$servername = "localhost:3306";
$username = "root";
$password = "";
$database = "academia";

$conexao = new mysqli($servername, $username, $password, $database);
?>
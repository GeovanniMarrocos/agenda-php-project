<?php 

$host = "localhost";
$dbname ="agenda";
$user = "root";
$password = "12345";


try {

    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e) 
{
    $error = $e->getMessage();
    echo "Erro: $error";
}
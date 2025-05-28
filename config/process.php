<?php 

session_start();

require_once('./config/connection.php');
require_once('./config/url.php');
require_once('./vendor/autoload.php');



$id;

if(!empty($_GET))
{
    $id = $_GET['id'];
}

// Retorna o dado de um contato

if(!empty($id))
{

   $queryId = "SELECT id FROM contacts"; 
   
   $stmt = $conn->prepare($queryId);
    
} else{

// Retorna todos os processos 
$contacts = [];

$query = "SELECT * FROM contacts";

$stmt = $conn->prepare($query);

$stmt->execute();

$contacts = $stmt->fetchAll();

}
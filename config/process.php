<?php

session_start();

require_once('./config/connection.php');
require_once('./config/url.php');
require_once('./vendor/autoload.php');

$data = $_POST;

if (!empty($data)) 
{

} 
else 
{
    $id;

    if (!empty($_GET)) 
    {
        $id = $_GET['id'];
    }

    // Retorna o dado de um contato

    if (!empty($id)) 
    {
        $query = "SELECT * FROM contacts WHERE id = :id";

        $stmt = $conn->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();

        $contacts = $stmt->fetch();
    } 
    else 
    {

        // Retorna todos os processos 
        $contacts = [];

        $query = "SELECT * FROM contacts";

        $stmt = $conn->prepare($query);

        $stmt->execute();

        $contact = $stmt->fetchAll();
    }
}

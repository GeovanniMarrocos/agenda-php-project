<?php

session_start();

require_once('connection.php');
require_once('url.php');
// require_once('./vendor/autoload.php');

$data = $_POST;

// MODIFICAÇÕES NO BANCO
if (!empty($data)) 
{
   

    // CRIAR CONTATO
    if($data["type"] === "create")
    {
        $name = $data["name"];
        $phone = $data["phone"];
        $obeservations = $data["observations"];

        $query = "INSERT INTO contacts (name, phone ,observations) VALUES (:name, :phone, :observations)";
        
        $stmt = $conn->prepare($query);

        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":phone", $phone);
        $stmt->bindParam(":observations", $observations);

           try {

             $stmt->execute();
             $_SESSION["message"] = "Contato criado com sucesso!";   

            }catch(PDOException $e)
            {
                $error = $e->getMessage();
                echo "Erro: $error";
            }
    
    }



// SELEÇÃO DE DADOS
} 
else 
{
    $id;

    if (!empty($_GET)) 
    {
        $id = $_GET["id"];
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

    // FECHAR CONEXÃO
    $conn = null;
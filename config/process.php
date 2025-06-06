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
        $observations = $data["observations"];

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
    else if($data["type"] === "edit")
    {
        $name = $data["name"];
        $phone = $data["phone"];
        $observations = $data["observations"];
        $id = $data["id"];

        $query = "UPDATE agenda.contacts SET name = :name, phone = :phone, observations = :observations WHERE id = :id";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":phone", $phone);
        $stmt->bindParam(":observations", $observations);
        $stmt->bindParam(":id", $id);
        


       try {

             $stmt->execute();
             $_SESSION["message"] = "Contato {$name} atualizado com sucesso!";   

            }catch(PDOException $e)
            {
                $error = $e->getMessage();
                echo "Erro: $error";
            }

    }
    else if($data["type"] === "delete")
    {
        
        $id = $data["id"];

        $query = "DELETE FROM agenda.contacts WHERE id = :id";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(":id", $id);

       try {

             $stmt->execute();
             $_SESSION["message"] = "Contato removido com sucesso!";   

            }catch(PDOException $e)
            {
             $error = $e->getMessage();
             echo "Erro: $error";
            }
        

        // RETORNA TODOS OS PROCESSOS
        $contacts = [];

        $query = "SELECT * FROM contacts";

        $stmt = $conn->prepare($query);

        $stmt->execute();

        $contacts = $stmt->fetchAll();

        if(count($contacts) <= 0)
        {
            $query = "TRUNCATE agenda.contacts;";
            
            $stmt = $conn->prepare($query);
            $stmt->execute();
        }
    }
    // REDIRECIONAMENTO DE PÁGINA
     header("Location:" . $BASE_URL . "../index.php");

// SELEÇÃO DE DADOS
} 
else 
{
    $id;

    if (!empty($_GET)) 
    {
        $id = $_GET["id"];
    }

    // RETORNA O DADO DE UM CONTATO

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

        // RETORNA TODOS OS PROCESSOS
        $contacts = [];

        $query = "SELECT * FROM contacts";

        $stmt = $conn->prepare($query);

        $stmt->execute();

        $contacts = $stmt->fetchAll();

        
    }
}

    // FECHAR CONEXÃO
    $conn = null;
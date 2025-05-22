<?php require_once('./config/url.php');?>
<?php require_once('./vendor/autoload.php');?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda - Contatos</title>
    <!--BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
     <!-- FONT-AWESOME -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--CSS-->
     <link rel="stylesheet" href="<?php echo $BASE_URL ?>./css/style.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-lg">
            <a href="#" target="_blank" rel="noopener noreferrer" class="btn btn-link p-0">
                <img src="<?php echo $BASE_URL; ?>/img/agenda.svg" alt="Agenda" class="img-fluid" style="width: 120px;">
            </a>
            <div>
                <h3 class="justify-content-center m-lg-5">Agenda de Fornecedores</h3>
            </div>    
        </nav>
    </header>  
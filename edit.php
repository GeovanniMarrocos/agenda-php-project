<?php require_once('./vendor/autoload.php');?> 
 <?php include_once('./templates/header.php');?>
 <div class="container">
       <?php include_once("./templates/backbtn.html");?>
       <?php dump($contacts['observations'])?>
    <h1 id="main-title">Editar Contato</h1>
    <form id="create-form" action="<?php echo $BASE_URL?>./config/process.php" method="POST">
        <input type="hidden" name="type" value="edit">
        <input type="hidden" name="id" value="<?php echo $contact['id'] ?>">
        <div class="form-group mb-3">
            <label for="name">Nome do contato:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome" value="<?php echo $contacts['name']?>" required>
        </div>
        <div class=" form-group mb-3">
            <label for="phone">Telefone do contato:</label>
            <input type="text" class="form-control" id="phone" name="phone" placeholder="Digite o telefone" value="<?php echo $contacts['phone']?>" required>
        </div>
        <div class=" form-group mb-3">
            <label for="observations">Observações:</label>
            <textarea type="text" class="form-control" id="observations" name="observations" placeholder="Insira as observações" value="<?php echo $contacts['observations']?>" required rows="4"></textarea>
        </div>
        <button type="submit" class=" btn btn-primary mt-3">Atualizar</button>
    </form>
 </div>
 <?php include_once('./templates/footer.php');?>

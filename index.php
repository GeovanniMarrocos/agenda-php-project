<?php
require_once('./vendor/autoload.php');
require_once('./config/connection.php');
require_once('./config/process.php');
?>
<?php
include_once('./templates/header.php');
?>

<div class="container">
  <?php include_once('./helpers/message.php') ?>
  <h1 id="main-title">Minha Agenda</h1>
  <?php if (count($contacts) > 0): ?>
  <div>
    <table class="table" id="contacts-table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nome</th>
          <th scope="col">Telefone</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($contacts as $contact): ?>
        <tr>
          <td scope="row" class="col-id"><?php echo $contact['id'] ?></td>
          <td scope="row"><?php echo $contact['name'] ?></td>
          <td scope="row"><?php echo $contact['phone'] ?></td>
          <td class="actions">
            <a href="<?php echo $BASE_URL ?>show.php?id=<?php echo $contact['id'] ?>"><i class="fas fa-eye check-icon"></i></a>
            <a href="<?php echo $BASE_URL ?>edit.php?id=<?php echo $contact['id'] ?>"><i class="far fa-edit edit-icon"></i></a>
            <form class="d-inline-block" action="<?php echo $BASE_URL ?>./config/process.php" method="POST">
              <input type="hidden" name="type" value="delete">
              <input type="hidden" name="id" value="<?php echo $contact['id'] ?>">
              <button id="btnDeletar" type="subit" class="delete-btn"><i class="fas fa-times delete-icon"></i></button>
            </form>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
  <?php else: ?>
  <p id="empty-list-text">Ainda não há contatos na sua agenta, <a href="<?php echo $BASE_URL; ?>create.php">Clique aqui para adicionar contatos</a>.</p>
  <?php endif; ?>
</div>
<?php
include_once('./templates/footer.php');
?>
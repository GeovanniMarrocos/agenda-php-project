<?php 
require_once('./vendor/autoload.php');
require_once('./helpers/message.php');
?>

<?php 
include_once('./templates/header.php');
?>

<div class="container" id="view-contact-container">
    <h1 id="main-title"><?php echo $contact['name'] ?></h1>
</div>
<?php
include_once('./templates/footer.php');
?>

<?php 
require_once('./vendor/autoload.php');
require_once('./helpers/message.php');
?>

<?php 
include_once('./templates/header.php');
?>

<div class=" container">
    <?php if(isset($printMessage) && $printMessage != ''):?>
   
    <?php endif;?>
</div>

<?php
include_once('./templates/footer.php');
?>


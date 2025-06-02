<?php require_once('./config/process.php')?>

<?php 
$printMessage = $_SESSION['message'];
$_SESSION['message'] = '';
?>

<?php  if(isset($printMessage) && $printMessage != ''): ?>
<p class=" mt-4 text-center" id="message"> <?php echo $printMessage?></p>
<?php endif;?>




    
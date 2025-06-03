<?php //require_once('./config/process.php');

if(isset($_SESSION["message"]))
{
$printMessage;
$printMessage = $_SESSION["message"];
$_SESSION["message"] = "";
}


?>

<?php  if(isset($printMessage) && $printMessage != ''): ?>
<p class=" mt-4 text-center" id="message"> <?php echo $printMessage?></p>
<?php endif;?>




    
<?php 

session_start();

require_once('./config/connection.php');
require_once('./config/url.php');
require_once('./vendor/autoload.php');

$contacts = [];

$query = "SELECT * FROM contacts";

$stmt = $conn->prepare($query);

$stmt->execute();

$contacts = $stmt->fetchAll();

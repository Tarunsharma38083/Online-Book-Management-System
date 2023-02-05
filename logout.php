<?php
require 'includes\common.php';
if(!isset($_SESSION['email_id'])){
    header('location: index.php');
}
session_destroy();
header('location: index.php');
?>
<?php
require 'functions.php'; 

// Start session and check if user is logged in
session_start();
if (!is_logged_in()) {
    header('Location: login.php');
    exit;
}
?>
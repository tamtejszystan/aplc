<?php
require 'functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = $_POST['login'] ?? '';
    $password = $_POST['password'] ?? '';

    if (authorize($login, $password)) {
        increment_visit_counter();
        echo json_encode(['success' => true, 'redirect' => 'a.php']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Invalid login or password.']);
    }
    exit;
}

include 'views/login.html'; 
?>
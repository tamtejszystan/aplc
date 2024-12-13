<?php
session_start();

// Simulated db of users (login => password hash)
$users = [
    'user1' => password_hash('password1', PASSWORD_DEFAULT),
    'user2' => password_hash('password2', PASSWORD_DEFAULT),
    'admin' => password_hash('admin123', PASSWORD_DEFAULT),
];
function authorize($login, $password) {
    global $users;
    if (isset($users[$login]) && password_verify($password, $users[$login])) {
        $_SESSION['logged_in'] = true;
        $_SESSION['username'] = $login;
        return true;
    }
    return false;
}

function is_logged_in() {
    return isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true;
}

function logout() {
    session_unset();
    session_destroy();
    header('Location: login.php');
    exit;
}

//init visit counter
function increment_visit_counter() {
    if (!isset($_SESSION['visit_counter'])) {
        $_SESSION['visit_counter'] = ['a' => 0, 'b' => 0, 'c' => 0];
    }
}

function update_visit($page) {
    if (is_logged_in() && isset($_SESSION['visit_counter'][$page])) {
        $_SESSION['visit_counter'][$page]++;
    }
}

?>
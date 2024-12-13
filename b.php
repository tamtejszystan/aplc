<?php
require 'common.php';

update_visit('b');
$page_visits = $_SESSION['visit_counter']['b']; 
include 'views/page_b.html';

?>
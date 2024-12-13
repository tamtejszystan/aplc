<?php
require 'common.php';

update_visit('c');
$page_visits = $_SESSION['visit_counter']['c']; 
include 'views/page_c.html';

?>
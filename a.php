<?php

require 'common.php';
update_visit('a');
$page_visits = $_SESSION['visit_counter']['a']; 
include 'views/page_a.html';

?>
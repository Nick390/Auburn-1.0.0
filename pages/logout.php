<?php

require_once '../includes/source/session.php';

session_destroy();
header('location: /');

?>
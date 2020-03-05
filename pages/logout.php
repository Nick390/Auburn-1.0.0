<?php

require_once '../includes/source/ession.php';

session_destroy();
header('location: index.html');

?>
<?php

include_once '/includes/source/session.php';

session_destroy();
header('location: index.html');
?>
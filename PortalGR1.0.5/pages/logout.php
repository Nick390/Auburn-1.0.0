<?php

require_once 'PortalGR1.0.5\includes\source\session.php';

session_destroy();
header('location: index.html');

?>
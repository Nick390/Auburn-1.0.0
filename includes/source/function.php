<?php

// Load centralized database configuration
if (file_exists(__DIR__ . '/../../config/database.php')) {
    require_once __DIR__ . '/../../config/database.php';
    // Database constants are already defined in the config file
    
    // Verify database exists if not in installation mode
    if (!defined('INSTALLATION_MODE')) {
        try {
            $test_conn = new mysqli(DB_HOST, DB_USER, DB_PASS);
            if ($test_conn->connect_error) {
                throw new Exception("MySQL server connection failed");
            }
            
            $db_check = $test_conn->query("SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = '" . DB_NAME . "'");
            if ($db_check->num_rows == 0) {
                $test_conn->close();
                header('Location: /install.php');
                exit('Database does not exist. Redirecting to installation...');
            }
            $test_conn->close();
        } catch (Exception $e) {
            header('Location: /install.php');
            exit('Database connection failed. Redirecting to installation...');
        }
    }
} else {
    // Configuration file doesn't exist - redirect to installation
    if (!defined('INSTALLATION_MODE')) {
        header('Location: /install.php');
        exit('Database not configured. Redirecting to installation...');
    }
    
    // Fallback to default values for installation mode
    define('DBINFO', 'mysql:host=localhost:3307;dbname=auburn_cms');
    define('DBUSER','root');
    define('DBPASS','root_password');
}

    function fetchAll($query){
        $con = new PDO(DBINFO, DBUSER, DBPASS);
        $stmt = $con->query($query);
        return $stmt->fetchAll();
    }
    function performQuery($query){
        $con = new PDO(DBINFO, DBUSER, DBPASS);
        $stmt = $con->prepare($query);
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
    }

?>
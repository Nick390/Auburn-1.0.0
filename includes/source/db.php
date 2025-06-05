<?php

/**
 * Configuration for: Database Connection
 *
 * For more information about constants please @see http://php.net/manual/en/function.define.php
 * If you want to know why we use "define" instead of "const" @see http://stackoverflow.com/q/2447791/1114320
 *
 * DB_HOST: database host, usually it's "127.0.0.1" or "localhost", some servers also need port info
 * DB_NAME: name of the database. please note: database and database table are not the same thing
 * DB_USER: user for your database. the user needs to have rights for SELECT, UPDATE, DELETE and INSERT.
 * DB_PASS: the password of the above user
 */

// Check if centralized config exists and load it
if (file_exists(__DIR__ . '/../../config/database.php')) {
    require_once __DIR__ . '/../../config/database.php';
    
    // Verify database is properly configured
    if (!defined('INSTALLATION_MODE')) {
        // Check if database exists by attempting a test connection
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
            if (!defined('INSTALLATION_MODE')) {
                header('Location: /install.php');
                exit('Database connection failed. Redirecting to installation...');
            }
        }
    }
} else {
    // Configuration file doesn't exist - redirect to installation
    if (!defined('INSTALLATION_MODE')) {
        header('Location: /install.php');
        exit('Database not configured. Redirecting to installation...');
    }
    
    // Fallback to default values for installation mode
    define("DB_HOST", "localhost:3307");
    define("DB_NAME", "auburn_cms");
    define("DB_USER", "root");
    define("DB_PASS", "root_password");
}

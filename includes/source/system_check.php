<?php
/**
 * Auburn CMS System Check
 * Include this file at the beginning of any page that requires database access
 * It will automatically redirect to install.php if the system is not properly configured
 */

// Skip checks if we're in installation mode
if (defined('INSTALLATION_MODE')) {
    return;
}

// Check if configuration file exists
if (!file_exists(__DIR__ . '/../../config/database.php')) {
    header('Location: /install.php');
    exit('System not configured. Redirecting to installation...');
}

// Load configuration
require_once __DIR__ . '/../../config/database.php';

// Verify database exists and is accessible
try {
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS);
    
    if ($conn->connect_error) {
        throw new Exception("Cannot connect to MySQL server: " . $conn->connect_error);
    }
    
    // Check if database exists
    $db_check = $conn->query("SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = '" . DB_NAME . "'");
    
    if ($db_check->num_rows == 0) {
        $conn->close();
        header('Location: /install.php');
        exit('Database does not exist. Redirecting to installation...');
    }
    
    // Check if main tables exist (basic system validation)
    $conn->select_db(DB_NAME);
    $tables_check = $conn->query("SHOW TABLES LIKE 'users'");
    
    if ($tables_check->num_rows == 0) {
        $conn->close();
        header('Location: /install.php');
        exit('System tables not found. Redirecting to installation...');
    }
    
    $conn->close();
    
} catch (Exception $e) {
    error_log("System check failed: " . $e->getMessage());
    header('Location: /install.php');
    exit('System check failed. Redirecting to installation...');
}

// System is properly configured
define('SYSTEM_CONFIGURED', true);
?> 
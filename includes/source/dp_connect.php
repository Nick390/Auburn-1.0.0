<?php
// ** MySQL settings - You can get this info from your web host ** //

// Load centralized database configuration
if (file_exists(__DIR__ . '/../../config/database.php')) {
    require_once __DIR__ . '/../../config/database.php';
    
    // Use the centralized config constants
    $DB_HOST = DB_HOST;
    $DB_USER = DB_USER;
    $DB_PASSWORD = DB_PASS;
    $DB_NAME = DB_NAME;
    $DB_CHARSET = DB_CHARSET;
    $isConfigured = true;
} else {
    // No configuration file exists - redirect to installation
    if (!defined('INSTALLATION_MODE')) {
        header('Location: /install.php');
        exit('Database not configured. Redirecting to installation...');
    }
    
    // Fallback values for installation mode
    $DB_HOST = 'localhost:3307';
    $DB_USER = 'root';
    $DB_PASSWORD = 'root_password';
    $DB_NAME = 'auburn_cms';
    $DB_CHARSET = 'utf8mb4';
    $isConfigured = false;
}

// Initialize connection variable
$conn = null;

// Only attempt database connection if we're configured and not in installation mode
if ($isConfigured && !defined('INSTALLATION_MODE')) {
    try {
        // First, try connecting without database to check if server is accessible
        $test_conn = new mysqli($DB_HOST, $DB_USER, $DB_PASSWORD);
        
        if ($test_conn->connect_error) {
            throw new Exception("Cannot connect to MySQL server: " . $test_conn->connect_error);
        }
        
        // Check if database exists
        $db_check = $test_conn->query("SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = '$DB_NAME'");
        
        if ($db_check->num_rows == 0) {
            // Database doesn't exist - redirect to installation
            $test_conn->close();
            header('Location: /install.php');
            exit('Database does not exist. Redirecting to installation...');
        }
        
        $test_conn->close();
        
        // Now connect to the actual database
        $conn = new mysqli($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME);
        
        if ($conn->connect_error) {
            throw new Exception("Connection failed: " . $conn->connect_error);
        }
        
        mysqli_set_charset($conn, $DB_CHARSET);
        
    } catch (Exception $e) {
        // Log the error
        error_log("Database connection error: " . $e->getMessage());
        
        // Redirect to installation if not already there
        if (!defined('INSTALLATION_MODE')) {
            header('Location: /install.php');
            exit('Database connection failed. Redirecting to installation...');
        }
    }
}

// Close database connection function
function close_db(){
    global $conn;
    if ($conn) {
        mysqli_close($conn);
    }
}
?>
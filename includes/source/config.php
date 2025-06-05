<?php
/**
 * Auburn CMS Configuration Manager
 * Centralized configuration management for the Auburn CMS system
 */

class Config {
    private static $loaded = false;
    
    /**
     * Load the database configuration
     * @return bool True if configuration loaded successfully
     */
    public static function loadDatabase() {
        if (self::$loaded) {
            return true;
        }
        
        $configPath = __DIR__ . '/../../config/database.php';
        
        if (file_exists($configPath)) {
            require_once $configPath;
            self::$loaded = true;
            return true;
        }
        
        return false;
    }
    
    /**
     * Check if the database is configured
     * @return bool True if database is configured
     */
    public static function isDatabaseConfigured() {
        self::loadDatabase();
        return defined('DB_CONFIGURED') && DB_CONFIGURED === true;
    }
    
    /**
     * Get database connection parameters
     * @return array Database connection parameters
     */
    public static function getDatabaseConfig() {
        if (!self::loadDatabase()) {
            return [
                'host' => 'localhost:3307',
                'name' => 'auburn_cms',
                'user' => 'root',
                'pass' => 'root_password',
                'charset' => 'utf8mb4',
                'configured' => false
            ];
        }
        
        return [
            'host' => DB_HOST,
            'name' => DB_NAME,
            'user' => DB_USER,
            'pass' => DB_PASS,
            'charset' => DB_CHARSET,
            'configured' => true
        ];
    }
    
    /**
     * Create a PDO connection
     * @return PDO|null PDO connection or null on failure
     */
    public static function getPDOConnection() {
        $config = self::getDatabaseConfig();
        
        try {
            $dsn = "mysql:host={$config['host']};dbname={$config['name']};charset={$config['charset']}";
            return new PDO($dsn, $config['user'], $config['pass'], [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false
            ]);
        } catch (PDOException $e) {
            error_log("Database connection failed: " . $e->getMessage());
            return null;
        }
    }
    
    /**
     * Create a MySQLi connection
     * @return mysqli|null MySQLi connection or null on failure
     */
    public static function getMySQLiConnection() {
        $config = self::getDatabaseConfig();
        
        try {
            $conn = new mysqli($config['host'], $config['user'], $config['pass'], $config['name']);
            $conn->set_charset($config['charset']);
            return $conn;
        } catch (mysqli_sql_exception $e) {
            error_log("Database connection failed: " . $e->getMessage());
            return null;
        }
    }
}
?> 
# Auburn CMS Configuration

This directory contains the configuration files for Auburn CMS.

## Database Configuration

### Installation Process

1. Run `install.php` from the root directory
2. Fill in your database credentials in the installation form
3. The system will automatically create `database.php` with your settings

### Configuration File Structure

- `database.php` - Main database configuration (auto-generated)
- This file contains all database connection settings and is used by all parts of the system

### Manual Configuration (Advanced)

If you need to manually configure the database settings, edit `config/database.php`:

```php
<?php
// Database Configuration Constants
define('DB_HOST', 'your_host:port');
define('DB_NAME', 'your_database_name');
define('DB_USER', 'your_username');
define('DB_PASS', 'your_password');
define('DB_CHARSET', 'utf8mb4');

// PDO Connection String
define('DBINFO', 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME);
define('DBUSER', DB_USER);
define('DBPASS', DB_PASS);

// Connection verification flag
define('DB_CONFIGURED', true);
?>
```

### Using the Configuration

The system automatically loads the configuration in these files:
- `includes/source/db.php`
- `includes/source/dp_connect.php`
- `includes/source/function.php`

You can also use the Config class:

```php
require_once 'includes/source/config.php';

// Check if database is configured
if (Config::isDatabaseConfigured()) {
    // Get a PDO connection
    $pdo = Config::getPDOConnection();
    
    // Get a MySQLi connection
    $mysqli = Config::getMySQLiConnection();
    
    // Get configuration array
    $config = Config::getDatabaseConfig();
}
```

## Security Notes

- Never commit database credentials to version control
- Add `config/database.php` to your `.gitignore` file
- Use environment variables for production deployments
- Ensure proper file permissions on configuration files (644 or 600)

## Troubleshooting

1. **Installation fails**: Check MySQL server is running and credentials are correct
2. **Connection errors**: Verify database configuration in `config/database.php`
3. **Permission errors**: Check file permissions on the `config/` directory
4. **Missing config**: Run `install.php` to generate the configuration file 
# Auburn CMS 1.0.0

Auburn is an open-source Content Management System (CMS) built with PHP and MySQL. It provides a complete solution for managing content, users, and files with a modern web interface.

## Features

- **User Management**: Registration, login, and user profiles
- **Content Management**: Create and manage posts/articles
- **File Management**: Upload and manage multiple files
- **Branch Management**: Manage different branches/locations
- **Notifications System**: Internal notification system
- **Dashboard**: Administrative dashboard with overview
- **Multi-language Support**: Arabic and English interface
- **Responsive Design**: Bootstrap-based responsive UI

## System Requirements

- **Web Server**: Apache 2.4.41 or higher
- **PHP**: 7.4.1 or higher
- **Database**: MySQL 5.7+ or MariaDB 10.4.11+
- **Storage**: 5 GB minimum server space
- **Browser**: Modern web browser with JavaScript enabled

## Libraries Used

- Bootstrap 4.5.2
- jQuery 3.5.1
- CKEditor 4.14.1
- Popper.js 1.16.1
- Font Awesome 5.14.0

## Installation Guide

### Step 1: Download and Extract

1. Clone or download the repository:
   ```bash
   git clone https://github.com/Nick390/Auburn-1.0.0.git
   ```
   Or download the ZIP file and extract it.

2. Place the `Auburn-1.0.0` folder in your web server directory:
   - **XAMPP**: `C:\xampp\htdocs\Auburn-1.0.0`
   - **WAMP**: `C:\wamp64\www\Auburn-1.0.0`
   - **Linux**: `/var/www/html/Auburn-1.0.0`

### Step 2: Start Your Web Server

1. Start Apache and MySQL services
2. Ensure MySQL is running on port 3306 (default)

### Step 3: Database Installation

1. Open your web browser and navigate to:
   ```
   http://localhost/Auburn-1.0.0/install.php
   ```

2. Click the "Install Auburn CMS" button to:
   - Create the `auburn_cms` database
   - Create all required tables
   - Set up the database structure

### Step 4: Configure Database Connection (If Needed)

If you're using different MySQL credentials, update these files:

1. **includes/source/db.php**
2. **includes/source/dp_connect.php**  
3. **includes/source/function.php**

Change the following values:
```php
// Update these if different from defaults
$DB_USER = 'root';           // Your MySQL username
$DB_PASSWORD = '';           // Your MySQL password
$DB_NAME = 'auburn_cms';     // Database name (keep as is)
$DB_HOST = 'localhost';      // Database host (usually localhost)
```

### Step 5: Access the Application

1. Navigate to: `http://localhost/Auburn-1.0.0/`
2. You'll see the login page
3. Click "Register" to create your first user account
4. After registration, log in with your credentials
5. You'll be redirected to the dashboard

## Project Structure

```
Auburn-1.0.0/
├── admin/              # Administrative functions
├── ckeditor/           # Rich text editor
├── config/             # Configuration files
│   └── tables.config.php
├── includes/           # Core includes
│   ├── lang/          # Language files
│   ├── libraries/     # External libraries
│   ├── php/           # PHP includes
│   └── source/        # Database connections
├── licenses/           # License files
├── pages/             # Application pages
├── scripts/           # JavaScript files
├── style/             # CSS stylesheets
├── index.php          # Main entry point
├── install.php        # Database installer
└── README.md          # This file
```

## Database Tables

The system creates the following tables:

- **users**: User accounts and profiles
- **posts**: Blog posts and articles
- **notifications**: System notifications
- **settings**: Website configuration
- **uploadmultiplefiles**: File upload records
- **downloadhistory**: Download tracking
- **add_a_new_branch**: Branch management

## Usage

### Creating Content
1. Log in to the dashboard
2. Navigate to the posts section
3. Create new articles using the CKEditor
4. Manage tags and categories

### User Management
1. Register new users through the registration page
2. Manage user profiles and permissions
3. View user activity and history

### File Management
1. Upload files through the file management interface
2. Track download history
3. Organize files by categories

## Troubleshooting

### Common Issues

1. **Database Connection Error**
   - Check MySQL service is running
   - Verify database credentials in config files
   - Ensure `auburn_cms` database exists

2. **Permission Errors**
   - Check file permissions on web server
   - Ensure PHP has write access to upload directories

3. **Login Issues**
   - Clear browser cache and cookies
   - Check if user account exists in database
   - Verify password hashing is working

4. **Missing Dependencies**
   - Ensure all required PHP extensions are installed
   - Check PHP version compatibility

### Getting Help

1. Check the error logs in your web server
2. Enable PHP error reporting for debugging
3. Verify all file paths are correct
4. Check database table structure matches requirements

## Security Notes

- Change default database passwords
- Use strong passwords for user accounts
- Keep PHP and MySQL updated
- Configure proper file permissions
- Use HTTPS in production environments

## License

Please review the `license.md` file for licensing information.

## Credits

**Developer**: Alwaleed Alwabel  
**Version**: 1.0.0  
**Year**: 2019-2024

## Support

For issues and questions:
1. Check this README first
2. Review the troubleshooting section
3. Check the project's issue tracker
4. Ensure you're using supported PHP/MySQL versions

---

**Note**: This system has been tested primarily on Windows Server with XAMPP. For other environments, you may need to adjust file paths and permissions accordingly.

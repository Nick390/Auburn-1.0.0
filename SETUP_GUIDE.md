# Auburn CMS - Quick Setup Guide

## 🚀 Quick Start (5 Minutes)

### Prerequisites
- XAMPP, WAMP, or similar web server with PHP and MySQL
- Web browser

### Step-by-Step Setup

#### 1. **Start Your Web Server**
- Start Apache and MySQL in XAMPP/WAMP control panel
- Ensure both services are running (green status)

#### 2. **Place Files**
- Extract Auburn-1.0.0 folder to your web directory:
  - XAMPP: `C:\xampp\htdocs\Auburn-1.0.0`
  - WAMP: `C:\wamp64\www\Auburn-1.0.0`

#### 3. **Install Database**
- Open browser and go to: `http://localhost/Auburn-1.0.0/install.php`
- Click "Install Auburn CMS" button
- Wait for success message

#### 4. **Access Application**
- Go to: `http://localhost/Auburn-1.0.0/`
- Click "Register" to create your account
- Login with your new credentials
- You're ready to use Auburn CMS!

## 🔧 Configuration (If Needed)

### If you have a MySQL password:

Edit these 3 files and change the password:

1. **includes/source/db.php** - Line 18:
   ```php
   define("DB_PASS", "your_password_here");
   ```

2. **includes/source/dp_connect.php** - Line 8:
   ```php
   $DB_PASSWORD = 'your_password_here';
   ```

3. **includes/source/function.php** - Line 4:
   ```php
   define('DBPASS','your_password_here');
   ```

## 📁 What Auburn CMS Does

Auburn is a content management system that provides:

- **User Management**: Register users, login system, user profiles
- **Content Creation**: Create and manage blog posts/articles
- **File Management**: Upload and organize files
- **Branch Management**: Manage different business locations/branches
- **Dashboard**: Administrative overview and controls
- **Notifications**: Internal messaging system

## 🌐 Default URLs

- **Main Site**: `http://localhost/Auburn-1.0.0/`
- **Dashboard**: `http://localhost/Auburn-1.0.0/pages/dashboard.php`
- **Registration**: `http://localhost/Auburn-1.0.0/pages/register.php`

## ❗ Troubleshooting

### "Database connection error"
- Check if MySQL is running in XAMPP/WAMP
- Verify database password in config files

### "Page not found"
- Check if Apache is running
- Verify the folder is in the correct web directory
- Check the URL path

### "Permission denied"
- Run XAMPP/WAMP as administrator
- Check folder permissions

## 🎯 First Steps After Installation

1. **Create your account** via registration page
2. **Login** to access the dashboard
3. **Explore the interface** - it's in Arabic/English
4. **Create your first post** in the content section
5. **Upload files** using the file management
6. **Configure settings** as needed

---

**Need help?** Check the full README.md for detailed information.

**Developer**: Alwaleed Alwabel  
**System**: Auburn CMS 1.0.0 
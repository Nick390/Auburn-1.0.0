# Auburn 1.0.0
It is an open source content management system or CMS.
#### About the system
---
##### This system works for:
* For companies, individuals, or small or large global organizations.
* The system is completely free, we recommend that you download the stable version.

##### Multiple libraries were used which is:
* Bootstrap 4.5.2.
* JsDelivr & jQuery 3.5.1.
* CKEditor 4.14.1.
* Popper 1.16.1.
* Fontawesome free 5.14.0 web.

##### Minimum requirements for use is:
1. Server space 5 GB and up.
2. PHP 7.4.1 and up.
3. Apache 2.4.41 and up.
4. MySQL 10.4.11 and up.
5. This system has been tried on Windows Server only.

##### Auburn License:
Please review the license.md file.

##### Other licenses
Please review the license file.

##### The internal structure of the files
Auburn/ <br/>
├───admin<br/>
├───ckeditor<br/>
│   ├───adapters<br/>
│   ├───lang<br/>
│   ├───plugins<br/>
│   │   ├───dialog<br/>
│   │   │   └───styles<br/>
│   │   └───link<br/>
│   │       ├───dialogs<br/>
│   │       └───images<br/>
│   │           └───hidpi<br/>
│   ├───skins<br/>
│   │   └───moono-lisa<br/>
│   │       └───images<br/>
│   │           └───hidpi<br/>
│   └───vendor<br/>
├───config<br/>
├───images<br/>
├───includes<br/>
│   ├───lang<br/>
│   ├───libraries<br/>
│   ├───php<br/>
│   └───source<br/>
├───licenses<br/>
├───pages<br/>
├───plugins<br/>
│   └───notifications<br/>
├───scripts<br/>
└───style<br/>
    ├───css<br/>
    └───webfonts<br/>

---
#### How to use?
---
##### How to use with Windows servers?
* Provide the minimum requirements.
* Create Database: `mydb` or Create your own database and add it in the following files `includes/source/db.php` & `includes/source/dp_connect.php` & `includes/source/function.php`.
* Clone or download.
* Go to File `config/tables.config.php` and execute all databases manually.
* Create an account.
* You are ready to use the system.
``` 
https://github.com/Nick390/Auburn-1.0.0.git

git@github.com:Nick390/Auburn-1.0.0.git
```
* Extract the files to main directory.
* Delete zip file if it's there. 
* Navigate to `includes/source/dp_connect.php` change the username and the password to what did you put in mysql and save the file.
* Now go to the mean page in the login form username is "root" password is "root" and after you login you can change everything.
---
##### How to use with linux servers (Ubuntu 18.04 LTS)?
1. Fresh VM
``` 
sudo apt update && sudo apt upgrade
```
2. Install Swap
```
$ sudo fallocate -l 1G /swapfile
$ sudo dd if=/dev/zero of=/swapfile bs=1024 count=1048576
$ sudo chmod 600 /swapfile
$ sudo mkswap /swapfile
$ sudo swapon /swapfile
$ sudo nano /etc/fstab
/swapfile swap swap defaults 0 0
```
2.1 To make sure that there are no errors put the next command
```
sudo mount -a
```
>If no error appears, this indicates that your last modification does not contain errors

3. Install LAMP Stack (Linux, Apache, MySQL, and PHP)
```
$ sudo apt install tasksel
$ sudo tasksel install lamp-server
$ sudo apt install php-curl php-gd php-mbstring php-xml php-xmlrpc
```
4. Prep Database and PHP
```
$ sudo mysql -u root
> CREATE DATABASE mydb;  
> GRANT ALL ON mydb.* TO 'root' IDENTIFIED BY 'root';
> use mydb;
> CREATE TABLE `users` (
 `id` int(6) NOT NULL AUTO_INCREMENT,
 `username` varchar(50) NOT NULL,
 `password` varchar(100) NOT NULL,
 `email` varchar(225) NOT NULL,
 `to_date` datetime NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4;
> quit  
$ mysql_secure_installation (You must switch to root $ sudo su )
```
5. Install PortalGR1.0.5
Go to the main directory It is usually `cd /var/www/html/` and do this command  
```
$ sudo wget https://download1506.mediafire.com/4y2s01jooqmg/2q96ll6b2ye9pop/PortalGR1.0.5-master.tar.gz (The link may not work some times)
$ sudo tar -xzvf PortalGR1.0.5-master.tar.gz (You must switch to root $ sudo su ) (It may not work some times)
```
6. Troubleshooting
One important addition to setting up PortalGR1.0.5. Permission errors with the PortalGR1.0.5 installation can be fixed with the following command
```
$ chown -R www-data:www-data /var/www/html/* (You have to set a DNS) (Some files may be you me need to deleted because they are useless like Auburn1.0.0-master.tar & Auburn1.0.0-master) (If there is a file index.html you need to delete
so it's not going to stop the process)
```
To delete a directory do `rm directory_name/ -r`.
To delete a PortalGR1.0.5-master.tar do `rm Auburn1.0.0-master.tar`.
To delete a PortalGR1.0.5-master do `rm Auburn1.0.0-master -r`.
Remember, you should always move all files to the main directory.
To move all file to main directory do `mv * directory_path/`.
###### Good Luck

###### The system was built by Alwaleed Alwabel.

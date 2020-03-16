# PortalGR1.0.5
The official and designated file management system for the licenses, This system have been made to organize files,
give access to what have the authority to see this files Regulating the management of government relations in any company or institution.
#### About the system
---
##### This system works for:
* Those within the borders of the Kingdom of Saudi Arabia.
* The system was built with basic standards and custom software codes.

##### CDN Was used
* A Bootstrap library was also used To increase the consistency of formatting elements in the system.
* CDN jsDelivr & jQuery It was used for some items on the site.

##### The applicable version
The current version of the system currently in use is: 1.0.3.4.By the government relations department in the southern region of Herfy Food Services Company.

##### Minimum requirements for use is:
1. Server space 50 MB and up.
2. PHP 7.4.1 and up.
3. Apache 2.4.41 and up.
4. MySQL 10.4.11 and up.
5. This system has been tried on Windows Server only.
---
##### How to use with Windows servers?
* Provide the minimum requirements.
* Create Database: `mydb`.
* Clone or download.
``` 
https://github.com/Nick390/PortalGR1.0.5.git

git@github.com:Nick390/PortalGR1.0.5.git
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
$ sudo mkswap /swapfil
$ sudo swapon /swapfile
$ sudo nano /etc/fstab
/swapfile swap swap defaults 0 0
```
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
$ chown -R www-data:www-data /var/www/html/* (You have to set a DNS) (Some files may be you me need to deleted because they are useless like PortalGR1.0.5-master.tar & PortalGR1.0.5-master) (If there is a file index.html you need to delete
so it's not going to stop the process)
```
To delete a directory do `rm directory_name/ -r`.
To delete a PortalGR1.0.5-master.tar do `rm PortalGR1.0.5-master.tar`.
To delete a PortalGR1.0.5-master do `rm PortalGR1.0.5-master -r`.
Remember, you should always move all files to the main directory.
To move all file to main directory do `mv * directory_path/`.
###### Good Luck

###### The system was built by Alwaleed Alwabel.

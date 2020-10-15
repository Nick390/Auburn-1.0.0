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
├───admin <br/>
│   └───files <br/>
├───ckeditor <br/>
│   ├───adapters <br/>
│   ├───lang <br/>
│   ├───plugins <br/>
│   │   ├───dialog <br/>
│   │   │   └───styles <br/>
│   │   └───link <br/>
│   │       ├───dialogs <br/>
│   │       └───images <br/>
│   │           └───hidpi <br/>
│   ├───skins <br/>
│   │   └───moono-lisa <br/>
│   │       └───images <br/>
│   │           └───hidpi <br/>
│   └───vendor <br/>
├───config <br/>
├───includes <br/>
│   ├───lang <br/>
│   ├───librarie <br/>
│   ├───php <br/>
│   ├───plugins <br/>
│   └───source <br/>
├───licenses <br/>
├───pages <br/>
├───scripts <br/>
└───style <br/>
    ├───css <br/>
    └───webfonts <br/>

---
#### How to use?
---
##### How to use with XAMPP servers?
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

###### Good Luck

###### The system was built by Alwaleed Alwabel.

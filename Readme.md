# after install ubunto

> install mysql server

1. first we need to transfer my user laila to root by writing `sudo su` in terminal

2. `apt-get install mysql-server-5.5` or not write number of version

3. to insure that mysql has been installed `mysql -u root -p` , finally mysql server live

4. to exit from mysql server `exit`

> install apache web server

1. `apt-get install apache2`

2. to insure that apache is installed, open firfox. write localhost in the browser tab :)

> install php as module of apache:

1. `apt-get install libapache2-mod-php5 php5`

> notes:

1. we want to enable module in apache rewrite `a2enmod rewrite`

> to restart apache:

1. `service apache2 restart`

> where i can put my files: or to know file of apache configuration:

1. `cd /etc/apache2/`

2. `gedit apache2.conf` and that will open apache configuration file

3. to know the main directory search `directory`, `/var/www/` :)

4. files -> computer -> var -> www -> `here i can put my folders :)`

> to create folder, i need to give credentials in terminal

1. `chmod -R 775 /var/www`

2. `exit`

3. `cd /var/www`

4. `gedit info.php` write inside `<?php phpinfo();`

5. `ls` , now i see beside html folder info.php file :)

6. `cd /html`

7. `gedit info.php`

8. now, i go to browser and write `localhost/info.php`

> install some extensions:

`apt-get install php5-mysql php5-curl php5-gd php5-intl php-pear php5-imagick php5-imap php5-mcrypt php5-memcache php5-ming php5-ps php5-pspell php5-recode php5-snmp php5-sqlite php5-tidy php5-xmlrpc php5-xsl php5-xcache`

> to edit the folder of directory of where i locate my folders:

1. `cd /etc/apache2/`

2. `cd sites-enabled/`

3. `ls` and 000-default.conf that file responsible on virtual hosts :). that mean i can invent a virtual domain `ali.com` and work on it :)

4. `gedit 000-default.conf`

> ازاي اخلي الجهاز يقرا الدومين الوهمي بتاعي من جهازي مش يدور علي النت:

1. `gedit /etc/hosts`

> install vs code:

1. `sudo snap install --classic code`

_____________________________________________________________________________________________________________________________


# web servers: apache, nginx

______________________________________________________________________________________________________________________________


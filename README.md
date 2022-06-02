# petadoptionphp
Simple LAMP stack pet adoption website
This application is designed to be part of various Amazon Lightsail workshops. This respository includes the PHP front end which needs to be paired with a MySQL database.

The parameters for the database connectivity and image hosting (hostname, username, password, imageURL) are stored in a file called config.php. This file must be located in the configs directory one level above your HTML document root directory. Additionally make sure the permissions on the configs directory are set correctly (e.g. set the owner to be the account that your web server runs under).

If you are using a Lightsail LAMP instance, the following user data instructions will take care of everything you need for the initial install of the app.

cd /opt/bitnami/apache2/htdocs

rm -rf *

sudo git clone https://github.com/morganwillisaws/petadoptionphp.git .

sudo mkdir /opt/bitnami/apache2/configs && \
sudo chown bitnami:bitnami /opt/bitnami/apache2/configs

sudo mv /opt/bitnami/apache2/htdocs/config.php /opt/bitnami/apache2/configs/config.php

cat /home/bitnami/htdocs/data/init.sql | /opt/bitnami/mariadb/bin/mysql -u root -p$(cat /home/bitnami/bitnami_application_password)

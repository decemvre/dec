# dec mvc

Installation guide

This is a rudimentary MVC web application built entirely by myself for the purpose of learning how to and developing my understanding of web app development. I don't plan on releasing any documentation so please don't use it in any of your projects. Feel free to browse around to review my code.

1. Clone this repo from https://github.com/decemvre/mvc.git

2. cd into app root folder (where composer.json is)

3. Have composer installed globally. https://getcomposer.org/

4. Be happy, composer is amazing!

5. run: composer update

6. Create a mysql database and user; grant all and edit the config file in app/dec/config/db.php

7. Normally this is where you'd be running something like: app migrate (And I plan to add a shell script to do that in the very near future) but since I didn't install any migration tool you'll have to get the sql from the db folder and import it into your database
mysql> use DATABASE_NAME;
mysql> source path/to/file.sql;

8. The application webroot is in web/ There you'll find the index.php which is the bootstrap into the application and that's where you need to point apache2 to

9. Please have at least php version 5.5 or greater

10. I will happily answer any questions at decemvre[at]gmail[dot]com
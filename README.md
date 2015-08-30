# dec

Installation guide

1. Clone this repo from https://github.com/decemvre/dec.git

2. cd into app root folder (where composer.json is)

3. Have composer installed globally. https://getcomposer.org/

4. Be happy, composer is amazing!

5. run: composer update

6. Create a mysql database and user; grant all

7. Normally this is where you'd be running something like: app migrate but since I didn't install any migration tool you'll have to get the sql from the db folder and import it into your database
mysql> use DATABASE_NAME;
mysql> source path/to/file.sql;

8. The application webroot is in web/    There you'll find the index.php which is the bootstrap into the application and that's where you need to point apache2 to

9. Please have at least php version 5.5 or greater

10. I will happily answer any questions at decemvre@gmail.com
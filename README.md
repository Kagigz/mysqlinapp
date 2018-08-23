# How to use MySQL in App for Azure App Service

You're hosting your website with Azure App Service and you're wondering how to add a MySQL database to your website?

It's simple:
* Go to Settings > MySQL in App and activate the feature by clicking the _On_ Button
* When it's done, click on _Manage_ and you should have phpMyAdmin opening (you should be automatically connected, if a username and password are asked then try opening your web app and opening phpMyAdmin again)
* Create the databases & tables you want
* Use the code in _demoPDO.php_ (if you want to use PDO) or _demoMysqli.php_ (if you want to use Mysqli) to connect to your database and interact with your tables

## Run the example

* Import the table _test.sql_ in the _localdb_ database (from phpMyAdmin: Import > Choose a file)
* Upload the files _index.php_ and _connectExample.php_ to the root of your web app

You can then try adding & deleting items directly from phpMyAdmin and you'll be able to see from your wep app the list of items updated.

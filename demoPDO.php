<?php

    $connectstr_dbhost = '';
    $connectstr_dbusername = '';
    $connectstr_dbpassword = '';

    foreach ($_SERVER as $key => $value) {

        if (strpos($key, "MYSQLCONNSTR_localdb") !== 0) {
            continue;
        }

        $connectstr_dbhost = preg_replace("/^.*Data Source=(.+?);.*$/", "\\1", $value);
        $connectstr_dbusername = preg_replace("/^.*User Id=(.+?);.*$/", "\\1", $value);
        $connectstr_dbpassword = preg_replace("/^.*Password=(.+?)$/", "\\1", $value);
    }

    // TODO: Replace NAMEOFYOURDB with the name of your database (in the left menu in phpMyAdmin)  
    $bdd = new PDO('mysql:host='.$connectstr_dbhost.';dbname=NAMEOFYOURDB;charset=utf8',$connectstr_dbusername,$connectstr_dbpassword);   

    // TODO: Replace NAMEOFYOURTABLE with the name of the table you want to interact with
    $req = $bdd->query("SELECT * FROM NAMEOFYOURTABLE ORDER BY id ASC");

    while($result = $req->fetch()){

?>

    <!-- Example: all items in the table (that have an ID and a title) are displayed -->
    <div id="item<?php echo $row['id'];?>"><?php echo $row['title']; ?></div>

<?php

    }
    $req->closeCursor();

?>
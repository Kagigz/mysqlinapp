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
    $link = mysqli_connect($connectstr_dbhost, $connectstr_dbusername, $connectstr_dbpassword,"NAMEOFYOURDB");

    // TODO: Replace NAMEOFYOURTABLE with the name of the table you want to interact with
    $sql = "SELECT * FROM NAMEOFYOURTABLE ORDER BY id ASC";
    $result=mysqli_query($link,$sql);

    while($row = mysqli_fetch_array($result)) {

?>

    <!-- Example: all items in the table (that have an ID and a title) are displayed -->
    <div id="item<?php echo $row['id'];?>"><?php echo $row['title']; ?></div>
                                                    
<?php

    }
    mysqli_free_result($result);
    mysqli_close($link);

?>
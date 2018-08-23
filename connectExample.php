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

    $link = mysqli_connect($connectstr_dbhost, $connectstr_dbusername, $connectstr_dbpassword,"localdb");

    $sql = "SELECT * FROM test ORDER BY id ASC";
    $result=mysqli_query($link,$sql);

    while($row = mysqli_fetch_array($result)) {

?>

    <!-- Example: all items in the table (that have an ID and a title) are displayed -->
    <div class="item col-md-4">
        <div class="innerItem">
            <h2> ID: <?php echo $row['id'];?> </h2>
            <p> <?php echo $row['title']; ?> </p> 
        </div>
    </div>
                                                    
<?php

    }
    mysqli_free_result($result);
    mysqli_close($link);

?>
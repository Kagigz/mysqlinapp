<!DOCTYPE html>
<html>

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <title>MySQL in App example</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        
        <style>

            #example{
                margin-top:60px;
            }

            .item{
                padding:20px;
            }

            .innerItem{
                background-color:black;
                color:white;
                padding:20px;
            }

        </style>

    </head>

    <body align="center">

        <div class="container">

            <h1> MySQL in App example </h1>

            <div id="example" class="row">

                <?php include "connectExample.php" ?>

            </div>

        </div>

    </body>

</html>

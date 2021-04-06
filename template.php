<html>
    <head>
        <title>Read</title>
    </head>
    <body>
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "yourdatabasename";


            $connection  = new mysqli($servername, $username, $password, $database);
            if ($connection->connect_error){ //Connnection Test
                die("Connection Failed: " .$connection->connect_error); // IF connection Fails
            }
            else{ //Your code below




            }
        ?>
    </body>
</html>
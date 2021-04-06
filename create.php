<html>
    <head>
       <title>Create</title>
     </head>
    <body>
           <?php
           $servername ="localhost";
           $username ="root";
           $password ="";
           $dbname ="info";

           $connection = new mysqli($servername, $username, $password, $dbname);

           $sql = "INSERT INTO info (name, Book Name, url) VALUES ('$name', '$bookName', '$url');

           if ($connection->query($sql) === TRUE){
               echo 
            
               } else{

               }




           ?>
    </body>
</html>
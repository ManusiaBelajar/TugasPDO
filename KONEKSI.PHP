<?php 
        $dbServer = 'localhost';
        $dbUser = 'root';
        $dbPass = '';
        $db = 'classicmodels';

        
        $con = mysqli_connect($dbServer, $dbUser, $dbPass, $db);
        try {
                //koneksi database menggunakan PDO
                $con = new PDO("mysql:host=$dbServer;dbname=$db", $dbUser, $dbPass);
                // setting ERROR 
                $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                }
          
             catch(PDOException $err)
                {
                   echo "Failed Connect to Database Server : " . $err->getMessage();
                }

?>
<?php 

    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $db = 'latihan';
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

    if(! $conn ){
        die('Could not connect: ' . mysql_error());
    }
    echo 'connect succesfully';
    //create database
    /* $sql = "CREATE DATABASE lat_php";
    if($conn->query($sql) === TRUE){
        echo "<p>Database has been created</p>";
    }else{
        echo "<p>Error create database</p>" . $conn->error;
    } */

    //mysqli_close($conn);

?>
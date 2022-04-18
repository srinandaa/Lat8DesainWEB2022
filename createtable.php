<?php

    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass);

    if(! $conn ){
        die('Could not connect: ' . mysql_error());
    }

    echo 'connect succesfully';

    $db_selected = mysqli_select_db($conn, 'latihan');


    if(! $db_selected ){
        die('Can\'t use latihan : ' . mysql_error());
    }else{
        $sql = "CREATE TABLE `p_order` (
            `id` int(11) NOT NULL,
            `nama` varchar(255) NOT NULL,
            `email` varchar(255) NOT NULL,
            `alamat` varchar(255) NOT NULL,
            `ukuran` varchar(5) NOT NULL,
            `warna` varchar(255) NOT NULL,
            `kode_pos` int(20) NOT NULL
          )ENGINE=InnoDB DEFAULT CHARSET=utf8mb4; "// Buat query create table disini

        $create = mysqli_query($conn, $sql);
        
        if($create){
            echo "<p>Table has been created</p>";
        }else{
            die('invalid query : ' . mysql_error());
        }
    }
    
    mysqli_close($conn);


?>
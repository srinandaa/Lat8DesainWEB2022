<?php 
    include('connect.php');
    if(isset($_POST['add'])){
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $alamat = $_POST['alamat'];
        $ukuran = $_POST['size'];
        $warna = $_POST['color'];
        $kode_pos = $_POST['zip'];

        $sql = "INSERT INTO p_order(nama, email, alamat, ukuran, warna, kode_pos) 
        VALUES ('$nama', '$email', '$alamat', '$ukuran', '$warna', '$kode_pos')";
       // buat query insert data disini
        
        $result = mysqli_query($conn, $sql);
        if($result){
            echo "<p>Input Succesfully</p>";
            echo "<p><a href='home.php'>Kembali ke daftar</a></p>";
        }else{
            //die('invalid query : ' . mysql_error($conn));
        }

        mysqli_close($conn);
    }
?>
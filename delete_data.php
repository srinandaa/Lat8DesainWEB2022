<?php 
    include('connect.php');

    if(isset($_GET['id'])){
        $id_hapus = $_GET['id'];

		// Query mysql delete data ke tb_to_do berdasar id nya.
		$sql = "DELETE FROM p_order WHERE id = '$id_hapus'";

        
            $query_user = mysqli_query($conn,$sql);

            if (mysqli_affected_rows($conn)>0) {
                //alihkan ke halaman home.php
                header('Location: home.php');
            }else{
                //tampilkan pesan gagal
                // die("Gagal menyimpanan perubahan...");
                die('invalid query: ' . mysqli_error($conn));
            }
    }else{
        die("Akses dilarang..");
    }
   
    echo 'delete data $id succesfully';

?>
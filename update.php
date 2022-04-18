<?php 
    include('connect.php');
    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $alamat = $_POST['alamat'];
        $size = $_POST['size'];
        $warna = $_POST['color'];
        $kode_pos = $_POST['zip'];

        $sql = "UPDATE p_order SET nama='$nama',email='$email',alamat='$alamat',ukuran='$ukuran',
        warna='$warna',kode_pos='$kode_pos' WHERE id = $id"; // buat query update data disini
        
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
?>
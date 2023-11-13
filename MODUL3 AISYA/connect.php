<!-- File ini berisi koneksi dengan database yang telah di import ke phpMyAdmin kalian -->


<?php
// Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
    
    $connect = mysqli_connect("localhost:3307", "root", "", "modul3_wad");

// 
  
// Buatlah perkondisian jika tidak bisa terkoneksi ke database maka akan mengeluarkan errornya
    
    if ($connect) {
        echo "<meta http-equiv='refresh' content='1 url=form_create_mobil.php'>";
    } else {
        echo "<script>alert('Database gagal melalukan koneksi!')</script>";
        echo "<meta http-equiv='refresh' content='1 url=form_create_mobil.php'>";
    }
    
// 
?>
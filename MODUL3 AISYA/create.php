<!-- Pada file ini kalian membuat coding untuk logika create / menambahkan mobil pada showroom -->

<?php
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa
   
    include('connect.php');

// 

// (2) Buatlah perkondisian untuk memeriksa apakah permintaan saat ini menggunakan metode POST
 
    if (isset($_POST['create'])) {

// 

// (3) Jika sudah coba deh kalian ambil data dari form (CLUE : pakai POST)

    $nama_mobil = $_POST['nama_mobil'];

    $brand_mobil = $_POST['brand_mobil'];

    $warna_mobil = $_POST['warna_mobil'];

    $tipe_mobil = $_POST['tipe_mobil'];

    $harga_mobil = $_POST['harga_mobil'];

    // (4) Kalau sudah, kita lanjut Query / Menambahkan data pada SQL (Disini ada perintah untuk SQL), Masukkan ke tabel showroom_mobil (include setiap nama column)

        $query = mysqli_query($connect, "INSERT INTO modul3_wad(id, nama_mobil, brand_mobil, warna_mobil, tipe_mobil, harga_mobil) VALUES('$id', '$nama_mobil', '$brand_mobil', '$warna_mobil', '$tipe_mobil', '$harga_mobil')");

    // (5) Buatkan kondisi jika eksekusi query berhasil

        if($query) {
            echo "<script>alert('Data berhasil ditambahkan!')</script>";
            echo "<meta http-equiv='refresh' content='1 url=form_create_mobil.php'>";
        } 


    // (6) Jika terdapat kesalahan, buatkan eksekusi query gagalnya 

        else {
            echo "<script>alert('Data gagal ditambahkan')</script>";
            echo "<meta http-equiv='refresh' content='1 url=form_create-mobil.php'>";
         }

// (7) Tutup koneksi ke database setelah selesai menggunakan database
    }
?>
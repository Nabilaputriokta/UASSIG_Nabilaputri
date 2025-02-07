<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <!-- bisa di rubah sesuai anda -->
    <title>Galeri Wisata Kota Temanggung</title>
    <style>
        .gallery {
            text-align: center;
        }
        .gallery img {
            margin: 10px; /* Memberikan jarak antar gambar */
            width: 200px; /* Ukuran gambar */
            height: 150px; /* Ukuran gambar */
        }
        .deskripsi {
            text-align: center; /* Mengatur teks agar rata tengah */
            margin-bottom: 20px; /* Memberikan jarak antara deskripsi dan galeri */
        }
    </style>
</head>
<body>
       <!-- bisa di rubah sesuai anda -->
    <h1 style="text-align: center;">Galeri Wisata Kota Temanggung</h1>
    <div class="gallery">
        <?php
        $folder = 'img'; // Nama folder
        $gambar = scandir($folder); // Membaca isi folder

        foreach($gambar as $img) {
            if($img !== "." && $img !== "..") { // Menghindari . dan ..
                echo '<img src="'.$folder.'/'.$img.'" alt="Gambar Wisata">';
            }
        }
        ?>
    </div>
</body>
</html>
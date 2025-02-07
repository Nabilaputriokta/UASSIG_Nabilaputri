<?php
include 'admin/koneksi.php'; // Membuat koneksi

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOKASI WISATA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <style>
        body {
            background-size: cover;
            background-position: center;
        }
        
        /* Fullscreen style for the map */
        #map {
            height: 100vh;
            width: 100%;
        }

        .modal-fullscreen .modal-dialog {
            max-width: 100%;
            margin: 0;
        }

        .modal-fullscreen .modal-content {
            height: 100vh;
            border: none;
        }
    </style>
</head>
<body>
<section class="py-5">
    <div class="container">
        <h2 class="text-center text-primary">Daftar Lokasi Yang Dipilih</h2>
        <p class="text-center">Klik pada lokasi untuk melihat peta dengan detail lokasi.</p>
  
        <div class="list-group">
            <?php
            $sql = "SELECT * FROM wisata";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<a href="#" class="list-group-item list-group-item-action" onclick="showMap(' . $row['latitude'] . ', ' . $row['longitude'] . ', \'' . addslashes($row['nama_tempat']) . '\')">'
                        . htmlspecialchars($row['nama_tempat']) . ' - <small>' . htmlspecialchars($row['deskripsi']) . '</small></a>';
                }
            } else {
                echo "Tidak ada lokasi wisata ditemukan.";
            }

            // Menutup koneksi
            $conn->close();
            ?>
        </div>
    </div>
</section>

<!-- Modal untuk peta -->
<div class="modal modal-fullscreen fade" id="mapModal" tabindex="-1" aria-labelledby="mapModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mapModalLabel">Peta Lokasi Wisata</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <div id="map"></div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<script>
    let map;
    function showMap(lat, lng, title) {
        const modal = new bootstrap.Modal(document.getElementById('mapModal'));
        modal.show();

        if (!map) {
            map = L.map('map').setView([lat, lng], 13);
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '© OpenStreetMap contributors'
            }).addTo(map);
        } else {
            map.setView([lat, lng], 13);
        }

        L.marker([lat, lng]).addTo(map).bindPopup(title).openPopup();

        setTimeout(() => {
            map.invalidateSize();
        }, 300);
    }
</script>
</body>
</html>

<section id="home" class="slider-section">
    <div id="beachCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <!-- bisa di sesuaikan sesuai nama dan jenis gambar yang di simpan difolder wpl agar gambar muncul dan tidak eror -->
                <img src="wpl/tmg.jpeg" class="d-block w-100" alt="Image 1">
                <div class="carousel-caption d-none d-md-block">
                 </div>
            </div>
            <div class="carousel-item">
            <!-- bisa di sesuaikan sesuai nama dan jenis gambar yang di simpan difolder wpl agar gambar muncul dan tidak eror -->    
            <img src="wpl/wpl2.jpg" class="d-block w-100" alt="Image 2">
                <div class="carousel-caption d-none d-md-block">
                    </div>
            </div>
            <div class="carousel-item">
                <!-- bisa di sesuaikan sesuai nama dan jenis gambar yang di simpan difolder wpl agar gambar muncul dan tidak eror -->
                <img src="wpl/wpl3.jpg" class="d-block w-100" alt="Image 3">
                <div class="carousel-caption d-none d-md-block">
              </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#beachCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#beachCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>

<!-- Activities Section -->
<section id="activities" class="activity-section">
    <div class="container text-center">
        <h2 class="activity-title">Aktivitas Menarik</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card activity-card">
                    <div class="card-body">
                        <h5 class="card-title">Alun-Alun Temanggung</h5>
                        <p class="card-text">cerita tentang temanggung.</p>
                        <a href="index.php?page=uas" class="btn btn-primary">Selengkapnya...</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card activity-card">
                    <div class="card-body">
                        <h5 class="card-title">Daftar Lokasi Yang Dipilih </h5>
                        <p class="card-text">Berikut ada beberapa lokasi yang saya pilih.</p>
                        <a href="index.php?page=lokasi" class="btn btn-primary">Selengkapnya...</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Location Map Section -->
<section id="location" class="location-section">
    <div class="container text-center">
        <h2 class="location-title">Lokasi Kota Temanggung</h2>
        <p>Kunjungi lokasi yang dipilih.</p>
        <div class="map-container" style="width: 100%; height: 400px;">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d100000!2d110.17539524827272!3d-7.316014054392427!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a829cbf5e667f%3A0x41b50036db533d70!2sTemanggung%2C%20Kec.%20Temanggung%2C%20Kabupaten%20Temanggung%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1738258887177!5m2!1sid!2sid" 
                width="100%" 
                height="100%" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy">
            </iframe>
        </div>
    </div>
</section>


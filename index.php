<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Zandpro</title>
  <link rel="icon" href="/Zanpro/img/zanpro logo.jpg">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Font Awesome untuk ikon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  
  <!-- CSS kustom Anda -->
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  
<?php include 'navbar.php'; ?>

 <!-- home section start -->
 <!-- Home Section -->
<section id="home" class="hero-section">
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-lg-6">
        <h1 class="display-4 text-black fw-bold mb-4">Temukan Rumah Impian Anda Bersama Zandpro</h1>
        <p class="lead text-black mb-4">Kami menyediakan layanan real estate terbaik untuk membantu Anda menemukan properti yang sempurna sesuai kebutuhan dan anggaran Anda.</p>
        <div class="d-flex gap-3">
          <a href="properties.php" class="btn btn-outline-dark btn-lg">Cari Properti</a>
          <a href="contact.php" class="btn btn-outline-dark btn-lg">Hubungi Kami</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Property Search Form -->
<section id="property-search" class="py-5 bg-custom-property-search">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <form class="property-search-form bg-white p-4 rounded shadow mt-0">
          <div class="row g-3">
            <div class="col-md-3">
              <select class="form-select" aria-label="Tipe Properti">
                <option selected>Tipe Properti</option>
                <option value="1">Rumah</option>
                <option value="2">Apartemen</option>
                <option value="3">Tanah</option>
              </select>
            </div>
            <div class="col-md-3">
              <select class="form-select" aria-label="Lokasi">
                <option selected>Lokasi</option>
                <option value="1">Jakarta</option>
                <option value="2">Surabaya</option>
                <option value="3">Bandung</option>
              </select>
            </div>
            <div class="col-md-3">
              <select class="form-select" aria-label="Rentang Harga">
                <option selected>Rentang Harga</option>
                <option value="1">Rp 500jt - 1M</option>
                <option value="2">Rp 1M - 2M</option>
                <option value="3">Rp 2M+</option>
              </select>
            </div>
            <div class="col-md-3">
              <button type="submit" class="btn btn-primary w-100">Cari Sekarang</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
 <!-- home section end -->
 
 
 <!-- About Us Section -->
<section id="about" class="py-5 bg-white">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 mb-4 mb-lg-0">
        <img src="/Zanpro/img/zanpro y.jpg" alt="Zanpro Real Estate Team" class="img-fluid rounded shadow">
      </div>
      <div class="col-lg-6">
        <h2 class="mb-4">About Zandpro</h2>
        <p class="lead mb-4">Zandpro adalah perusahaan real estate terkemuka yang berdedikasi untuk membantu klien menemukan rumah impian mereka.</p>
        <p>Dengan pengalaman lebih dari 15 tahun di industri properti, kami menawarkan layanan komprehensif dan solusi inovatif untuk semua kebutuhan real estate Anda.</p>
        <ul class="list-unstyled mb-4">
          <li><i class="fas fa-check text-black me-2"></i> Pilihan properti premium</li>
          <li><i class="fas fa-check text-black me-2"></i> Tim agen berpengalaman</li>
          <li><i class="fas fa-check text-black me-2"></i> Layanan konsultasi profesional</li>
          <li><i class="fas fa-check text-black me-2"></i> Proses transaksi yang transparan</li>
        </ul>
        <p>Kepuasan klien adalah prioritas utama kami. Kami berkomitmen untuk memberikan pelayanan terbaik dalam setiap langkah perjalanan properti Anda.</p>
        <a href="#" class="btn btn-primary">Pelajari Lebih Lanjut</a>
      </div>
    </div>
  </div>
</section>
 
<!-- Services Section -->
<section id="services" class="py-5">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="fw-bold">Layanan Kami</h2>
      <p class="lead text-muted">Solusi komprehensif untuk semua kebutuhan real estate Anda</p>
    </div>
    <div class="row g-4">
      <div class="col-md-6 col-lg-3">
        <div class="card h-100 border-0 shadow-sm">
          <div class="card-body text-center">
            <i class="fas fa-home fa-3x text-black mb-3"></i>
            <h5 class="card-title">Penjualan Properti</h5>
            <p class="card-text">Kami membantu Anda menjual properti dengan harga terbaik dan proses yang cepat.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="card h-100 border-0 shadow-sm">
          <div class="card-body text-center">
            <i class="fas fa-search fa-3x text-black mb-3"></i>
            <h5 class="card-title">Pencarian Properti</h5>
            <p class="card-text">Temukan rumah impian Anda dengan bantuan tim ahli kami dan database properti yang luas.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="card h-100 border-0 shadow-sm">
          <div class="card-body text-center">
            <i class="fas fa-chart-line fa-3x text-black mb-3"></i>
            <h5 class="card-title">Investasi Properti</h5>
            <p class="card-text">Dapatkan saran ahli untuk investasi properti yang menguntungkan dan berkelanjutan.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="card h-100 border-0 shadow-sm">
          <div class="card-body text-center">
            <i class="fas fa-handshake fa-3x text-black mb-3"></i>
            <h5 class="card-title">Konsultasi Real Estate</h5>
            <p class="card-text">Konsultasikan semua kebutuhan real estate Anda dengan tim profesional kami.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="text-center mt-5">
      <a href="#" class="btn btn-primary btn-lg">Lihat Semua Layanan</a>
    </div>
  </div>
</section>

<!-- News Section -->
<section id="news" class="zanpro-news py-5 bg-custom-news">
  <div class="container mb-5">
    <div class="text-center mb-5">
      <h2 class="fw-bold">Berita Terbaru</h2>
      <p class="lead text-muted">Ikuti perkembangan terkini di dunia properti</p>
    </div>
    
    <?php 
    include 'data/berita.php';
    $itemsPerSlide = 3;
    $totalSlides = ceil(count($berita) / $itemsPerSlide);
    ?>

    <!-- Carousel dengan slide horizontal -->
    <div id="newsCarousel" class="carousel slide" data-bs-ride="carousel">
      <!-- Indikator Carousel -->
      <div class="carousel-indicators">
        <?php for($i = 0; $i < $totalSlides; $i++): ?>
          <button type="button" data-bs-target="#newsCarousel" data-bs-slide-to="<?= $i ?>" 
            <?= $i === 0 ? 'class="active" aria-current="true"' : '' ?> 
            aria-label="Slide <?= $i + 1 ?>"></button>
        <?php endfor; ?>
      </div>

      <div class="carousel-inner">
        <?php for($i = 0; $i < $totalSlides; $i++): ?>
          <div class="carousel-item <?= $i === 0 ? 'active' : '' ?>">
            <div class="row">
              <?php
              $start = $i * $itemsPerSlide;
              $end = min(($i + 1) * $itemsPerSlide, count($berita));
              for($j = $start; $j < $end; $j++):
                $item = $berita[$j];
              ?>
                <div class="col-md-4">
                  <div class="card-news h-100 border-0 shadow-sm position-relative">
                    <div class="img-wrapper">
                      <img src="<?= $item['thumbnail'] ?? $item['gambar'][0] ?>" class="card-img-top" alt="<?= $item['judul'] ?>">
                    </div>
                    <div class="card-body">
                      <h5 class="card-title"><?= $item['judul'] ?></h5>
                      <div class="card-text">
                        <p>
                          <?= substr($item['deskripsi'], 0, 100) ?>
                          <?php if(strlen($item['deskripsi']) > 100): ?>
                              <span class="text-fade">...</span>
                          <?php endif; ?>
                        </p>
                      </div>
                      <button type="button" class="btn btn-outline-primary" 
                        data-bs-toggle="modal" data-bs-target="#modalBerita<?= $item['id'] ?>">
                        Baca Selengkapnya
                      </button>
                    </div>
                    <div class="card-footer border-0 mt-3 mb-3">
                      <small class="text-muted">Dipublikasikan pada <?= $item['tanggal'] ?></small>
                    </div>
                  </div>
                </div>
              <?php endfor; ?>
            </div>
          </div>
        <?php endfor; ?>
      </div>

      <!-- Tombol kontrol carousel -->
      <button class="carousel-control-prev" type="button" data-bs-target="#newsCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#newsCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <!-- Modals -->
    <?php foreach($berita as $item): ?>
      <div class="modal fade" id="modalBerita<?= $item['id'] ?>" tabindex="-1" 
        aria-labelledby="modalBerita<?= $item['id'] ?>Label" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalBerita<?= $item['id'] ?>Label"><?= $item['judul'] ?></h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <?php if($item['type'] === 'video'): ?>
                  <div class="video-container mb-4">
                      <video id="propertyVideo<?= $item['id'] ?>" class="w-100" controls poster="<?= $item['thumbnail'] ?>">
                          <source src="<?= $item['video'] ?>" type="video/mp4">
                          Your browser does not support the video tag.
                      </video>
                  </div>
              <?php else: ?>
                  <?php if(count($item['gambar']) > 1): ?>
                      <!-- Carousel untuk multiple gambar -->
                      <div id="carouselModal<?= $item['id'] ?>" class="carousel slide mb-4" data-bs-ride="carousel">
                          <!-- Indikator untuk gambar -->
                          <div class="carousel-indicators">
                              <?php foreach($item['gambar'] as $index => $gambar): ?>
                                  <button type="button" 
                                      data-bs-target="#carouselModal<?= $item['id'] ?>" 
                                      data-bs-slide-to="<?= $index ?>" 
                                      <?= $index === 0 ? 'class="active" aria-current="true"' : '' ?>
                                      aria-label="Slide <?= $index + 1 ?>">
                                  </button>
                              <?php endforeach; ?>
                          </div>
                          
                          <!-- Gambar-gambar -->
                          <div class="carousel-inner">
                              <?php foreach($item['gambar'] as $index => $gambar): ?>
                                  <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                                      <img src="<?= $gambar ?>" class="d-block w-100" alt="Gambar <?= $index + 1 ?>">
                                  </div>
                              <?php endforeach; ?>
                          </div>
                          
                          <!-- Tombol navigasi -->
                          <button class="carousel-control-prev" type="button" 
                              data-bs-target="#carouselModal<?= $item['id'] ?>" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                          </button>
                          <button class="carousel-control-next" type="button" 
                              data-bs-target="#carouselModal<?= $item['id'] ?>" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                          </button>
                      </div>
                  <?php else: ?>
                      <img src="<?= $item['gambar'][0] ?>" class="d-block w-100 mb-4" alt="<?= $item['judul'] ?>">
                  <?php endif; ?>
              <?php endif; ?>
              
              <p class="card-text">
                <?= $item['deskripsi'] ?>
                <ul>
                  <?php foreach($item['detail'] as $label => $value): ?>
                    <li><?= $value ?></li>
                  <?php endforeach; ?>
                </ul>
              </p>
            </div>
            <div class="modal-footer d-flex justify-content-between">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
              <a href="https://wa.me/6282210203488?text=Halo, saya tertarik dengan properti <?= urlencode($item['judul']) ?>. <?= urlencode("\n\nDetail properti:\n" . strip_tags(implode("\n", $item['detail']))) ?>" 
                 target="_blank" 
                 class="btn btn-primary">
                <i class="fab fa-whatsapp me-2"></i>Hubungi via WhatsApp
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal Chat -->
      <div class="modal fade" id="chatModal<?= $item['id'] ?>" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Chat dengan Kami</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body chat-container">
              <!-- Area Chat -->
              <div class="chat-messages" id="chatMessages<?= $item['id'] ?>">
                <div class="message admin">
                  <div class="message-content">
                    Halo! Ada yang bisa kami bantu tentang properti <?= $item['judul'] ?>?
                  </div>
                  <small class="message-time">Sekarang</small>
                </div>
              </div>
              
              <!-- Form Input Chat -->
              <div class="chat-input-container">
                <form id="chatForm<?= $item['id'] ?>" class="chat-form">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Ketik pesan..." required>
                    <button class="btn btn-primary" type="submit">
                      <i class="fas fa-paper-plane"></i>
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>


<!-- Contact Section -->
<section id="contact" class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 mb-4 mb-lg-0">
        <h2 class="fw-bold mb-4">Hubungi Kami</h2>
        <p class="lead mb-4">Kami siap membantu Anda dengan segala pertanyaan seputar properti. Silakan hubungi kami melalui formulir ini atau informasi kontak yang tersedia.</p>
        <ul class="list-unstyled mb-4">
          <li class="mb-3"><i class="fas fa-map-marker-alt text-primary me-2"></i> Jl. Properti Indah No. 123, Jakarta</li>
          <li class="mb-3"><i class="fas fa-phone text-primary me-2"></i> (021) 1234-5678</li>
          <li class="mb-3"><i class="fas fa-envelope text-primary me-2"></i> info@zanpro.com</li>
        </ul>
        <h4 class="mb-3">Jam Operasional</h4>
        <p>Senin - Jumat: 09:00 - 17:00</p>
        <p>Sabtu: 09:00 - 13:00</p>
        <p>Minggu: Tutup</p>
      </div>
      <div class="col-lg-6">
        <div class="card border-0 shadow">
          <div class="card-body p-5">
            <h3 class="card-title mb-4">Kirim Pesan</h3>
            <form>
              <div class="mb-3">
                <input type="text" class="form-control" placeholder="Nama Lengkap" required>
              </div>
              <div class="mb-3">
                <input type="email" class="form-control" placeholder="Alamat Email" required>
              </div>
              <div class="mb-3">
                <input type="tel" class="form-control" placeholder="Nomor Telepon">
              </div>
              <div class="mb-3">
                <textarea class="form-control" rows="5" placeholder="Pesan Anda" required></textarea>
              </div>
              <button type="submit" class="btn btn-primary w-100">Kirim Pesan</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


 <?php include 'footer.php'; ?>

  <!-- Bootstrap Bundle dengan Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  
  <!-- Script kustom Anda -->
  <script src="js/script.js"></script>
</body>
</html>

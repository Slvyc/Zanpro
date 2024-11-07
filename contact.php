<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zanpro</title>
    <link rel="icon" href="/Zanpro/img/zanpro logo.jpg">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.3/font/bootstrap-icons.min.css"
        rel="stylesheet">
</head>

<body>
    <?php include 'navbar.php'; ?>

    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 text-black fw-bold mb-4">Temukan Rumah Impian Anda Bersama Zanpro</h1>
                    <p class="lead text-black mb-4">Kami menyediakan layanan real estate terbaik untuk membantu Anda
                        menemukan properti yang sempurna sesuai kebutuhan dan anggaran Anda.</p>
                    <div class="d-flex gap-3">
                        <a href="#" class="btn btn-outline-dark btn-lg">Cari Properti</a>
                        <a href="#" class="btn btn-outline-dark btn-lg">Hubungi Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="mb-4">Contact Information</h2>
                    <ul class="list-unstyled">
                        <li class="mb-3">
                            <strong>Phone:</strong> +1 234 567 890
                        </li>
                        <li class="mb-3">
                            <strong>Email:</strong> info@zanpro.com
                        </li>
                        <li class="mb-3">
                            <strong>Working Hours:</strong> Mon - Fri: 9:00 AM - 5:00 PM
                        </li>
                    </ul>

                    <!-- Social Media Icons -->
                    <h4 class="mt-4">Find Us On</h4>
                    <div class="d-flex gap-3">
                        <a href="#" target="_blank"><i class="bi bi-whatsapp"
                                style="font-size: 2rem; color: #25D366;"></i></a>
                        <a href="nadhif_alfath6" target="_blank"><i class="bi bi-instagram"
                                style="font-size: 2rem; color: #E4405F;"></i></a>
                        <a href="#" target="_blank"><i class="bi bi-facebook"
                                style="font-size: 2rem; color: #1877F2;"></i></a>
                        <a href="#" target="_blank"><i class="bi bi-tiktok"
                                style="font-size: 2rem; color: #000000;"></i></a>
                        <a href="#" target="_blank">
                            <img src="img/olx 1.png" alt="OLX" style="width: 2rem; height: 2rem;">
                        </a>
                    </div>



                </div>

                <div class="col-lg-6">
                    <h2 class="mb-4">Location</h2>

                    <!-- Address beside the map (visible on large screens) -->
                    <p class="d-none d-lg-block"><strong>Address:</strong> 123 Main St, Melbourne, VIC 3000, Australia
                    </p>

                    <div class="ratio ratio-16x9">

                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8354345093085!2d144.95565131550444!3d-37.81732797975133!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0xf577ea5e56d5e1e8!2sFederation%20Square!5e0!3m2!1sen!2sau!4v1634753024782!5m2!1sen!2sau"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                    <!-- Address below the map (visible on small screens) -->
                    <p class="d-lg-none mt-3"><strong>Address:</strong> 123 Main St, Melbourne, VIC 3000, Australia</p>
                </div>

            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom Script -->
    <script src="js/script.js"></script>
</body>

</html>
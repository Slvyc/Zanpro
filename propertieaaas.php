<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zanpro - Properties</title>
    <link rel="icon" href="/Web-Profile-Company/img/zanpro logo.jpg">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .hero-section {
            background-image: url('https://via.placeholder.com/1920x1080');
            background-size: cover;
            background-position: center;
            height: 60vh;
            display: flex;
            align-items: center;
        }
        .property-item {
            position: relative;
            overflow: hidden;
            margin-bottom: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .property-image {
            width: 100%;
            height: 250px;
            object-fit: cover;
            transition: transform 0.3s ease;
        }
        .property-item:hover .property-image {
            transform: scale(1.1);
        }
        .property-info {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 15px;
            background: rgba(0, 0, 0, 0.7);
            color: white;
        }
        .property-type {
            position: absolute;
            top: 10px;
            left: 10px;
            padding: 5px 10px;
            background: rgba(0, 0, 0, 0.7);
            color: white;
            font-size: 0.8rem;
            border-radius: 5px;
        }
        .property-price {
            position: absolute;
            top: 10px;
            right: 10px;
            padding: 5px 10px;
            background: rgba(0, 0, 0, 0.7);
            color: white;
            font-size: 0.9rem;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <!-- Navbar placeholder -->
    <?php include 'navbar.php'; ?>

    <!-- Hero Section -->
    <section id="home" class="hero-section">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-lg-6">
                        <h1 class="display-4 text-black fw-bold mb-4">Temukan Rumah Impian Anda Bersama Zanpro</h1>
                        <p class="lead text-black mb-4">Looking to Buy, Sell, Rent, Invest or Manage?</p>
                        <div class="d-flex gap-3">
                            <a href="#" class="btn btn-black btn-lg">Cari Properti</a>
                            <a href="#" class="btn btn-outline-dark btn-lg">Hubungi Kami</a>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    
    <!-- Properties Section -->
    <section id="properties" class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Featured Properties</h2>
            <div class="row">
                <!-- Property 1 -->
                <div class="col-sm-6 col-lg-4">
                    <div class="property-item">
                        <img src="https://via.placeholder.com/600x400" alt="Modern Stylish Apartment" class="property-image">
                        <span class="property-type">Apartment</span>
                        <span class="property-price">$150,000</span>
                        <div class="property-info">
                            <h5>Modern Stylish Apartment</h5>
                            <p>Queens</p>
                        </div>
                    </div>
                </div>
                <!-- Property 2 -->
                <div class="col-sm-6 col-lg-4">
                    <div class="property-item">
                        <img src="https://via.placeholder.com/600x400" alt="Contemporary Apartments" class="property-image">
                        <span class="property-type">Apartment</span>
                        <span class="property-price">$150,000</span>
                        <div class="property-info">
                            <h5>Contemporary Apartments</h5>
                            <p>Queens</p>
                        </div>
                    </div>
                </div>
                <!-- Property 3 -->
                <div class="col-sm-6 col-lg-4">
                    <div class="property-item">
                        <img src="https://via.placeholder.com/600x400" alt="Suburban Single-Family Homes" class="property-image">
                        <span class="property-type">House</span>
                        <span class="property-price">$250,000</span>
                        <div class="property-info">
                            <h5>Suburban Single-Family Homes</h5>
                            <p>Suburbs</p>
                        </div>
                    </div>
                </div>
                <!-- Add more properties here -->
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="bg-light py-5">
        <div class="container">
            <h2 class="text-center mb-5">Schedule an Appointment</h2>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Name" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" rows="4" placeholder="Message" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Request a Call Back</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer placeholder -->
    <?php include 'footer.php'; ?>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

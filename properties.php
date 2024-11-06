<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zanpro</title>
    <link rel="icon" href="/Web-Profile-Company/img/zanpro logo.jpg">
    <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="css/style.css">
     <style>
        /* .property-item {
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
        } */
     </style>

    </head>
    <body>
        <?php include 'navbar.php'; ?>
        
        <!-- Hero Section -->
         <section id="home" class="hero-section">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-lg-6">
                        <h1 class="display-4 text-black fw-bold mb-4">Temukan Rumah Impian Anda Bersama Zanpro</h1>
                        <p class="lead text-black mb-4">Looking to Buy, Sell, Rent, Invest or Manage?</p>
                        <div class="d-flex gap-3">
                            <a href="#" class="btn btn-outline-dark btn-lg">Cari Properti</a>
                            <a href="#" class="btn btn-outline-dark btn-lg">Hubungi Kami</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="property-page-content">
            <h2 class="property-page-title">Featured Properties</h2>
            <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) 
            desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de 
            textos especimen. No sólo sobrevivió 500 años, sino que también ingresó como texto de relleno en 
            documentos electrónicos, quedando esencialmente igual al original.</p>
        </div>

<!--start-->
<div class="service-page-container">
    <!-- Card pertama: Gambar di sebelah kiri, konten di sebelah kanan -->
    <div class="property-page-card">
        <div class="row">
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
            <div class="col-sm-6 col-lg-4">
                <div class="property-item">
                    <img src="https://via.placeholder.com/600x400" alt="Cozy Family Home" class="property-image">
                    <span class="property-type">House</span>
                    <span class="property-price">$250,000</span>
                    <div class="property-info">
                    <h5>Cozy Family Home</h5>
                    <p>Brooklyn</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="property-item">
                    <img src="https://via.placeholder.com/600x400" alt="Luxury Penthouse" class="property-image">
                    <span class="property-type">Penthouse</span>
                    <span class="property-price">$500,000</span>
                    <div class="property-info">
                    <h5>Luxury Penthouse</h5>
                    <p>Manhattan</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="property-item">
                    <img src="https://via.placeholder.com/600x400" alt="Beachfront Villa" class="property-image">
                    <span class="property-type">Villa</span>
                    <span class="property-price">$750,000</span>
                    <div class="property-info">
                    <h5>Beachfront Villa</h5>
                    <p>Miami</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="property-item">
                    <img src="https://via.placeholder.com/600x400" alt="Downtown Loft" class="property-image">
                    <span class="property-type">Loft</span>
                    <span class="property-price">$300,000</span>
                    <div class="property-info">
                    <h5>Downtown Loft</h5>
                    <p>Chicago</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="property-item">
                    <img src="https://via.placeholder.com/600x400" alt="Suburban Family House" class="property-image">
                    <span class="property-type">House</span>
                    <span class="property-price">$400,000</span>
                    <div class="property-info">
                    <h5>Suburban Family House</h5>
                    <p>Los Angeles</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="property-item">
                    <img src="https://via.placeholder.com/600x400" alt="Mountain Cabin" class="property-image">
                    <span class="property-type">Cabin</span>
                    <span class="property-price">$200,000</span>
                    <div class="property-info">
                    <h5>Mountain Cabin</h5>
                    <p>Denver</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="property-item">
                    <img src="https://via.placeholder.com/600x400" alt="City Center Condo" class="property-image">
                    <span class="property-type">Condo</span>
                    <span class="property-price">$350,000</span>
                    <div class="property-info">
                    <h5>City Center Condo</h5>
                    <p>San Francisco</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="property-item">
                    <img src="https://via.placeholder.com/600x400" alt="City Center Condo" class="property-image">
                    <span class="property-type">Condo</span>
                    <span class="property-price">$350,000</span>
                    <div class="property-info">
                    <h5>City Center Condo</h5>
                    <p>San Francisco</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <?php include 'footer.php'; ?>
    
    <!-- Bootstrap Bundle dengan Popper -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
     
     <!-- Script kustom Anda -->
      <script src="js/script.js"></script>
    </body>
    </html>

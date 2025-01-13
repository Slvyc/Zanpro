<?php
include 'navbar.php'; // Menyertakan header
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zandpro</title>
    <link rel="icon" href="/Zanpro/img/zanpro logo.jpg">
    <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="css/style.css">
</head>
<body>

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

<?php
// Memuat data properti dari file property.php
include 'data/property.php';
?>

<div class="container mt-5">
    <h2 class="mb-4 text-center mb-5">Featured Properties</h2>
    <div class="row">
        <?php foreach ($properties as $property): ?>
            <div class="col-sm-6 col-lg-4 mb-4">
                <div class="property-item">
                    <img src="<?php echo $property['image'][0]; ?>" alt="<?php echo $property['title']; ?>" class="property-image" data-bs-toggle="modal" data-bs-target="#propertyModal<?php echo $property['id']; ?>">
                    <span class="property-type"><?php echo $property['type']; ?></span>
                    <span class="property-price"><?php echo $property['price']; ?></span>
                    <div class="property-info">
                        <h5><?php echo $property['title']; ?></h5>
                        <p><?php echo $property['location']; ?></p>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="propertyModal<?php echo $property['id']; ?>" tabindex="-1" aria-labelledby="propertyModalLabel<?php echo $property['id']; ?>" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="propertyModalLabel<?php echo $property['id']; ?>"><?php echo $property['title']; ?></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!-- Carousel -->
                            <div id="carousel<?php echo $property['id']; ?>" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <?php foreach ($property['image'] as $index => $image): ?>
                                        <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
                                            <img src="<?php echo $image; ?>" class="d-block w-100" alt="Property Image">
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carousel<?php echo $property['id']; ?>" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carousel<?php echo $property['id']; ?>" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>

                            <!-- Property Specifications -->
                            <div class="mt-4">
                                <h6>Property Details</h6>
                                <table class="table">
                                    <tbody>
                                        <?php foreach ($property['specifications'] as $key => $value): ?>
                                            <tr>
                                                <th><?php echo $key; ?></th>
                                                <td>
                                                    <?php
                                                    if (is_array($value)) {
                                                        echo implode(', ', $value);
                                                    } else {
                                                        echo $value;
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php include 'footer.php'; // Menyertakan footer ?>

<!-- Bootstrap Bundle dengan Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Products - Company Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    .navbar {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 1000;
        /* Supaya navbar selalu di atas elemen lain */
    }

    body {
        padding-top: 56px;
        /* Sesuaikan dengan tinggi navbar agar konten tidak tertutup */
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <img src="logo.png" alt="logo" srcset="" style="width: 60px;">
            <a class="navbar-brand" href="index.html"
                style="color: gold; font-weight: bold; font-size: 18px; margin-left: 10px;">
                Mahakarya Cipta Solusi
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="dashboard.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="products.php">Our Product</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="bg-success text-white text-center py-5">
        <h1>Our Products</h1>
        <p>Explore our high-quality products designed to meet your needs</p>
    </header>

    <section class="container my-5">
        <div style="text-align:center;">
            <h2 style="text-shadow: 2px 2px 0px gold;">Produk Kami</h2>
            <hr>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <img src="VIDEOWALL.jpeg" class="card-img-top" alt="Product 1" style="width: auto;">
                    <div class="card-body">
                        <h5 class="card-title">Product 1</h5>
                        <p class="card-text">High-quality product designed for efficiency and durability.</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="INTERACTIVE_FLAT_PANEL1.jpeg" class="card-img-top" alt="Product 2">
                    <div class="card-body">
                        <h5 class="card-title">Product 2</h5>
                        <p class="card-text">Innovative and user-friendly product to enhance your experience.</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="KIOSK.jpeg" class="card-img-top" alt="Product 3">
                    <div class="card-body">
                        <h5 class="card-title">Product 3</h5>
                        <p class="card-text">Reliable and affordable product for your business needs.</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="KIOSK.jpeg" class="card-img-top" alt="Product 3">
                    <div class="card-body">
                        <h5 class="card-title">Product 3</h5>
                        <p class="card-text">Reliable and affordable product for your business needs.</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light py-5">
        <div class="container text-center">
            <h2>Why Choose Our Products?</h2>
            <p>Our products are designed with quality, efficiency, and customer satisfaction in mind.</p>
            <div class="row mt-4">
                <div class="col-md-4">
                    <h4>High Quality</h4>
                    <p>We use the best materials and latest technology.</p>
                </div>
                <div class="col-md-4">
                    <h4>Innovative Designs</h4>
                    <p>Our products are built to enhance functionality and usability.</p>
                </div>
                <div class="col-md-4">
                    <h4>Affordable Prices</h4>
                    <p>We provide cost-effective solutions without compromising quality.</p>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 Company Name. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
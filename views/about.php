<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Tentang Kami</title>
    <style>
        body {
            background: linear-gradient(135deg, #f3e9dc, #f9f5f1);
            color: #6f4e37;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .hero {
            background: url('assets/img/hero.jpg') center/cover no-repeat;
            height: 60vh;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
        }

        .hero h1 {
            color: #6f4e37;
            font-size: 4rem;
            font-weight: bold;
        }

        .about-container {
            text-align: center;
            margin: 50px 0;
            padding: 20px;
            background: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .gallery-container {
            margin-top: 40px;
        }

        .gallery-item img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border: 2px solid #6f4e37;
            border-radius: 10px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .gallery-item img:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .gallery-caption {
            text-align: center;
            font-weight: bold;
            margin-top: 10px;
            color: #6f4e37;
        }

        footer {
            text-align: center;
            margin-top: 50px;
            padding: 20px;
            background: #6f4e37;
            color: #fff;
            border-radius: 10px 10px 0 0;
        }

        footer a {
            color: #f3e9dc;
            text-decoration: none;
            font-weight: bold;
        }

        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <!-- Hero Section -->
    <div class="hero">
        <h1>Selamat Datang di Kuliner Indonesia</h1>
    </div>

    <div class="container">
        <!-- About Section -->
        <div class="about-container">
            <h2 class="mb-4">Tentang Kami</h2>
            <p>Kami adalah platform yang menghadirkan kelezatan kuliner tradisional Indonesia ke dunia modern.</p>
            <p>Visi kami adalah melestarikan, mempromosikan, dan membagikan cerita di balik setiap hidangan khas nusantara.</p>
        </div>

        <!-- Gallery Section -->
        <div class="gallery-container">
            <h2 class="text-center">Galeri Kuliner Tradisional</h2>
            <div class="row g-4">
                <div class="col-md-4 gallery-item">
                    <img src="assets/img/Cheese BurgerCheese Burger.jpeg" class="img-fluid" alt="Cheese Burge">
                    <div class="gallery-caption">Rendang</div>
                </div>
                <div class="col-md-4 gallery-item">
                    <img src="assets/img/French Fries.jpeg" class="img-fluid" alt="French Fries.jpeg">
                    <div class="gallery-caption">Nasi Goreng</div>
                </div>
                <div class="col-md-4 gallery-item">
                    <img src="assets/img/Turkish kebabs.jpeg" class="img-fluid" alt="Turkish kebabs">
                    <div class="gallery-caption">Sate Ayam</div>
                </div>
                <div class="col-md-4 gallery-item">
                    <img src="assets/img/Donuts.jpeg" class="img-fluid" alt="Donuts">
                    <div class="gallery-caption">Gado-gado</div>
                </div>
                <div class="col-md-4 gallery-item">
                    <img src="assets/img/corndog.jpeg" class="img-fluid" alt="corndog">
                    <div class="gallery-caption">Bakso</div>
                </div>
                <div class="col-md-4 gallery-item">
                    <img src="assets/img/pizza.jpeg" class="img-fluid" alt="pizza">
                    <div class="gallery-caption">Pempek</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
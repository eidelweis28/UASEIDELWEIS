<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #fff8f3;
            color: #333;
        }

        .navbar-brand {
            font-size: 1.5rem;
            font-weight: 700;
            color: #ff6b6b;
        }

        .nav-link {
            color: #333;
            font-weight: 600;
        }

        .nav-link.active {
            color: #ff6b6b;
        }

        .btn-custom {
            background-color: #ff6b6b;
            color: white;
            border-radius: 30px;
            padding: 10px 20px;
        }

        .btn-outline-custom {
            border: 1px solid #ff6b6b;
            color: #ff6b6b;
            border-radius: 30px;
            padding: 10px 20px;
        }

        .hero-section {
            text-align: center;
            padding: 50px 0;
        }

        .hero-section h1 {
            font-size: 3rem;
            font-weight: 700;
        }

        .hero-section h1 span {
            color: #ff6b6b;
        }

        .hero-section p {
            font-size: 1rem;
            color: #666;
        }

        .hero-section .btn-group {
            margin-top: 20px;
        }

        .hero-section img {
            max-width: 100%;
            border-radius: 50%;
        }

        .popular-dishes {
            padding: 50px 0;
        }

        .popular-dishes h2 {
            font-size: 2rem;
            font-weight: 700;
            text-align: center;
            margin-bottom: 30px;
        }

        .card {
            border: none;
            border-radius: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            padding: 20px;
        }

        .card img {
            max-width: 100px;
            margin-bottom: 15px;
        }

        .card-title {
            font-size: 1.2rem;
            font-weight: 600;
        }

        .card-text {
            font-size: 1rem;
            color: #ff6b6b;
            font-weight: 700;
        }

        .rating {
            color: #ff6b6b;
        }
    </style>
</head>

<body>
    <section class="hero-section">
        <div class="container">
            <h1>Tasty Food <span>Collections</span></h1>
            <p>To provide nutritional support for an organism. Food is usually of plant, animal or fungal origin...</p>
            <div class="btn-group">
                <button class="btn btn-custom">Order Now</button>
                <button class="btn btn-outline-custom">Download app</button>
            </div>
            <div class="mt-4">
                <img src="assets/img/eidel.png" alt="Delicious pizza with various toppings">
            </div>
        </div>
    </section>

    <section class="popular-dishes">
        <div class="container">
            <h2>Popular Dishes</h2>
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <img src="assets/img/Cheese BurgerCheese Burger.jpeg" alt="Cheese Burger">
                        <h5 class="card-title">Cheese Burger</h5>
                        <p class="card-text">$ 24.00</p>
                        <div class="rating">
                            <i class="fas fa-star"></i> 4.8
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="assets/img/French Fries.jpeg" alt="French Fries">
                        <h5 class="card-title">French Fries</h5>
                        <p class="card-text">$ 12.00</p>
                        <div class="rating">
                            <i class="fas fa-star"></i> 4.6
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="assets/img/Turkish kebabs.jpeg" alt="Turkish kebabs">
                        <h5 class="card-title">Turkish kebabs</h5>
                        <p class="card-text">$ 80.00</p>
                        <div class="rating">
                            <i class="fas fa-star"></i> 5.0
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="assets/img/Donuts.jpeg" alt="Donuts">
                        <h5 class="card-title">Donuts</h5>
                        <p class="card-text">$ 35.00</p>
                        <div class="rating">
                            <i class="fas fa-star"></i> 4.9
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+Y5q5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5"></script>


</body>

</html>
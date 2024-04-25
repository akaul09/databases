<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Find your property at CavRealtors">
    <meta name="keywords" content="Real Estate property listing">
    <title>Welcome to CavRealtors</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="landing.css">
    <style>
        body, html {
            height: 100%;
            margin: 0;
        }
        .footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: #f5f5f5;
        }
        .footer a {
            margin: 0 10px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="landing.php">CavRealtors</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent"
            aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarContent">
        <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link" href="viewProperty.php">Search</a>
            <a class="nav-item nav-link" href="viewProperty.php">Browse Listings</a>
            <a href="signup.php" class="btn btn-outline-primary my-2 my-lg-0" role="button">Sign In</a>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row my-4">
        <div class="col-12 text-center">
            <h1>Explore Your Dream Home</h1>
            <p>Find properties in a snap.</p>
            <a href="viewProperty.php" class="btn btn-primary">Start Your Search</a>
        </div>
    </div>
    <div class="row text-center my-4">
        <div class="col-12 col-md-4">
            <h3>Detailed Listings</h3>
            <p>Every home detail, from price to amenities, at a glance.</p>
        </div>
        <div class="col-12 col-md-4">
            <h3>Custom Searches</h3>
            <p>Filter by location, price, or property type effortlessly.</p>
        </div>
        <div class="col-12 col-md-4">
            <h3>Easy to use</h3>
            <p>Simple features make property viewing accessible to everyone.</p>
        </div>
    </div>
    <div class="text-center my-4">
        <h2>Our Commitment</h2>
        <p>Dedicated to simplifying your home-buying experience with the most up-to-date and verified data.</p>
    </div>
</div>

<footer class="footer py-3 text-center">
    <div class="container">
        <span class="text-muted">© 2024 CavRealtors - All Rights Reserved.</span>
        <div class="float-right">
            <a href="#" class="text-muted">Privacy Policy</a> |
            <a href="#" class="text-muted">Terms of Use</a>
        </div>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

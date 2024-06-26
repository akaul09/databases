<?php
require("connect-db.php");
require("request-db.php");
?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['housestyle'])) {
        addProperty($_POST["housestyle"], $_POST["price"], $_POST["address"], $_POST["brokerName"], $_POST["bathrooms"], $_POST["bedrooms"], $_POST["squareFeet"], $_POST["state"], $_POST["county"], $_POST["status"]);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Add Property to CavRealtors">
    <meta name="keywords" content="Real Estate property listing">
    <title>Add Property - CavRealtors</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="landing.css">
    <style>
        body,
        html {
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

        .full-height-image {
            background-image: url('assets/homeImage.jpg');
            background-size: cover;
            background-position: center;
            min-height: 400px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">
            <img src="assets/logo.png" alt="CavRealtors Logo" style="height: 40px; margin-right: 10px;">CavRealtors
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarContent">
            <div class="navbar-nav ml-auto">
                <a class="btn btn-bordered" href="viewProperty.php">Browse Listings</a>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row g-3 mt-2">
            <div class="col">
                <h2>Add Property</h2>
            </div>
        </div>
        <hr />
        <div class="secondcontainer">
            <form class="addProp" method="post" action="addProperty.php">
                <div class="mb-3">
                    <label for="houseStyle" class="form-label">House Style</label>
                    <input type="text" class="form-control" id="housestyle" name="housestyle" required>
                    <div class="invalid-feedback">
                        Please provide the style of the house.
                    </div>
                </div>
                <br><br>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" class="form-control" id="price" name="price" required>
                    <div class="invalid-feedback">
                        Please provide the Price of the house.
                    </div>
                </div>
                <br><br>

                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="address" name="address" required>
                    <div class="invalid-feedback">
                        Please provide the address.
                    </div>
                </div>
                <br><br>
                <div class="mb-3">
                    <label for="brokerName" class="form-label">Broker Name</label>
                    <input type="text" class="form-control" id="brokerName" name="brokerName" required>
                    <div class="invalid-feedback">
                        Please provide the name of the broker.
                    </div>
                </div>
                <br><br>
                <div class="mb-3">
                    <label for="bathrooms" class="form-label">No. of Bathrooms</label>
                    <input type="number" class="form-control" id="bathrooms" name="bathrooms" required>
                    <div class="invalid-feedback">
                        Please provide the number of bathrooms.
                    </div>
                </div>
                <br><br>
                <div class="mb-3">
                    <label for="bedrooms" class="form-label">No. of Bedrooms</label>
                    <input type="number" class="form-control" id="bedrooms" name="bedrooms" required>
                    <div class="invalid-feedback">
                        Please provide the number of bedrooms.
                    </div>
                </div>
                <br><br>
                <div class="mb-3">
                    <label for="squareFeet" class="form-label">Sq ft.</label>
                    <input type="number" class="form-control" id="squareFeet" name="squareFeet" required>
                    <div class="invalid-feedback">
                        Please provide the square footage.
                    </div>
                </div>
                <br><br>
                <div class="mb-3">
                    <label for="state" class="form-label">State</label>
                    <input type="text" class="form-control" id="state" name="state" required>
                    <div class="invalid-feedback">
                        Location Information (State)
                    </div>
                </div>
                <br><br>
                <div class="mb-3">
                    <label for="county" class="form-label">County</label>
                    <input type="text" class="form-control" id="county" name="county" required>
                    <div class="invalid-feedback">
                        Please provide the county.
                    </div>
                </div>
                <br><br>
                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select class="form-select" id="status" name="status" required>
                        <option selected disabled value="">Choose...</option>
                        <option value="for_sale">For Sale</option>
                        <option value="sold">Sold</option>
                        <option value="pending">Pending</option>
                        <option value="not_available">Not Available</option>
                        <option value="Foreclosure">Foreclosure</option>
                        <option value="Contigent">Contigent</option>
                        <option value="Coming Soon">Coming Soon</option>
                        <option value="Sale">Sale</option>
                    </select>
                    <div class="invalid-feedback">
                        Please select the status of the house.
                    </div>
                </div>
                <br><br>
                <button class="btn search-button btn-primary" type="submit">Submit form</button>

            </form>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
<?php
require("connect-db.php");
require("request-db.php");
?>


<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['price'])) {
        addProperty($_POST["housestyle"], $_POST["price"]);
        // $_POST["address"], $_POST["brokername"], $_POST["bathrooms"], $_POST["bedrooms"], $_POST["squarefeet"], $_POST["state"], $_POST["county"], $_POST["status"]);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Add Property Form</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>CavRealtors</span>
                    <button class="btn btn-primary">Back</button>
                </div>
                <div class="col-md-4">
                    <img src="/Users/rachitgoli/databases/assets/cavrealtors-high-resolution-logo-transparent 1.png"  class="img-fluid">
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="houseStyle">HOUSESTYLE</label>
                            <input type="text" class="form-control" id="housestyle", name = "housestyle" required>
                        </div>
                        <div class="form-group">
                            <label for="price">PRICE</label>
                            <input type="text" class="form-control" id="price", name = "price" required>
                        </div>
                        <div class="form-group">
                            <label for="address">ADDRESS</label>
                            <input type="text" class="form-control" id="address", name = "address" required>
                        </div>
                        <div class="form-group">
                            <label for="state">STATE</label>
                            <input type="text" class="form-control" id="state", name = "state" required>
                        </div>
                        <div class="form-group">
                            <label for="city">CITY</label>
                            <input type="text" class="form-control" id="city", name = "city" required>
                        </div>
                        <div class="form-group">
                            <label for="country">COUNTRY</label>
                            <select class="form-control" id="country">
                                <option>United States</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="status">STATUS OF PROPERTY</label>
                            <input type="text" class="form-control" id="status", name = "status" required>
                        </div>
                        <div class="form-group">
                            <label for="bed">BED</label>
                            <input type="text" class="form-control" id="bed", name = "beds", required>
                        </div>
                        <div class="form-group">
                            <label for="baths">BATHS</label>
                            <input type="text" class="form-control" id="baths", name = "baths" required>
                        </div>
                        <div class="form-group">
                            <label for="sqft">SQUAREFEET</label>
                            <input type="text" class="form-control" id="sqft", name = "sqft" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
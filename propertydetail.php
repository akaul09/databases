<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Detail</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <?php require("connect-db.php"); ?>
    <?php require("request-db.php"); ?>

    <?php
    if (isset($_GET['pid'])) {
        $pid = $_GET['pid'];
        $details = getPropertyById($pid);  
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])) {
        UpdatePropertyById($_POST['pid'], $_POST['houseStyle'], $_POST['price'], $_POST['name'], $_POST['address'], $_POST['title'], $_POST['bath'], $_POST['bed'], $_POST['sqft'], $_POST['state'], $_POST['locality'], $_POST['status']);
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['delete'])) {
        $pidToDelete = $_POST['pid'];
        deletePropertyById($pidToDelete);
    }
    ?>

    <?php foreach ($details as $property) : ?>
        <div class="card-body">
            <h3 class="card-title"><?php echo htmlspecialchars($property['name']); ?></h3>
            <p class="card-text">
                <strong>Price:</strong> <?php echo htmlspecialchars($property['price']); ?><br>
                <strong>Square Feet:</strong> <?php echo htmlspecialchars($property['sqft']); ?><br>
                <strong>Beds:</strong> <?php echo htmlspecialchars($property['bed']); ?><br>
                <strong>Bathrooms:</strong> <?php echo htmlspecialchars($property['bath']); ?><br>
            </p>

            <button type="button" class="btn btn-primary" onclick="openUpdateModal(<?php echo htmlspecialchars(json_encode($property)); ?>)">Update</button>
            <form method="POST" style="display:inline;">
                <input type="hidden" name="pid" value="<?php echo $property['pid']; ?>">
                <button type="submit" name="delete" class="btn btn-danger">Delete</button>
            </form>
        </div>
    <?php endforeach; ?>

    <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="updateModalLabel">Update Property</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="">
                    <div class="modal-body">
                        <input type="hidden" id="modalPid" name="pid">
                        <div class="form-group">
                            <label for="modalPrice">Price:</label>
                            <input type="text" class="form-control" id="modalPrice" name="price" required>
                        </div>
                        <div class="form-group">
                            <label for="modalSqft">Square Feet:</label>
                            <input type="text" class="form-control" id="modalSqft" name="sqft" required>
                        </div>
                        <div class="form-group">
                            <label for="modalBeds">Beds:</label>
                            <input type="number" class="form-control" id="modalBeds" name="bed" required>
                        </div>
                        <div class="form-group">
                            <label for="modalBaths">Bathrooms:</label>
                            <input type="number" class="form-control" id="modalBaths" name="bath" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="update" class="btn btn-primary">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function openUpdateModal(property) {
            $('#modalPid').val(property.pid);
            $('#modalPrice').val(property.price);
            $('#modalSqft').val(property.sqft);
            $('#modalBeds').val(property.bed);
            $('#modalBaths').val(property.bath);
            $('#updateModal').modal('show');
        }
    </script>
</body>
</html>

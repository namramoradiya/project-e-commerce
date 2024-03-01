<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filtered Search Results</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f0f8f2;
            padding: 50px;
        }

        .search-results-container {
            max-width: 600px;
            margin: 0 auto;
        }

        .result-card {
            background-color: #ffffff;
            border: 1px solid #d1d8cc;
            border-radius: 10px;
            margin-bottom: 20px;
            padding: 20px;
        }

        .result-card h4 {
            color: #5d8033;
            margin-bottom: 10px;
        }

        .result-card p {
            color: #333;
        }
               .result-card {
            background-color: #ffffff;
            border: 1px solid #d1d8cc;
            border-radius: 10px;
            margin-bottom: 20px;
            padding: 20px;
            overflow: hidden; /* Ensures the card doesn't expand unevenly due to image height */
        }

        .result-card img {
    width: 250px !important; /* Adjust the width according to your design */
    height: 250px !important; /* Adjust the height according to your design */
    float: right;
    border-radius: 5px;
}
    </style>
</head>

<body>
    <div class="container">
        <div class="search-results-container">
            <?php
include 'conn.php';

if (isset($_POST['filter_search'])) {
    $searchedCrop = $_POST['crop_name'];
    $minPrice = $_POST['min_price'];
    $maxPrice = $_POST['max_price'];
    $quantity = $_POST['quantity'];

    $whereClause = "ci.crop_name LIKE '%$searchedCrop%'";

    if (!empty($minPrice) || !empty($maxPrice)) {
        $whereClause .= " AND ci.crop_price BETWEEN $minPrice AND $maxPrice";
    }

    if (!empty($quantity)) {
        $whereClause .= " AND ci.crop_quantity >= $quantity";
    }

    $sql = "SELECT ci.crop_name, ci.crop_quantity, ci.crop_price, ci.crop_type, ci.date, ci.imgpath,fr.first_name, fr.phone,ci.farmer_id 
            FROM crop_information ci 
            JOIN farmer_registration fr ON ci.farmer_id = fr.farmer_id 
            WHERE $whereClause";

    $result = $conn->query($sql);

       if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div class="result-card">';
        echo '<h4>Crop Name: ' . htmlspecialchars($row["crop_name"]) . '</h4>'; // Sanitize output
        echo '<img src="' . htmlspecialchars($row["imgpath"]) . '" alt="Crop Image" style="width: 100px; height: 100px;">'; // Display the image
        echo '<p>Crop Quantity: ' . htmlspecialchars($row["crop_quantity"]) . '</p>';
        echo '<p>Crop Price: Rs ' . htmlspecialchars($row["crop_price"]) . '</p>';
        echo '<p>Crop Type: ' . htmlspecialchars($row["crop_type"]) . '</p>';
        echo '<p>Validity Date: ' . htmlspecialchars($row["date"]) . '</p>';
        echo '<p>Farmer Name: <a href="farmerprofile.php?farmer_id=' . intval($row["farmer_id"]) . '">' . htmlspecialchars($row["first_name"]) . '</a></p>'; // Sanitize and cast to integer
        echo '<p>Phone: ' . htmlspecialchars($row["phone"]) . '</p>';
        // Add Book Product button with farmer_id and crop_name in URL
        echo '<button class="btn btn-success book-product-btn" data-farmer-id="' . intval($row["farmer_id"]) . '" data-crop-name="' . htmlspecialchars($row["crop_name"]) . '">Book Product</button>';
        echo '</div>';
    }
} else {
        echo "<p>No results found for '$searchedCrop' within the specified criteria.</p>";
    }
}

$conn->close();
?>

        </div>
    </div>
    <script>
    var bookProductButtons = document.querySelectorAll('.book-product-btn');
bookProductButtons.forEach(function(button) {
    button.addEventListener('click', function() {
        // Get farmer_id and crop_name from the data attributes
        var farmerId = this.getAttribute('data-farmer-id');
        var cropName = this.getAttribute('data-crop-name');

        // Redirect to crop_details.php with farmer_id and crop_name in the URL
        window.location.href = 'crop_details.php?farmer_id=' + farmerId + '&crop_name=' + encodeURIComponent(cropName);
    });
});
</script>
</body>

</html>

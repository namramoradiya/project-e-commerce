<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0,0,0);
            background-color: rgba(0,0,0,0.4);
            padding-top: 60px;
        }

        .modal-content {
            background-color: #fefefe;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }
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

        .price-range-container {
            margin-top: 20px;
        }

        .price-label {
            text-align: center;
            font-weight: bold;
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

            // Handle crop name search
            if (isset($_POST['crop_name'])) {
    $searchedCrop =  $_POST['crop_name']; // Sanitize input

    // SQL Query to retrieve data based on the searched crop name
    $sql = "SELECT ci.crop_name, ci.crop_quantity, ci.crop_price, ci.crop_type, ci.date, ci.imgpath, fr.first_name, fr.phone, ci.farmer_id 
        FROM crop_information ci 
        JOIN farmer_registration fr ON ci.farmer_id = fr.farmer_id 
        WHERE ci.crop_name LIKE '%$searchedCrop%' OR ci.crop_type LIKE '%$searchedCrop%'";



    // Execute the query
    $result = $conn->query($sql);

    // Output the results
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
        echo "<p>No results found for '" . htmlspecialchars($searchedCrop) . "'</p>"; // Sanitize output
    }
}
            ?>
        </div>
    </div>
        <div class="container">
    <div class="search-results-container">
        <!-- ... (your search results content) ... -->
    </div>
    <!-- Add a button to trigger the filter modal -->
    <button id="filterButton" class="btn btn-primary">Filter</button>

    <!-- The Filter Modal -->
    <div id="filterModal" class="modal">
    <div class="modal-content">
        <form id="filterForm" action="filtered_search.php" method="POST">
            <!-- Hidden input field to store the searched crop name -->
             <input type="text" id="searchedCrop" name="crop_name" value="<?php echo htmlspecialchars($searchedCrop); ?>" style="display: none;">
            
            <div class="form-group">
                <label for="minPrice">Min Price: <span id="minPriceLabel">0</span> Rs</label>
                <input type="range" class="form-control-range" id="minPrice" name="min_price" min="0" max="1000" step="10" value="0">
            </div>
            <div class="form-group">
                <label for="maxPrice">Max Price: <span id="maxPriceLabel">1000</span> Rs</label>
                <input type="range" class="form-control-range" id="maxPrice" name="max_price" min="0" max="1000" step="10" value="1000">
            </div>
            <div class="form-group">
                <label for="quantity">Quantity:</label>
                <input type="number" class="form-control" id="quantity" name="quantity" min="1">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" name="filter_search" value="Apply Filters">
            </div>
        </form>
    </div>
</div>

<script>
// Function to set the hidden crop name field before form submission
// Get the modal
// Get the modal
var modal = document.getElementById("filterModal");

// Get the button that opens the modal
var btn = document.getElementById("filterButton");

// When the user clicks the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

// Update min price label value
document.getElementById("minPrice").addEventListener("input", function() {
    document.getElementById("minPriceLabel").innerText = this.value;
});

// Update max price label value
document.getElementById("maxPrice").addEventListener("input", function() {
    document.getElementById("maxPriceLabel").innerText = this.value;
});

// When the filter form is submitted
document.getElementById("filterForm").addEventListener("submit", function(event) {
            // Get the searched crop name
            var searchedCrop = document.getElementById("searchedCrop").value;

            // Set the value of the hidden input field
            document.getElementById("searchedCrop").value = searchedCrop;

            // Append the crop name to the action URL
            this.action = 'filtered_search.php';
        });
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

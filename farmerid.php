<?php
   
    include 'conn.php'; // Include the database connection script
    
    // Retrieve the list of crops from the database
    $query = mysqli_query($conn, "SELECT * FROM crop_information");
    
    if (mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_assoc($query)) {
            $cropName = $row['crop_name'];
            $farmerId = $row['farmer_id'];
    ?>
    <div class="crop">
        
        <a href="crop_details.php?farmer_id=<?php echo $farmerId; ?>">View Farmer's Information</a>
    </div>
    <?php
        }
    } else {
        echo 'No crop information found.';
    }
    ?>
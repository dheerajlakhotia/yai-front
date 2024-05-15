<?php require_once 'includes/header.php'?>

<body>

    <?php require_once 'includes/navbar.php'?>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <h2 class="mb-4">LOCATIONS</h2>
                    <p>Join us in transforming communities and shaping a brighter future. Together, let's make every
                        place we touch a little bit better.</p>
                </div>
            </div>

            <div class="row">
                <?php
                // Query to fetch locations
                $sql = "SELECT * FROM locations";
                $result = mysqli_query($conn, $sql);

                // Check if there are any locations
                if (mysqli_num_rows($result) > 0) {
                    // Loop through each location
                    while ($row = mysqli_fetch_assoc($result)) {
                        // Extract location details
                        $location_name = $row['LocationName'];
                        $location_description = $row['Description'];
                        $location_image = $row['LocationImage'];

                        // Trim description to 50 words
                        $description_short = implode(' ', array_slice(explode(' ', $location_description), 0, 15));

                        // Display location card
                        echo '<div class="col-md-4">';
                        echo '<div class="card mb-4" style="width: 18rem;">';
                        echo '<img class="card-img-top" src="' . $location_image . '" alt="Card image cap">';
                        echo '<div class="card-body">';
                        echo '<h5 class="card-title">' . $location_name . '</h5>';
                        echo '<p class="card-text">' . $description_short . '...</p>';
                        // Button trigger modal
                        echo '<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#locationModal' . $row['LocationName'] . '">Learn More</button>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';

                        // Modal for each location
                        echo '<div class="modal fade" id="locationModal' . $row['LocationName'] . '" tabindex="-1" aria-labelledby="locationModalLabel' . $row['LocationName'] . '" aria-hidden="true">';
                        echo '<div class="modal-dialog">';
                        echo '<div class="modal-content">';
                        echo '<div class="modal-header">';
                        echo '<h5 class="modal-title" id="locationModalLabel' . $row['LocationName'] . '">' . $location_name . '</h5>';
                       
                        echo '</div>';
                        echo '<div class="modal-body">';
                        // Display full description and additional details
                        echo '<p>' . $location_description . '</p>';
                        echo '<p>Total Children: ' . $row['TotalChildren'] . '</p>';
                        echo '<p>Total Volunteers: ' . $row['TotalVolunteers'] . '</p>';
                        echo '<p>City: ' . $row['City'] . '</p>';
                        echo '<p>State: ' . $row['State'] . '</p>';
                        echo '</div>';
                        echo '<div class="modal-footer">';
                        echo '<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                } else {
                    // No locations found
                    echo '<div class="col-md-12">';
                    echo '<p>No locations found.</p>';
                    echo '</div>';
                }

                // Close the database connection
                mysqli_close($conn);
                ?>
            </div>

        </div>
    </section>

    <?php require_once 'includes/footer.php'?>

</body>

</html>
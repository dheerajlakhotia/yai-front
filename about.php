<?php require_once'includes/header.php'?>

<?php
// Assuming you have already established a database connection

// Fetch the "About Us" data from the database
$sql = "SELECT * FROM aboutus"; // Assuming you have a table named 'about_us'
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $title = $row['title'];
    $description = $row['description'];
    $image = $row['image']; // Assuming you have an 'image' column in your database
} else {
    // Handle case where no data is found
    $title = "Title Placeholder";
    $description = "Description Placeholder";
    $image = "images/default.jpg"; // Path to a default image
}
?>



<body>

    <?php require_once'includes/navbar.php'?>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <h2 class="mb-4">WHO WE ARE</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live the blind texts.</p>
                </div>
            </div>
            <div class="row d-flex">
                <div class="col-md-6 d-flex ftco-animate">
                    <img src="<?php echo $image; ?>" class="img-about align-self-stretch"
                        style="max-width: 80%; height: auto;" alt="About Us Image">

                </div>
                <div class="col-md-6 pl-md-5 ftco-animate">
                    <h2 class="mb-4"><?php echo $title; ?></h2>
                    <p><?php echo $description; ?></p>
                </div>
            </div>

        </div>
    </section>


    <?php 
    
    // SQL query to fetch founding members with role_id = 1
        $sql = "SELECT name, email, image FROM yai_users WHERE role_id = 1";
        $result = $conn->query($sql);
?>
    <section class="ftco-section">
        <div class="container">
            <div class="display-4 text-center">
                Founding Members
            </div>
            <div class="row">
                <?php
            // SQL query to fetch founding members with role_id = 1
            $sql = "SELECT name, email, image FROM yai_users WHERE role_id = 1";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='col-md-4'>
                            <div class='card my-3'>
                                <img src='" . $row["image"] . "' class='card-img-top' alt=''>
                                <div class='card-body'>
                                    <h5 class='card-title'>" . $row["name"] . "</h5>
                                    <div class='contact-icons'>
                                        <p class='card-text'>
                                            <i class='fas fa-envelope'></i> " . $row["email"] . "
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>";
                }
            } else {
                echo "0 results";
            }
            ?>
            </div><!-- End Row -->

            <!-- Counseling Members Section -->
            <div class="display-3 text-center">
                <h4>Counseling Members</h4>
            </div>
            <div class="row">
                <?php
            // SQL query to fetch counseling members with role_id = 5
            $sql = "SELECT name, email, image FROM yai_users WHERE role_id = 5";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='col-md-3' style='max-width: 200px; margin: auto;'> <!-- Adjust the column width here -->
                            <div class='card my-3'>
                                <img src='" . $row["image"] . "' class='card-img-top' alt=''>
                                <div class='card-body'>
                                    <h5 class='card-title'>" . $row["name"] . "</h5>
                                    <div class='contact-icons'>
                                        <p class='card-text'>
                                            <i class='fas fa-envelope'></i> " . $row["email"] . "
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>";
                }
            } else {
                echo "0 results";
            }
            ?>
            </div><!-- End Row -->
        </div>
    </section>







    <?php require_once 'includes/footer.php' ?>
<?php 
require_once 'includes/header.php';
require_once 'includes/navbar.php';

// Fetch data from general_details table
$sql = "SELECT * FROM general_details";
$result = $conn->query($sql);

?>

<body>
    <section class="ftco-section contact-section ftco-degree-bg">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <h2 class="mb-4">CONTACT US</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live the blind texts.</p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="row d-flex mb-5 contact-info">
                    <div class="col-md-12 mb-4">
                        <h2 class="h4">Contact Information</h2>
                    </div>
                    <div class="w-100"></div>
                    <?php 
                    if ($result->num_rows > 0) {
                        // Output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo '<div class="col-md-6">';
                            echo '<p><span>Address:</span> ' . $row["address"] . '</p>';
                            echo '</div>';
                            echo '<div class="col-md-6">';
                            echo '<p><span>Phone:</span> <a href="tel://' . $row["contact_number"] . '">' . $row["contact_number"] . '</a></p>';
                            echo '</div>';
                            echo '<div class="col-md-6">';
                            echo '<p><span>Email:</span> <a href="mailto:' . $row["contact_email"] . '">' . $row["contact_email"] . '</a></p>';
                            echo '</div>';
                            echo '<div class="col-md-6">';
                           
                            echo '</div>';
                        }
                    } else {
                        echo "0 results";
                    }
                    $conn->close();
                    ?>
                </div>
            </div>
        </div>
    </section>

    <?php require_once 'includes/footer.php' ?>
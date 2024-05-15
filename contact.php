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
                    <p>Your feedback and support are invaluable to us. Let's work together to create positive change and
                        build a better future for all.</p>
                </div>
            </div>

            <div class="row d-flex mb-5 contact-info">
                <?php 
                if ($result->num_rows > 0) {
                    // Output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo '<div class="col-md-3">';
                        echo '<p><span>Address:</span> ' . $row["address"] . '</p>';
                        echo '</div>';
                        echo '<div class="col-md-3">';
                        echo '<p><span>Phone:</span> <a href="tel://' . $row["contact_number"] . '">' . $row["contact_number"] . '</a></p>';
                        echo '</div>';
                        echo '<div class="col-md-3">';
                        echo '<p><span>Email:</span> <a href="mailto:' . $row["contact_email"] . '">' . $row["contact_email"] . '</a></p>';
                        echo '</div>';
                    }
                } else {
                    echo '<div class="col-md-12">0 results</div>';
                }
                $conn->close();
                ?>
            </div>
        </div>
    </section>

    <?php require_once 'includes/footer.php' ?>
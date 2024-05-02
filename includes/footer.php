<?php
include 'includes/dbconfig.php'; // Include your database configuration file

// Write a query to select data from the general_details table
$query = "SELECT * FROM general_details";

// Execute the query
$result = mysqli_query($conn, $query);

// Check if the query executed successfully
if ($result) {
    // Fetch the data
    $row = mysqli_fetch_assoc($result);

    // Close the result set
    mysqli_free_result($result);
} else {
    // Handle the case where the query fails
    echo "Error: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
<footer class="ftco-footer ftco-section img">
    <div class="overlay"></div>
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-3">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">About Us</h2>
                    <p><?php echo isset($row['meta_description']) ? $row['meta_description'] : ''; ?></p>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                        <!-- Fetch and display social media links -->
                        <?php if (isset($row['twitter']) && !empty($row['twitter'])): ?>
                        <li class="ftco-animate"><a href="<?php echo $row['twitter']; ?>"><span
                                    class="icon-twitter"></span></a></li>
                        <?php endif; ?>
                        <?php if (isset($row['facebook']) && !empty($row['facebook'])): ?>
                        <li class="ftco-animate"><a href="<?php echo $row['facebook']; ?>"><span
                                    class="icon-facebook"></span></a></li>
                        <?php endif; ?>
                        <?php if (isset($row['instagram']) && !empty($row['instagram'])): ?>
                        <li class="ftco-animate"><a href="<?php echo $row['instagram']; ?>"><span
                                    class="icon-instagram"></span></a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>

            <div class="col-md-2">
                <div class="ftco-footer-widget mb-4 ml-md-4">
                    <h2 class="ftco-heading-2">Pages</h2>
                    <ul class="list-unstyled">
                        <li><a href="index.php" class="py-2 d-block">Home</a></li>
                        <li><a href="activity.php" class="py-2 d-block">Activity</a></li>
                        <li><a href="gallery.php" class="py-2 d-block">Gallery</a></li>
                        <li><a href="event.php" class="py-2 d-block">Events</a></li>
                        <li><a href="location.php" class="py-2 d-block">location</a></li>
                        <li><a href="testimonial.php" class="py-2 d-block">Testimonial</a></li>
                    </ul>

                </div>
            </div>
            <div class="col-md-2">
                <div class="ftco-footer-widget mb-4 ml-md-4">
                    <h2 class="ftco-heading-2">Join Us</h2>
                    <ul class="list-unstyled">
                        <li><a href="volenteer.php" class="py-2 d-block">Be a volunteer</a></li>
                        <li><a href="internship.php" class="py-2 d-block">Internship</a></li>
                    </ul>

                </div>
            </div>
            <div class="col-md-2">
                <div class="ftco-footer-widget mb-4 ml-md-4">
                    <h2 class="ftco-heading-2">Importent</h2>
                    <ul class="list-unstyled">
                        <li><a href="#" class="py-2 d-block">Site Map</a></li>
                        <li><a href="about.php" class="py-2 d-block">About</a></li>
                        <li><a href="contact.php" class="py-2 d-block">Contact Us</a></li>
                        <li><a href="terms-and-condition.php" class="py-2 d-block">Terms & Condition</a></li>
                        <li><a href="privacy-policy.php" class="py-2 d-block"> privacy policy</a></li>
                    </ul>

                </div>
            </div>
            <div class="col-md-3">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Have a Questions?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <!-- Fetch and display contact details -->
                            <li><span class="icon icon-map-marker"></span><span
                                    class="text"><?php echo isset($row['address']) ? $row['address'] : ''; ?></span>
                            </li>
                            <li><a href="#"><span class="icon icon-phone"></span><span
                                        class="text"><?php echo isset($row['contact_number']) ? $row['contact_number'] : ''; ?></span></a>
                            </li>
                            <li><a href="#"><span class="icon icon-envelope"></span><span
                                        class="text"><?php echo isset($row['contact_email']) ? $row['contact_email'] : ''; ?></span></a>
                            </li>
                        </ul>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">

                <p>
                    Copyright &copy;<script>
                    document.write(new Date().getFullYear());
                    </script> All rights reserved | Made by Dheeraj lakhotia <i class="icon-heart"
                        aria-hidden="true"></i>
                </p>
            </div>
        </div>
    </div>
</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
            stroke="#F96D00" />
    </svg></div>





<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/jquery.timepicker.min.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
</script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>



<script>
function validateForm() {
    var email = document.getElementById('email').value;
    var emailError = document.getElementById('emailError');

    // Regular expression for email validation
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!emailRegex.test(email)) {
        emailError.textContent = 'Invalid email format';
        return false;
    } else {
        emailError.textContent = '';
        return true;
    }
}
</script>


</body>

</html>
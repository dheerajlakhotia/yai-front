   <?php require 'includes/dbconfig.php';  
   session_start(); // Starting the session

   
    if (isset($_POST["login"])) {
        $email = $_POST["email"];
        $password = $_POST["password"];

        $sql = "SELECT * FROM founding_member_registration WHERE email='$email' AND password='$password'";
        $res = $conn->query($sql);

        if ($res->num_rows > 0) {
            $row = $res->fetch_assoc();
            $_SESSION["user_id"] = $row["id"];
            $_SESSION["user_name"] = $row["name"];
            header("Location:../admin/index.php");
            exit();
        } else {
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>ERROR</strong> Invalid email or password!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
        }
    }
    ?>



   <?php require 'includes/header.php'; ?>
   <div class="container mt-5">
       <div class="text-center mb-4">
           <img src="images/yai-logo.jpg" alt="Logo" class="rounded-circle"
               style="width: 100px; height: 100px; object-fit: cover;">
       </div>

       <div class="container">
           <form method="post" action="login.php" class="p-4 border rounded shadow-sm" onsubmit="return validateForm()"
               style=" max-width: 400px; margin: 0 auto;">

               <!-- Email input -->
               <div class="mb-3">
                   <label for="form2Example1" class="form-label small">Email address</label>
                   <input type="email" id="form2Example1" name="email" class="form-control" />
               </div>

               <!-- Password input -->
               <div class="mb-3">
                   <label for="form2Example2" class="form-label small">Password</label>
                   <input type="password" id="form2Example2" name="password" class="form-control" />
               </div>

               <!-- Remember me and Forgot password -->
               <div class="d-flex justify-content-between align-items-center mb-3">
                   <a href="#!" class="text-decoration-none small">Forgot password?</a>
               </div>

               <!-- Sign in button -->
               <button type="submit" class="btn btn-block mb-3 custom-btn" name="login">Sign in</button>

               <!-- Register and social buttons -->
               <div class="text-center">
                   <p class="mb-2 small">Become a <a href="volenteer.php" class="text-decoration-none">Volunteer</a>
                   </p>
               </div>
               <span> <a href="index.php"><i class="bi bi-arrow-left"></i>Return Home</a></span>
           </form>
       </div>




       <!-- loader -->
       <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
               <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
               <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                   stroke="#F96D00" />
           </svg></div>


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
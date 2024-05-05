<?php require 'includes/header.php'; ?>

<?php
// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  // Sanitize email
  $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);



  // Check if email exists in users table
  $sql = "SELECT * FROM yai_users WHERE email = '$email'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    // User found, proceed with reset process

    // Generate a random reset token
    $reset_token = bin2hex(random_bytes(32));

    // Update user record with reset token (without expiry)
    $sql = "UPDATE yai_users SET reset_token = '$reset_token' WHERE email = '$email'";
    mysqli_query($conn, $sql);

    // Send email with reset link (replace with your email sending logic)
    $to = $email;
    $subject = "Password Reset";
    $message = "Click the link to reset your password: https://your-site.com/reset-password.php?token=$reset_token";
    $headers = "From: lakhotiadheeraj3@gmail.com";
    mail($to, $subject, $message, $headers);

    echo "An email with reset instructions has been sent to your inbox.";
  } else {
    echo "Email address not found.";
  }

  mysqli_close($conn);
}
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-body">
                    <h2 class="card-title text-center mb-4">Forgot Password</h2>
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require 'includes/footer.php'; ?>
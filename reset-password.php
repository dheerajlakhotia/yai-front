<?php require 'includes/header.php'; ?>

<?php
// Check if reset token is present in URL
if (isset($_GET['token'])) {
  $token = $_GET['token'];

  
  // Check if token exists in users table
  $sql = "SELECT * FROM yai_users WHERE reset_token = '$token'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_assoc($result);

    // **Optional: Check if token has expired (if you implemented expiry)**

    // Show form to set a new password
    echo "<h2>Set New Password</h2>";
    echo "<form action='change_password.php' method='post'>";
    echo "<input type='hidden' name='token' value='$token'>"; // Pass token for validation in change_password.php
    echo "<div class='mb-3'>";
    echo "<label for='new_password' class='form-label'>New Password</label>";
    echo "<input type='password' class='form-control' id='new_password' name='new_password' required>";
    echo "</div>";
    echo "<div class='mb-3'>";
    echo "<label for='confirm_password' class='form-label'>Confirm Password</label>";
    echo "<input type='password' class='form-control' id='confirm_password' name='confirm_password' required>";
    echo "</div>";
    echo "<div class='d-grid gap-2'>";
    echo "<button type='submit' class='btn btn-primary'>Change Password</button>";
    echo "</div>";
    echo "</form>";
  } else {
    echo "Invalid reset token.";
  }

  mysqli_close($conn);
} else {
  echo "No reset token provided.";
}
?>

<?php require 'includes/footer.php'; ?>
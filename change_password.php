<?php require 'includes/header.php'; ?>

<?php
// Check if form is submitted and token is present
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['token'])) {

  $token = $_POST['token'];
  $new_password = $_POST['new_password'];
  $confirm_password = $_POST['confirm_password'];

  

  // Check if token exists in users table
  $sql = "SELECT * FROM yai_users WHERE reset_token = '$token'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_assoc($result);

    // Validate new password (length, complexity)
    $errors = [];
    if (strlen($new_password) < 8) {
      $errors[] = "Password must be at least 8 characters long.";
    }
    // You can add more password complexity checks here (uppercase, lowercase, numbers, symbols)

    if (empty($errors)) {
      // Hash the new password
      $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

      // Update user record with new password and remove reset token (optional)
      $sql = "UPDATE users SET password = '$hashed_password', reset_token = NULL WHERE reset_token = '$token'";
      mysqli_query($conn, $sql);

      echo "Password changed successfully!";
    } else {
      // Display password validation errors
      echo "<h3>Password Validation Errors:</h3>";
      echo "<ul>";
      foreach ($errors as $error) {
        echo "<li>$error</li>";
      }
      echo "</ul>";
    }
  } else {
    echo "Invalid reset token.";
  }

  mysqli_close($conn);
} else {
  echo "Unauthorized access.";
}
?>

<?php require 'includes/footer.php'; ?>
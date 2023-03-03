<?php
  session_start();

  // Check if the user is logged in
  if (isset($_SESSION['username'])) {
    // Unset all session variables
    session_unset();

    // Destroy the session
    session_destroy();

    // Redirect to the login page
    header('Location: index.php');
    exit();
}
?>
<?php
  session_start();
  echo "<h1>Here 2</h1>";


  // Check if the user is logged in
  if (isset( $_SESSION['username'] )) {
    echo "<h1>Here</h1>";
    // Unset all session variables
    session_unset();

    // Destroy the session
    session_destroy();

    // Redirect to the login page
    header('Location: index.php');
    exit();
}
?>
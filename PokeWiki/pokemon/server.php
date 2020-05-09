<?php
  session_start();
  require('db.php');

  $errors = array();

  if (isset($_POST['reg_user'])) {
    
    $username = mysqli_real_escape_string($mysqli, $_POST['username']);
   
    $password = mysqli_real_escape_string($mysqli, $_POST['password']);
    

    if (empty($username)) { array_push($errors, "Username is required"); }
    
    if (empty($password)) { array_push($errors, "Password is required"); }
    

    $user_check_query = "SELECT * FROM user WHERE username ='$username' LIMIT 1";
    $result = mysqli_query($mysqli, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    
    if ($user) { 
      if ($user['username'] === $username) {
        array_push($errors, "Username already exists");
      }
    }

    
    if (count($errors) == 0) {
      

      $query = "INSERT INTO user (username, password) 
            VALUES('$username','$password')";
      mysqli_query($mysqli, $query);
      $_SESSION['username'] = $username;
      
      header('location: index.php');
    }
  }

?>
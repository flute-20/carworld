<?php
  session_start();

  include("db.php");

  if($_SERVER['REQUEST_METHOD']=="POST")
  {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $contact = $_POST['contact'];

    if(!empty($email)&& !empty($password) && !is_numeric($email))
    {
      $query = "insert into signup(name , email , password , contact) 
      values('$name' , '$email' , '$password' , '$contact')";

      mysqli_query($conn , $query);

      echo "<script type = 'text/javascript'>alert('successfully Registered')</script>"; 
    }
    else
    {
      echo "<script type='text/javascript'>alert('please enter the valid information')</script>";
    }

  }
  ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car World | Sign-Up</title>
    <link rel="stylesheet" href="styles.css">
    <script defer src="validation.js"></script>
</head>
<body>
    <header>
        <nav>
            <a href="index.html">Home</a>
            <a href="about.html">About</a>
            <a href="login.php">Login</a>
            <a href="car-ai.html">Car-AI</a>
            <a href="contact.html">Contact us</a>
        </nav>
    </header>
    <form id="signupform" method="post">
        <h1>Enter Your Details</h1>
  
        <div class="signup name">
          <label for="username">FullName:</label>
          <input type="text" id="name" class="name" name="name" required  />
        </div>
        <div class="signup mail">
          <label for="usermail">Email:</label>
          <input type="email" id="email" class="email" name="email" required/>
        </div>
        <div class="signup pswd">
            <label for="userpswd">Password:</label>
            <input type="password" id="password" class="password" name="password" required/>
          </div>
        <div class="signup no">
          <label for="userno">Contact No:</label>
          <input type="tel" id="contact" name="contact" required />
        </div>

        <div class="privacyterms">
          <input type="checkbox" id="privacy" name="privacy" required>
          <label for="privacy">I accept the <a href="/privacy and policy" target="_blank">privacy and policy details </a></label>
          <br>
          <input type="checkbox" id="terms" name="terms" required>
          <label for="terms">I accept the <a href="/terms-and-conditions" target="_blank">terms and conditions</a></label>
        
        </div>
  
        <div class="signup sub_btn">
          <input type="submit" value="Sign-Up" id="submit" class="submit" name="signup" />
        </div>

        <div class="signup login">
          <p>Already have an account? <a href="login.php">Login</a></p>
        </div>

      </form>
      
</body>
</html>
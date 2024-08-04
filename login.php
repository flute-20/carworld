<?php
    session_start();

    include("db.php");

    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        if(!empty($email)&& !empty($password) && !is_numeric($email))
        {
            $query = "select * from signup where email = '$gmail' limit 1 ";
            $result = mysqli_query($conn , $query);

            if($result)
            {
                if($result && mysqli_num_rows($result) > 0)
                {
                    $user_data = mysqli_fetch_assoc($result);

                    if($user_data['pass']==$password)
                    {
                        header("location: car.html");
                    }
                }
            }
            echo "<script type = 'text/javascript'>alert('wrong username or password')</script>";
        }
        else{
            echo "<script type = 'text/javascript'>alert('wrong username or password')</script>";
        }
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car World | Login Form</title>
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

    <form id="loginform" method="POST">
        <div class="loginhead">
            <h1>Login Form</h1>
        </div>
        <div class="lgn email">
            <label for="email">Email:</label>
            <input type="email" class="email" id="email" name="email" required>
        </div>
        <div class="lgn pswd">
            <label for="password">Password:</label>
            <input type="password" class="password" id="password" name="password" required>
        </div>
        <div class="lgn btn">
            <input type="submit" class="loginbtn" id="loginbtn" value="login">
        </div>
        <div class="lgn signup">
            <p class="paralink">New User &nbsp; | &nbsp; <a href="signup.php">sign up</a></p>
        </div>
    </form>

</body>
</html>

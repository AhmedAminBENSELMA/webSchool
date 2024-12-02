<?php

@include 'db_connect.php';

session_start();

if(isset($_POST['submit'])){

   $name = $_POST['name'];
   $email = $_POST['email'];
   $pass = ($_POST['pass']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && pass = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['name'];
         header('location:admin_page.php');

      }elseif($row['user_type'] == 'user'){

         $_SESSION['user_name'] = $row['name'];
         header('location:user_page.php');

      }
     
   }else{
      echo 'incorrect email or password!';
   }

};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <header>
        <a href="index.html" class="logo"><i class="fa-solid fa-house"></i></a>
        <nav class="navigation">
            <a href="contact.html">Contact</a>
        </nav>
    </header>
    <section class="main">
    <div class="container">
		<form action="" method="post">
            <p class=title>Login</p>
			<input class="input" type="email" name="email" required placeholder="Enter your Name">
			<input class="input" type="password"  name="pass" required placeholder="Enter your Password">
			<input class="buttn" type="submit" name="submit" value="Login">
            <p>don't have an account? <a class="buttn_reg" href="register_form.php">Register Now</a></p>
		</form>
	</div>
    </section>
    <footer class="footer">
        <p class="footer-title">Made By <span>Ben Selma Ahmed Amine</span></p>
        <div class="social-icons">
            <a href=""><i class="fab fa-linkedin"></i></a>
            <a href=""><i class="fab fa-twitter"></i></a>
            <a href=""><i class="fa-solid fa-envelope"></i></a>
            <a href=""><i class="fa-brands fa-square-facebook"></i></a>
        </div>
    </footer>
</body>
</html>
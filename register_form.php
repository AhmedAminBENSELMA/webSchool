<?php

@include 'db_connect.php';

if(isset($_POST['submit'])){

   $name =$_POST['name'];
   $email =$_POST['email'];
   $pass = ($_POST['pass']);
   $cpass = ($_POST['cpass']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && pass = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      echo 'user already exist!';

   }else{

      if($pass != $cpass){
         echo 'password not matched!';
      }else{
         $insert = "INSERT INTO user_form(name, email, pass, user_type) VALUES('$name','$email','$pass','$user_type')";
         mysqli_query($conn, $insert);
         header('location:login_form.php');
      }
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
    <title>Register</title>
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
            <p class=title>Register</p>
			<input type="text" class="input" name="name" required placeholder="Enter your name">
            <input type="email" class="input" name="email" required placeholder="Enter your email">
            <input type="password" class="input" name="pass" required placeholder="Enter your password">
            <input type="password" class="input" name="cpass" required placeholder="Confirm your password">
            <select class="input" name="user_type">
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
            </select>
            <input type="submit" name="submit" value="Register" class="buttn">
            <p>Already have an account <a class="buttn_reg" href="login_form.php">Login Now</a></p>
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
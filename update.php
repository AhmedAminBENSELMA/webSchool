<?php

@include 'db_connect.php';

session_start();

if(!isset($_SESSION['admin_name'])){
}
$id=$_GET['id'];
$query = "SELECT * FROM user_form";
$response = array();
$result = mysqli_query($conn, $query);
while($row = mysqli_fetch_array($result)) {
      $response[] = $row;
}
foreach ($response as $item) {
                        
$id=$item['id'] ;
$name=$item['name'];
$email=$item['email'];
$pass=$item['pass'];
$user_type=$item['user_type'];
}
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
        $insert = "UPDATE `user_form` SET name='$name',email='$email',pass='$pass',user_type='$user_type' WHERE id=$id";
        mysqli_query($conn, $insert);
        header('location:show_users.php');
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
    <title>Web School</title>
</head>
<body>
    <header>
        <a href="index.html" class="logo"><i class="fa-solid fa-house"></i></a>
        <nav class="navigation">
            <a href=""><?php echo $_SESSION['admin_name'] ?></a>
            <a href="contact.html">Contact</a>
            <a href="#">Add Course</a>
            <a href="users.php">Show users</a>
            <a href="logout.php" ><i class="fa-solid fa-right-from-bracket"></i></a>
        </nav>
    </header>
    <section class="main">
    <div class="container">
    <form action="" method="post">
            <p class=title>Update</p>
			      <input type="text" class="input" name="name" value=<?php echo $name ?> >
            <input type="email" class="input" name="email" value=<?php echo $email ?>>
            <input type="text" class="input" name="pass" value=<?php echo $pass ?>>
            <input type="text" class="input" name="cpass" value=<?php echo $pass ?>>
            <select class="input" name="user_type">
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
            </select>
            <input type="submit" name="submit" value="Update" class="buttn">
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

<?php

@include 'db_connect.php';

session_start();

if(!isset($_SESSION['admin_name'])){
}
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
            <a href="add.php">Add User</a>
            <a href="logout.php" ><i class="fa-solid fa-right-from-bracket"></i></a>
        </nav>
    </header>
    <section class="main">
        <table style=table>
            <thead>
                <tr>
                    <th class=thead_td>Id</th>
                    <th class=thead_td>Name</th>
                    <th class=thead_td>Email</th> 
                    <th class=thead_td>User type</th>
                    <th class=thead_td>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $query = "SELECT * FROM user_form";
                    $response = array();
                    $result = mysqli_query($conn, $query);
                    while($row = mysqli_fetch_array($result)) {
                        $response[] = $row;
                    }
                    foreach ($response as $item) {
                        echo '<tr>';
                            echo '<td class=td>' . $item['id'] . '</td>';
                            echo '<td class=td>' . $item['name'] . '</td>';
                            echo '<td class=td>' . $item['email'] . '</td>';
                            echo '<td class=td>' . $item['user_type'] . '</td>';
                            echo '<td class=td><a class=buttn_s href="delete.php? id= '.$item['id'].'">Delete<a>  <a class=buttn_d href="update.php? id= '.$item['id'].'">Update<a></td>';
                        echo '</tr>';
                    }
                ?>
            </tbody>
        </table>
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
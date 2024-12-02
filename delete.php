<?php
include 'db_connect.php';
if(isset($_GET['id'])){
    $id=$_GET['id'];

    $query = "DELETE FROM user_form WHERE id=$id";
    $result = mysqli_query($conn, $query);
    if($result){
        echo "Deleted successfull";
        header('location:show_users.php');}
    else{
        die(mysqli_error($conn));
    }
}
?>
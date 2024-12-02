<?php

@include 'db_connect.php';


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
            <a href="contact.html">Contact</a>
            <a href="logout.php" ><i class="fa-solid fa-right-from-bracket"></i></a>
        </nav>
    </header>
    <section class="courses">
        <h2 class="title">courses</h2>
        <div class="content">
            <div class="course-card">
                <div class="course-image">
                    <img src="images/python.jpg" />
                </div>
                <div class="course-info">
                    <strong class="course-title">
                        <span>Python for beginner</span>
                        <a href="#" class="start">start now</a>
                    </strong>
                </div>
            </div>
            <div class="course-card">
                <div class="course-image">
                    <img src="images/python.jpg" />
                </div>
                <div class="course-info">
                    <strong class="course-title">
                        <span>advanced python</span>
                        <a href="#" class="start">start now</a>
                    </strong>
                </div>
            </div>
            <div class="course-card">
                <div class="course-image">
                    <img src="images/c++.jpg" />
                </div>
                <div class="course-info">
                    <strong class="course-title">
                        <span>c++ for beginner</span>
                        <a href="#" class="start">start now</a>
                    </strong>
                </div>
            </div>
            <div class="course-card">
                <div class="course-image">
                    <img src="images/c++.jpg" />
                </div>
                <div class="course-info">
                    <strong class="course-title">
                        <span>advanced c++</span>
                        <a href="#" class="start">start now</a>
                    </strong>
                </div>
            </div>
            <div class="course-card">
                <div class="course-image">
                    <img src="images/html.jpg" />
                </div>
                <div class="course-info">
                    <strong class="course-title">
                        <span>learn html</span>
                        <a href="#" class="start">start now</a>
                    </strong>
                </div>
            </div>
            <div class="course-card">
                <div class="course-image">
                    <img src="images/css.jpg" />
                </div>
                <div class="course-info">
                    <strong class="course-title">
                        <span>learn css</span>
                        <a href="#" class="start">start now</a>
                    </strong>
                </div>
            </div>
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
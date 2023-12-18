<?php

@include 'config.php';

session_start();

if (!isset($_SESSION['admin_name'])) {
    // header('location:login_form.php');
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MedBud</title>

    <link rel="stylesheet" href="./dist/scss/main.css" />

    <link rel="icon" type="image/png" href="./dist/components/img/medbud__icon.png" />

    <script src="https://kit.fontawesome.com/29865ec48b.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="header__wrapper active" id="header">
                <div class="branding">
                    <img src="./dist/components/img/logo__bgremoved_ver2.png" alt="" />
                </div>

                <div class="header__nav">
                    <ul>
                        <li><a href="./user_page.php">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="">MedTips</a></li>

                        <li class="navi">
                            <a href="#service" class="place">Services <i class="fa-solid fa-caret-down"></i></a>
                            <div class="dropdown">
                                <ul>
                                    <li><a href="./appointment.php">Book Appointment</a></li>
                                    <li><a href="#">Medical Records</a></li>
                                </ul>
                            </div>
                        </li>

                        <li><a href="">Contact</a></li>
                    </ul>
                </div>

                <div class="logout__btn">
                    <a href="./login_form.php">Logout</a>
                </div>

                <div class="burger__btn">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </header>

    <section class="appointment__banner">
        <div class="container">
            <div class="appointment__banner__wrapper">
                <div class="appointment__banner__text">
                    <h2>Medical Record</h2>
                    <ul>
                        <li><a href="./user_page.php">Home</a></li>
                        <li>&nbsp;/ Medical Record</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="users">
        <div class="users__wrapper">
            <div class="users__content">
                <div class="users__nav">
                    <div class="users__name">
                        <!-- <h1>Dashboard</h1> -->
                        <h2><?php echo $_SESSION['user_name'] ?></h2>
                        <h5>Patient</h5>
                    </div>

                    <div class="users__side__nav">
                        <h4>CATEGORIES</h4>
                        <ul>
                            <li><a href="./doctor.php"><i class="fa-solid fa-user-doctor"></i>Doctors</a></li>
                            <span></span>
                            <li><a href="#"><i class="fa-solid fa-notes-medical"></i>Medical Records</a></li>
                            <span></span>
                            <li><a href="./appointment.php"><i class="fa-solid fa-file"></i>Appointments</a></li>
                            <!-- <li><a href=""><i class="fa-solid fa-calendar"></i>Calendar</a></li> -->


                        </ul>
                        <!-- <ul>
                            <li><a href="">Settings</a></li>
                            <li><a href="./login_form.php">Log out<i class="fa-solid fa-right-from-bracket"></i></a>
                            </li>
                        </ul> -->
                    </div>
                </div>

                <!-- <div class="branding">
               <img src="./dist/components/img/logo__bgremoved_ver2.png" alt="">
            </div> -->
            </div>
        </div>
    </section>
</body>

</html>
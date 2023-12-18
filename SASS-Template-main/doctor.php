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
                            <a href="#service" class="place">Services </a>
                            <!-- <div class="dropdown">
                <ul>
                  <li><a href="#">Book Appointment</a></li>
                  <li><a href="./medical_record.php">Medical Records</a></li>
                  <li><a href="">Doctors</a></li>
                </ul>
              </div> -->
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

    <section class="appointment__banner doctors--bg">
        <div class="container">
            <div class="appointment__banner__wrapper">
                <div class="appointment__banner__text">
                    <h2>Doctor</h2>
                    <ul>
                        <li><a href="./user_page.php">Home</a></li>
                        <li>&nbsp;/ Appoinment</li>
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
                            <li><a href="#"><i class="fa-solid fa-user-doctor"></i>Doctors</a></li>
                            <span></span>
                            <li><a href="./medical_record.php"><i class="fa-solid fa-notes-medical"></i>Medical Record</a></li>
                            <span></span>
                            <li><a href="./appointment.php"><i class="fa-solid fa-file"></i>Appointment</a></li>
                            <span></span>
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
            <section class="users__table">
                <div class="container">
                    <div class="users__table__wrapper">

                        <div class="doctors__list">
                            <div class="doctors__list__main__title">
                                <h2>Doctors List</h2>
                            </div>
                            <div class="doctors__list__wrapper">
                                <ul>
                                    <div class="doctors__list__title">
                                        <div class="doctors__list__title__text">
                                            <h2>All Departments</h2><i class="fa-solid fa-caret-down"></i>
                                        </div>
                                    </div>
                                    <li>
                                        <div class="doctors__list__container">
                                            <img src="./dist/components/img/doctors/Bosco-Favila-Czarina-OB.jpg" alt="">
                                            <div class="doctors__list__name">
                                                <div class="doctors__list__name__text">
                                                    <h4>Dr. Czarina Basco</h4>
                                                    <h6>OB-Gyne</h6>
                                                </div>
                                            </div>
                                            <div class="doctors__list__schedule">
                                                <div class="doctors__list__schedule__text">
                                                    <h3>Appoinment Hours:</h3>
                                                    <h5>Mon-Fri &#160; &#160; &#160; 8:00am - 3:00pm</h5>
                                                </div>
                                            </div>

                                            <div class="doctors__list__appointment__btn">
                                                <a href="">Make an appoinment</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="doctors__list__container">
                                            <img src="./dist/components/img/doctors/Caranzo-1.jpg" alt="">
                                            <div class="doctors__list__name">
                                                <div class="doctors__list__name__text">
                                                    <h4>Dr. Czarina Basco</h4>
                                                    <h6>OB-Gyne</h6>
                                                </div>
                                            </div>
                                            <div class="doctors__list__schedule">
                                                <div class="doctors__list__schedule__text">
                                                    <h3>Appoinment Hours:</h3>
                                                    <h5>Mon-Fri &#160; &#160; &#160; 8:00am - 3:00pm</h5>
                                                </div>
                                            </div>

                                            <div class="doctors__list__appointment__btn">
                                                <a href="">Make an appoinment</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="doctors__list__container">
                                            <img src="./dist/components/img/doctors/Delgado-1.jpg" alt="">
                                            <div class="doctors__list__name">
                                                <div class="doctors__list__name__text">
                                                    <h4>Dr. Czarina Basco</h4>
                                                    <h6>OB-Gyne</h6>
                                                </div>
                                            </div>
                                            <div class="doctors__list__schedule">
                                                <div class="doctors__list__schedule__text">
                                                    <h3>Appoinment Hours:</h3>
                                                    <h5>Mon-Fri &#160; &#160; &#160; 8:00am - 3:00pm</h5>
                                                </div>
                                            </div>

                                            <div class="doctors__list__appointment__btn">
                                                <a href="">Make an appoinment</a>
                                            </div>
                                        </div>
                                    </li>

                                    <!-- <div class="dotted__doctors__title">
                                        <p>rere</p>
                                    </div> -->

                                    <li>
                                        <div class="doctors__list__container">
                                            <img src="./dist/components/img/doctors/Tang-Hervin-IM-Cardio-1.jpg" alt="">
                                            <div class="doctors__list__name">
                                                <div class="doctors__list__name__text">
                                                    <h4>Dr. Czarina Basco</h4>
                                                    <h6>OB-Gyne</h6>
                                                </div>
                                            </div>
                                            <div class="doctors__list__schedule">
                                                <div class="doctors__list__schedule__text">
                                                    <h3>Appoinment Hours:</h3>
                                                    <h5>Mon-Fri &#160; &#160; &#160; 8:00am - 3:00pm</h5>
                                                </div>
                                            </div>

                                            <div class="doctors__list__appointment__btn">
                                                <a href="">Make an appoinment</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="doctors__list__container">
                                            <img src="./dist/components/img/doctors/Bosco-Favila-Czarina-OB.jpg" alt="">
                                            <div class="doctors__list__name">
                                                <div class="doctors__list__name__text">
                                                    <h4>Dr. Czarina Basco</h4>
                                                    <h6>OB-Gyne</h6>
                                                </div>
                                            </div>
                                            <div class="doctors__list__schedule">
                                                <div class="doctors__list__schedule__text">
                                                    <h3>Appoinment Hours:</h3>
                                                    <h5>Mon-Fri &#160; &#160; &#160; 8:00am - 3:00pm</h5>
                                                </div>
                                            </div>

                                            <div class="doctors__list__appointment__btn">
                                                <a href="">Make an appoinment</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="doctors__list__container">
                                            <img src="./dist/components/img/doctors/tolentino-arnel-MD-1.jpg-1.png" alt="">
                                            <div class="doctors__list__name">
                                                <div class="doctors__list__name__text">
                                                    <h4>Dr. Czarina Basco</h4>
                                                    <h6>OB-Gyne</h6>
                                                </div>
                                            </div>
                                            <div class="doctors__list__schedule">
                                                <div class="doctors__list__schedule__text">
                                                    <h3>Appoinment Hours:</h3>
                                                    <h5>Mon-Fri &#160; &#160; &#160; 8:00am - 3:00pm</h5>
                                                </div>
                                            </div>

                                            <div class="doctors__list__appointment__btn">
                                                <a href="#" class="make-appointment" data-doctor-name="Dr. Mark">Make an appointment</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="doctors__list__container">
                                            <img src="./dist/components/img/doctors/Bosco-Favila-Czarina-OB.jpg" alt="">
                                            <div class="doctors__list__name">
                                                <div class="doctors__list__name__text">
                                                    <h4>Dr. Czarina Basco</h4>
                                                    <h6>OB-Gyne</h6>
                                                </div>
                                            </div>
                                            <div class="doctors__list__schedule">
                                                <div class="doctors__list__schedule__text">
                                                    <h3>Appoinment Hours:</h3>
                                                    <h5>Mon-Fri &#160; &#160; &#160; 8:00am - 3:00pm</h5>
                                                </div>
                                            </div>

                                            <div class="doctors__list__appointment__btn">
                                                <a href="#" class="make-appointment" data-doctor-name="Dr. Reinier">Make an appointment</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="doctors__list__container">
                                            <img src="./dist/components/img/doctors/Bosco-Favila-Czarina-OB.jpg" alt="">
                                            <div class="doctors__list__name">
                                                <div class="doctors__list__name__text">
                                                    <h4>Dr. Czarina Basco</h4>
                                                    <h6>OB-Gyne</h6>
                                                </div>
                                            </div>
                                            <div class="doctors__list__schedule">
                                                <div class="doctors__list__schedule__text">
                                                    <h3>Appoinment Hours:</h3>
                                                    <h5>Mon-Fri &#160; &#160; &#160; 8:00am - 3:00pm</h5>
                                                    <!-- <input type="text"  -->
                                                </div>
                                            </div>

                                            <!-- <div class="doctors__list__appointment__btn">
                                                <a href="">Make an appoinment</a>
                                            </div> -->

                                            <div class="doctors__list__appointment__btn">
                                                <a href="#" class="make-appointment" data-doctor-name="Dr. Czarina Basco">Make an appointment</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="second-table">
                            <input type="text" id="doctorNameInput" placeholder="Doctor's Name">
                        </div>


                        <section class="about" id="about">
                            <div class="container">
                                <div class="about__wrapper">
                                    <div class="about__title">
                                        <h4>ABOUT<span></span></h4>
                                        <h2>WHAT IS MEDBUD</h2>
                                    </div>
                                    <div class="about__text">
                                        <div class="left__about">
                                            <p>Provided b brings together apps, online programs, online forums, and phone services, as well as a range of digital information resources.</p>
                                            <ul>
                                                <li>
                                                    <i class="fa-solid fa-check-double"></i>Evidence-based apps and online programs that can help you build personal skills and track progress
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-check-double"></i>Evidence-based apps and online programs that can help you build personal skills and track progress
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-check-double"></i>Evidence-based apps and online programs that can help you build personal skills and track progress
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="right__about">
                                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque, omnis quibusdam accusamus doloribus eum, ratione temporibus neque totam suscipit placeat, corporis facilis. Accusamus error maiores, est obcaecati at aut quasi!</p>
                                            <img src="./dist/components/img/about-icon.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </section>
        </div>
    </section>



    <!-- <footer class="footer">
    <div class="container">
      <div class="footer__wrapper">
        <div class="footer__section">
          <div class="footer__branding">
            <img src="./dist/img/Blue Minimalist Medical Logo (1).png" alt="">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia eaque odio repellat, mollitia, obcaecati totam eum aperiam quod doloremque eveniet dolor, facilis esse temporibus illo repellendus exercitationem rerum autem perspiciatis!</p>
            <div class="right__reserve">
              <p><i class="fa-regular fa-copyright"></i>2023 MEDBUD</p>
            </div>
          </div>
        </div>
        <div class="links__together">
          <div class="footer__section">
            <div class="links">
              <div class="links__text">
                <ul>
                  <span></span>

                  <h1>Links</h1>
                </ul>
              </div>

              <ul>
                <li><a href="">Home</a></li>
                <li><a href="">About</a></li>
                <li><a href="">MedTips</a></li>
                <li><a href="">Services</a></li>
                <li><a href="">Contact</a></li>
                <li><a href="">Login</a></li>
              </ul>
            </div>
          </div>

          <div class="footer__section">
            <div class="service">
              <div class="service__text">
                <ul>
                  <span></span>
                  <h1>Service</h1>
                </ul>
              </div>
              <ul>
                <li><a href="">Appointment</a></li>
                <li><a href="">Appointment</a></li>
                <li><a href="">Appointment</a></li>
              </ul>
            </div>
          </div>
        </div>

        <div class="footer__section">
          <div class="others">
            <div class="others__text">
              <ul>
                <span></span>
                <h1>Others</h1>
              </ul>
            </div>

            <p>Follow us on Social Media</p>
            <div class="footer__icons">
              <ul>
                <li>
                  <a href=""><i class="fa-brands fa-square-instagram"></i></a>
                </li>
                <li>
                  <a href=""><i class="fa-brands fa-twitter"></i></a>
                </li>
                <li>
                  <a href=""><i class="fa-brands fa-facebook"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer> -->
    <script src="./script.js"></script>
</body>

</html>
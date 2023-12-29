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



    <!-- <section class="appointment__banner doctors--bg">
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
    </section> -->

    <section class="dashboard">
        <div class="dashboard__wrapper">
            <div class="dashboard__content">
                <div class="dashboard__nav">
                    <div class="dashboard__name">
                        <h2><?php echo $_SESSION['user_name'] ?></h2>
                        <h5>Patient</h5>
                    </div>

                    <div class="dashboard__side__nav">
                        <h4>CATEGORIES</h4>
                        <ul>
                            <li><a href="./dashboard.php"><i class="fa-regular fa-bookmark"></i>Dashboard</a></li>
                            <span></span>
                            <li><a href="./medical_record.php"><i class="fa-solid fa-notes-medical"></i>Medical Record</a></li>
                            <span></span>
                            <li><a href="#"><i class="fa-solid fa-user-doctor"></i>All Doctors</a></li>
                            <span></span>
                            <li><a href="./appointment.php"><i class="fa-regular fa-calendar"></i>Schedule Appointment</a></li>
                            <span></span>
                            <li><a href="./laboratory.php"><i class="fa-solid fa-flask-vial"></i>Laboratory Tests</a></li>
                            <div class="lower__buttons">
                                <a href="./login_form.php">
                                    <button class="logout__btn__animation">

                                        <div class="sign"><svg viewBox="0 0 512 512">
                                                <path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"></path>
                                            </svg></div>

                                        <div class="text">Logout</div>
                                    </button>
                                </a>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>




        <div class="users__table">

            <div class="dashboard__form__title">
                <div class="dashboard__form__title__text">
                    <h3>Doctors</h3>
                </div>

                <!-- <div class="dashboard__date" id="todayDate">
                    <h3>Today's Date</h3>
                    <h4> <?php
                            echo date('F j, Y');
                            ?></h4>
                </div> -->
            </div>


            <div class="doc__banner">
                <div class="container">
                    <div class="doc__banner__wrapper">
                        <div class="doc__banner__text">
                            <h2>MedBud Doctors</h2>
                            <!-- <h3><?php echo $_SESSION['user_name'] ?></h3> -->
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis vel minus in, quos perferendis nam quas reiciendis impedit maiores saepe.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>





    <section class="users">
        <div class="users__wrapper">
            <!-- <div class="users__content">
                <div class="users__nav">
                    <div class="users__name">
                        <h2><?php echo $_SESSION['user_name'] ?></h2>
                        <h5>Patient</h5>
                    </div>

                    <div class="users__side__nav">
                        <h4>CATEGORIES</h4>
                        <ul>
                            <li><a href="./dashboard.php"><i class="fa-regular fa-bookmark"></i>Dashboard</a></li>
                            <span></span>
                            <li><a href="./medical_record.php"><i class="fa-solid fa-notes-medical"></i>Medical Record</a></li>
                            <span></span>
                            <li><a href="#"><i class="fa-solid fa-user-doctor"></i>All Doctors</a></li>
                            <span></span>
                            <li><a href="./appointment.php"><i class="fa-regular fa-calendar"></i>Schedule Appointment</a></li>
                            <span></span>
                            <li><a href="./laboratory.php"><i class="fa-solid fa-flask-vial"></i>Laboratory Tests</a></li>
                        </ul>
                    </div>
                </div>
            </div> -->
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
                                            <a href="#">
                                                <h2>All Departments</h2><i class="fa-solid fa-caret-down"></i>
                                            </a>
                                        </div>

                                        <div class="doctor__search">
                                            <input type="text" id="searchInput" placeholder="Search specialization...">
                                        </div>
                                    </div>
                                    <li>
                                        <div class="doctors__list__container">
                                            <img src="./dist/components/img/doctors/Bosco-Favila-Czarina-OB.jpg" alt="">
                                            <div class="doctors__list__name">
                                                <div class="doctors__list__name__text">
                                                    <h4>Dr. Czarina Basco</h4>
                                                    <h6><i class="fa-solid fa-heart-pulse"></i>OB-Gyne</h6>
                                                </div>
                                            </div>
                                            <div class="doctors__list__schedule">
                                                <div class="doctors__list__schedule__text">
                                                    <h3>Consultation Hours:</h3>
                                                    <h5>Mon-Fri &#160; &#160; &#160; 8:00am - 3:00pm</h5>
                                                </div>
                                            </div>

                                            <div class="doctors__list__appointment__btn">
                                                <a href="#" class="show-section">View Profile <i class="fa-solid fa-eye"></i></a>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="doctors__list__container">
                                            <img src="./dist/components/img/doctors/Caranzo-1.jpg" alt="">
                                            <div class="doctors__list__name">
                                                <div class="doctors__list__name__text">
                                                    <h4>Dr. Jonathan Coranzo</h4>
                                                    <h6><i class="fa-solid fa-heart-pulse"></i>General Anesthesia</h6>
                                                </div>
                                            </div>
                                            <div class="doctors__list__schedule">
                                                <div class="doctors__list__schedule__text">
                                                    <h3>Consultation Hours:</h3>
                                                    <h5>Mon-Fri &#160; &#160; &#160; 8:00am - 3:00pm</h5>
                                                </div>
                                            </div>

                                            <div class="doctors__list__appointment__btn">
                                                <!-- <a href="">Make an appoinment</a> -->
                                                <a href="#" class="show-section">View Profile <i class="fa-solid fa-eye"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="doctors__list__container">
                                            <img src="./dist/components/img/doctors/Delgado-1.jpg" alt="">
                                            <div class="doctors__list__name">
                                                <div class="doctors__list__name__text">
                                                    <h4>Dr. Angelica Delgado</h4>
                                                    <h6><i class="fa-solid fa-heart-pulse"></i>General Surgery</h6>
                                                </div>
                                            </div>
                                            <div class="doctors__list__schedule">
                                                <div class="doctors__list__schedule__text">
                                                    <h3>Consultation Hours:</h3>
                                                    <h5>Mon-Fri &#160; &#160; &#160; 8:00am - 3:00pm</h5>
                                                </div>
                                            </div>

                                            <div class="doctors__list__appointment__btn">
                                                <!-- <a href="">Make an appoinment</a> -->
                                                <a href="#" class="show-section">View Profile <i class="fa-solid fa-eye"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="doctors__list__container">
                                            <img src="./dist/components/img/doctors/Tang-Hervin-IM-Cardio-1.jpg" alt="">
                                            <div class="doctors__list__name">
                                                <div class="doctors__list__name__text">
                                                    <h4>Dr. Hervin Tang</h4>
                                                    <h6><i class="fa-solid fa-heart-pulse"></i>IM - Cardiology</h6>
                                                </div>
                                            </div>
                                            <div class="doctors__list__schedule">
                                                <div class="doctors__list__schedule__text">
                                                    <h3>Consultation Hours:</h3>
                                                    <h5>Mon-Fri &#160; &#160; &#160; 8:00am - 3:00pm</h5>
                                                </div>
                                            </div>

                                            <div class="doctors__list__appointment__btn">
                                                <a href="#" class="show-section">View Profile <i class="fa-solid fa-eye"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="doctors__list__container">
                                            <img src="./dist/components/img/doctors/tolentino-arnel-MD-1.jpg-1.png" alt="">
                                            <div class="doctors__list__name">
                                                <div class="doctors__list__name__text">
                                                    <h4>Dr. Arnel Tolentino</h4>
                                                    <h6><i class="fa-solid fa-heart-pulse"></i>ENT-HNS</h6>
                                                </div>
                                            </div>
                                            <div class="doctors__list__schedule">
                                                <div class="doctors__list__schedule__text">
                                                    <h3>Consultation Hours:</h3>
                                                    <h5>Mon-Fri &#160; &#160; &#160; 8:00am - 3:00pm</h5>
                                                </div>
                                            </div>

                                            <div class="doctors__list__appointment__btn">
                                                <a href="#" class="show-section">View Profile <i class="fa-solid fa-eye"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="doctors__list__container">
                                            <img src="./dist/components/img/doctors/tolentino-arnel-MD-1.jpg-1.png" alt="">
                                            <div class="doctors__list__name">
                                                <div class="doctors__list__name__text">
                                                    <h4>Dr. C</h4>
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

                                            <div class="doctors__list__appointment__btn">
                                                <a href="#" class="make-appointment" data-doctor-name="Dr. Czarina Basco">Make an appointment</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="no__doctor__message">
                                    <p id="noDoctorsMessage" style="display: none;">No doctors available</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>



    <!-- FLOATING SECTION -->

    <div class="additional-section-container" id="section1">
        <div class="overlay"></div>
        <section class="additional-section">
            <button class="close-btn"><i class="fa-solid fa-x"></i></button>


            <div class="doctor__details__float">
                <div class="doctor__img__float">
                    <img src="./dist/components/img/doctors/Bosco-Favila-Czarina-OB.jpg" alt="">
                </div>

                <div class="doctor__name__float">
                    <h2>Dr. Czarina Basco</h2>
                    <h3><i class="fa-solid fa-heart-pulse"></i>OB-Gyne</h3>
                    <p>Consultation hours:</p>
                    <h4>Mon-Fri &#160; 8:00am - 3:00pm</h4>
                </div>
            </div>

            <div class="doctor__contact-pf__float">
                <div class="doctor__contact__float">
                    <h5><i class="fa-solid fa-phone"></i> 09673625919</h5>
                    <p>Contact Information</p>
                </div>

                <div class="doctor__pf__float">
                    <h5>₱500</h5>
                    <p>Professional Fee</p>
                </div>

                <div class="doctor__appointment__btn">
                    <!-- <a href="./appointment.php"><i class="fa-regular fa-calendar-days"></i>&#160;Appointment</a> -->
                    <a href="#" onclick="setAndRedirect('Dr. Czarina Basco', 'OB-Gyne')"><i class="fa-regular fa-calendar-days"></i>&#160;Make an Appointment</a>
                </div>
            </div>

        </section>
    </div>

    <div class="additional-section-container" id="section2">
        <div class="overlay"></div>
        <section class="additional-section">
            <button class="close-btn"><i class="fa-solid fa-x"></i></button>


            <div class="doctor__details__float">
                <div class="doctor__img__float">
                    <img src="./dist/components/img/doctors/Caranzo-1.jpg" alt="">
                </div>

                <div class="doctor__name__float">
                    <h2>Dr. Jonathan Coranzo</h2>
                    <h3><i class="fa-solid fa-heart-pulse"></i>General Anesthesia</h3>
                    <p>Consultation hours:</p>
                    <h4>Mon-Fri &#160; 8:00am - 3:00pm</h4>
                </div>
            </div>

            <div class="doctor__contact-pf__float">
                <div class="doctor__contact__float">
                    <h5><i class="fa-solid fa-phone"></i> 09673625919</h5>
                    <p>Contact Information</p>
                </div>

                <div class="doctor__pf__float">
                    <h5>₱500</h5>
                    <p>Professional Fee</p>
                </div>

                <div class="doctor__appointment__btn">
                    <!-- <a href="#"><i class="fa-regular fa-calendar-days"></i>&#160;Appointment</a> -->
                    <a href="#" onclick="setAndRedirect('Dr. Jonathan Coranzo', 'General Anesthesia')"><i class="fa-regular fa-calendar-days"></i>&#160;Make an Appointment</a>
                </div>
            </div>

        </section>
    </div>


    <div class="additional-section-container" id="section3">
        <div class="overlay"></div>
        <section class="additional-section">
            <button class="close-btn"><i class="fa-solid fa-x"></i></button>


            <div class="doctor__details__float">
                <div class="doctor__img__float">
                    <img src="./dist/components/img/doctors/Delgado-1.jpg" alt="">
                </div>

                <div class="doctor__name__float">
                    <h2>Dr. Angelica Delgado</h2>
                    <h3><i class="fa-solid fa-heart-pulse"></i>General Surgery</h3>
                    <p>Consultation hours:</p>
                    <h4>Mon-Fri &#160; 8:00am - 3:00pm</h4>
                </div>
            </div>

            <div class="doctor__contact-pf__float">
                <div class="doctor__contact__float">
                    <h5><i class="fa-solid fa-phone"></i> 09673625919</h5>
                    <p>Contact Information</p>
                </div>

                <div class="doctor__pf__float">
                    <h5>₱500</h5>
                    <p>Professional Fee</p>
                </div>

                <div class="doctor__appointment__btn">
                    <a href="#" onclick="setAndRedirect('Dr. Angelica Delgado', 'General Surgery')"><i class="fa-regular fa-calendar-days"></i>&#160;Make an Appointment</a>
                    <!-- <a href="#"><i class="fa-regular fa-calendar-days"></i>&#160;Appointment</a> -->
                </div>
            </div>

        </section>
    </div>


    <div class="additional-section-container" id="section4">
        <div class="overlay"></div>
        <section class="additional-section">
            <button class="close-btn"><i class="fa-solid fa-x"></i></button>


            <div class="doctor__details__float">
                <div class="doctor__img__float">
                    <img src="./dist/components/img/doctors/Tang-Hervin-IM-Cardio-1.jpg" alt="">
                </div>

                <div class="doctor__name__float">
                    <h2>Dr. Hervin Tang</h2>
                    <h3><i class="fa-solid fa-heart-pulse"></i>IM - Cardiology</h3>
                    <p>Consultation hours:</p>
                    <h4>Mon-Fri &#160; 8:00am - 3:00pm</h4>
                </div>
            </div>

            <div class="doctor__contact-pf__float">
                <div class="doctor__contact__float">
                    <h5><i class="fa-solid fa-phone"></i> 09673625919</h5>
                    <p>Contact Information</p>
                </div>

                <div class="doctor__pf__float">
                    <h5>₱500</h5>
                    <p>Professional Fee</p>
                </div>

                <div class="doctor__appointment__btn">
                    <a href="#"><i class="fa-regular fa-calendar-days"></i>&#160;Appointment</a>
                </div>
            </div>

        </section>
    </div>
    <div class="additional-section-container" id="section5">
        <div class="overlay"></div>
        <section class="additional-section">
            <button class="close-btn"><i class="fa-solid fa-x"></i></button>


            <div class="doctor__details__float">
                <div class="doctor__img__float">
                    <img src="./dist/components/img/doctors/tolentino-arnel-MD-1.jpg-1.png" alt="">
                </div>

                <div class="doctor__name__float">
                    <h2>Dr. Arnel Tolentino</h2>
                    <h3><i class="fa-solid fa-heart-pulse"></i>ENT-HNS</h3>
                    <p>Consultation hours:</p>
                    <h4>Mon-Fri &#160; 8:00am - 3:00pm</h4>
                </div>
            </div>

            <div class="doctor__contact-pf__float">
                <div class="doctor__contact__float">
                    <h5><i class="fa-solid fa-phone"></i> 09673625919</h5>
                    <p>Contact Information</p>
                </div>

                <div class="doctor__pf__float">
                    <h5>₱500</h5>
                    <p>Professional Fee</p>
                </div>

                <div class="doctor__appointment__btn">
                    <a href="#"><i class="fa-regular fa-calendar-days"></i>&#160;Appointment</a>
                </div>
            </div>

        </section>
    </div>








    <script src="./script.js"></script>
</body>

</html>
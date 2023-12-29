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
                            <li><a href="./doctor.php"><i class="fa-solid fa-user-doctor"></i>All Doctors</a></li>
                            <span></span>
                            <li><a href="./appointment.php"><i class="fa-regular fa-calendar"></i>Schedule Appointment</a></li>
                            <span></span>
                            <li><a href="#"><i class="fa-solid fa-flask-vial"></i>Laboratory Tests</a></li>
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
                    <h3>Laboratory</h3>
                </div>

                <div class="dashboard__date" id="todayDate">
                    <h3>Today's Date</h3>
                    <h4> <?php
                            echo date('F j, Y');
                            ?></h4>
                </div>
            </div>


            <div class="lab__banner">
                <div class="container">
                    <div class="lab__banner__wrapper">
                        <div class="lab__banner__text">
                            <h2>MedBud Laboratory Test</h2>
                            <!-- <h3><?php echo $_SESSION['user_name'] ?></h3> -->
                            <p>Health testing has never been easier, faster, and more personalized. Browse the most popular tests available from MedBud.</p>
                        </div>
                    </div>
                </div>
            </div>  

            <div class="lab__details__title">
                <h2>Laboratory Tests Available</h2>
            </div>


            <div class="labtest">
                <div class="container">
                    <div class="labtest__wrapper">

                        <div class="labtest__container">

                            <div class="labtest__item">

                                <div class="labtest__item__status">
                                    <h2>Most Acquired</h2>
                                </div>

                                <div class="labtest__item__title">
                                    <h2>Complete Blood Count (CBC)</h2>
                                    <h3>Measures different components of blood like red blood cells, white blood cells, and platelets.</h3>
                                </div>

                                <div class="labtest__item__price">
                                    <h3>Php 500</h3>
                                </div>

                                <div class="labtest__item__btn">
                                    <a href="#">Book Test</a>
                                </div>

                            </div>
                            <div class="labtest__item">

                                <div class="labtest__item__status">
                                    <h2>Most Acquired</h2>
                                </div>

                                <div class="labtest__item__title">
                                    <h2>Blood Chemistry Panel</h2>
                                    <h3>Checks various components in the blood, including electrolytes, glucose, and kidney and liver function markers.</h3>
                                </div>

                                <div class="labtest__item__price">
                                    <h3>Php 500</h3>
                                </div>

                                <div class="labtest__item__btn">
                                    <a href="#">Book Test</a>
                                </div>

                            </div>
                            <div class="labtest__item">

                                <div class="labtest__item__status">
                                    <h2>Most Acquired</h2>
                                </div>

                                <div class="labtest__item__title">
                                    <h2>Urinalysis</h2>
                                    <h3>Analyzes the content of urine for abnormalities, such as infections or kidney problems.</h3>
                                </div>

                                <div class="labtest__item__price">
                                    <h3>Php 500</h3>
                                </div>

                                <div class="labtest__item__btn">
                                    <a href="#">Book Test</a>
                                </div>

                            </div>
                            <div class="labtest__item">

                                <div class="labtest__item__status">
                                    <h2>Most Acquired</h2>
                                </div>

                                <div class="labtest__item__title">
                                    <h2>X-Ray</h2>
                                    <h3> Uses radiation to create images of internal body structures, commonly used for bones and detecting certain conditions.
                                    </h3>
                                </div>

                                <div class="labtest__item__price">
                                    <h3>Php 500</h3>
                                </div>

                                <div class="labtest__item__btn">
                                    <a href="#">Book Test</a>
                                </div>

                            </div>
                            <div class="labtest__item">

                                <div class="labtest__item__status">
                                    <h2>Most Acquired</h2>
                                </div>

                                <div class="labtest__item__title">
                                    <h2>Electrocardiogram (ECG)</h2>
                                    <h3>Records the electrical activity of the heart to detect abnormalities in heart rhythm or function.</h3>
                                </div>

                                <div class="labtest__item__price">
                                    <h3>Php 500</h3>
                                </div>

                                <div class="labtest__item__btn">
                                    <a href="#">Book Test</a>
                                </div>

                            </div>

                            <div class="labtest__item">

                                <div class="labtest__item__status">
                                    <h2>Most Acquired</h2>
                                </div>

                                <div class="labtest__item__title">
                                    <h2>Magnetic Resonance Imaging (MRI)</h2>
                                    <h3>Uses magnetic fields and radio waves to create detailed images of organs and tissues.</h3>
                                </div>

                                <div class="labtest__item__price">
                                    <h3>Php 500</h3>
                                </div>

                                <div class="labtest__item__btn">
                                    <a href="#">Book Test</a>
                                </div>

                            </div>
                            <div class="labtest__item">

                                <div class="labtest__item__status">
                                    <h2>Most Acquired</h2>
                                </div>

                                <div class="labtest__item__title">
                                    <h2>CT Scan</h2>
                                    <h3>Combines multiple X-ray images to create cross-sectional images of the body, useful for detailed views of internal organs. </h3>
                                </div>

                                <div class="labtest__item__price">
                                    <h3>Php 500</h3>
                                </div>

                                <div class="labtest__item__btn">
                                    <a href="#">Book Test</a>
                                </div>

                            </div>
                            <div class="labtest__item">

                                <div class="labtest__item__status">
                                    <h2>Most Acquired</h2>
                                </div>

                                <div class="labtest__item__title">
                                    <h2>Ultrasound</h2>
                                    <h3>Uses sound waves to produce images of organs, blood vessels, and tissues.</h3>
                                </div>

                                <div class="labtest__item__price">
                                    <h3>Php 500</h3>
                                </div>

                                <div class="labtest__item__btn">
                                    <a href="#">Book Test</a>
                                </div>

                            </div>
                            <div class="labtest__item">

                                <div class="labtest__item__status">
                                    <h2>Most Acquired</h2>
                                </div>

                                <div class="labtest__item__title">
                                    <h2>Bone Density Test</h2>
                                    <h3>Measures bone strength and density to diagnose osteoporosis or assess fracture risk.</h3>
                                </div>

                                <div class="labtest__item__price">
                                    <h3>Php 500</h3>
                                </div>

                                <div class="labtest__item__btn">
                                    <a href="#">Book Test</a>
                                </div>

                            </div>




                        </div>

                    </div>
                </div>
            </div>



        </div>
    </section>
</body>

</html>
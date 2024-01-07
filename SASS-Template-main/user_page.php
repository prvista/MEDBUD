<?php

@include 'config.php';

session_start();

if (!isset($_SESSION['user_name'])) {
   header('location:login_form.php');
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"> -->
   <title>MedBud</title>

   <link rel="stylesheet" href="./dist/scss/main.css">

   <link rel="icon" type="image/png" href="./dist/components/img/medbud__icon.png" />

   <script src="https://kit.fontawesome.com/29865ec48b.js" crossorigin="anonymous"></script>

   <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

   <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

</head>

<body>
   <!---------------------- HEADER NAV---------------------------------->
   <header class="header">
      <div class="container">
         <div class="header__wrapper" id="header">
            <div class="branding">
               <img src="./dist/components/img/logo__bgremoved_ver2.png" alt="" />
            </div>

            <div class="header__nav">
               <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="#about">About</a></li>

                  <li class="navi">
                     <a href="#service__link" class="place">Services <i class="fa-solid fa-caret-down"></i></a>
                     <div class="dropdown">
                        <ul>
                           <li><a href="./dashboard.php">Book Appointment</a></li>
                           <li><a href="#department">Department</a></li>
                        </ul>
                     </div>
                  </li>
                  <li><a href="">MedTips</a></li>
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

      <section class="text__content">
         <div class="container">
            <div class="text__content__wrapper">
               <div class="text__content__text">
                  <h1>Welcome to <span>MedBud, </span><?php echo $_SESSION['user_name'] ?></h1>
                  <h3>Your Healthcare Companion</h3>
               </div>
               <a href="#about" class="btn__new">Read More</a>
            </div>
         </div>
      </section>

      <!--Waves Container-->
      <div>
         <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
            <defs>
               <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
            </defs>
            <g class="parallax">
               <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7)" />
               <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
               <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
               <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
            </g>
         </svg>
      </div>
      <!--Waves end-->
   </header>



   <!----------------------  SECTION---------------------------------->
   <section class="about" id="about">
      <div class="container">
         <div class="about__wrapper">
            <div class="about__title">
               <h4>ABOUT<span></span></h4>
               <h2>WHAT IS MEDBUD</h2>
            </div>

            <div class="about__text">
               <div class="left__about">
                  <p>MedBud is a comprehensive healthcare app that integrates various essential features to streamline your medical experience.</p>
                  <ul>
                     <li>
                        <i class="fa-solid fa-check-double"></i>MedBud streamlines healthcare management through features like record management and scheduling, enhancing user experience"
                     </li>
                     <li>
                        <i class="fa-solid fa-check-double"></i>MedBud offers an intuitive interface for easy navigation and access to healthcare resources.
                     </li>
                     <li>
                        <i class="fa-solid fa-check-double"></i>MedBud provides diverse tools and channels to support users throughout their healthcare journey.
                     </li>
                  </ul>
               </div>
               <div class="right__about">
                  <p>Our platform offers a range of functionalities, including electronic medical record management, appointment scheduling, medical history and much more.</p>
                  <img src="./dist/components/img/about-icon.png" alt="">
               </div>
            </div>
         </div>
      </div>

      <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
         <path fill="#f2f6fb" fill-opacity="1" d="M0,160L48,149.3C96,139,192,117,288,112C384,107,480,117,576,112C672,107,768,85,864,74.7C960,64,1056,64,1152,58.7C1248,53,1344,43,1392,37.3L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
      </svg>
   </section>







   <!---------------------- WE PROVIDE BEST HEALTHCARE SERVICES SECTION---------------------------------->

   <section class="lower__banner">
      <div class="container">
         <div class="lower__banner__title">
            <h2 id="service__link">WE PROVIDE BEST HEALTHCARE SERVICES</h2>
            <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, quas!</h4>
         </div>
         <div class="lower__banner__wrapper">
            <div class="lower__banner__content">
               <div class="lower__banner__item">
                  <img src="./dist/components/img-mobile/appoint-icon.webp" alt="">
                  <div class="lower__banner__text">
                     <h5>Schedule Appointment</h5>
                     <p>Effortlessly schedule your appointments without additional costs. Our service empowers you to choose the most suitable day and time for your appointment.</p>
                  </div>
               </div>
               <div class="lower__banner__item">
                  <img src="./dist/components/img-mobile/result.webp" alt="">
                  <div class="lower__banner__text">
                     <h5>Lab Test Booking</h5>
                     <p>Optimize your lab test scheduling and save on additional costs with MedBud. Take control of your schedule and choose the most convenient day and time for you</p>
                  </div>
               </div>
               <div class="lower__banner__item">
                  <img src="./dist/components/img-mobile/medical-record.webp" alt="">
                  <div class="lower__banner__text">
                     <h5>Electronic Medical Record</h5>
                     <p>Effortlessly update your medical records, ensuring accurate and up-to-date information for better continuity of care within the MedBud platform.</p>
                  </div>
               </div>
               <div class="lower__banner__item">
                  <img src="./dist/components/img-mobile/medtips.webp" alt="">
                  <div class="lower__banner__text">
                     <h5>MedTips</h5>
                     <p>Access valuable medical tips and advice through MedBud's MedTips feature. Enhance your health knowledge and well-being with our curated information and recommendations.</p>
                  </div>
               </div>
            </div>

            <div class="lower__banner__opening">
               <div class="lower__banner__opening__text">
                  <h3>Opening Hours</h3>
                  <p>MedBud operates during standard business hours, typically from 9 AM to 5 PM, Monday through Friday. For precise opening hours or any changes, please refer to MedBud's official website or contact their customer service.</p>
                  <p>Mon-Fri &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 6am-10pm</p>
                  <span></span>
                  <p>Sat-Sun &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 6am-8pm</p>
                  <span></span>
                  <br>
                  <a href="./dashboard.php"><i class="fa-solid fa-phone"></i>Book Appointment</a>
               </div>
            </div>
         </div>
      </div>

      <!-- <svg class="features--shape" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 245">
      <path d="M0 216C102.4 171.7 369.9 84.3 837 58c386.2-21.8 808 52 1083-58v245H0v-29z"></path>
   </svg> -->
   </section>


   <div class="process">
      <div class="container">
         <div class="process__wrapper">
            <div class="process__description">
               <div class="process__text">
                  <b>How to get a <br>
                     consultation from us?</b>
                  <p>To access a consultation, initiate the appointment booking process through our platform and proceed with scheduling with ease.</p>
                  <a href="./dashboard.php" class="btn__process bg--green">Full Process <i class="fa-solid fa-chevron-right fa-sm"></i></a>
               </div>
            </div>
            <div class="flex__wrapper">
               <div class="flex__box">
                  <div class="consultation">
                     <img src="./dist/components/img-mobile" alt="">
                     <b>Upload Medical Record</b>
                  </div>
               </div>

               <div class="flex__box">
                  <div class="doctor">
                     <img src="./dist/components/img/" alt="">
                     <b>Select <br> Expert Doctor</b>
                  </div>
               </div>

               <div class="flex__box">
                  <div class="appointment">
                     <img src="./dist/components/img/" alt="">
                     <b>Book <br> Appointment</b>
                  </div>
               </div>
               <!-- <img src="./dist/components/img-mobile/medbud__logo (9).png" alt=""> -->


            </div>
         </div>
      </div>
   </div>



   <!---------------------- OUR DEPARTMENT SECTION---------------------------------->


   <section class="banner">
      <div class="container">
         <div class="banner__wrapper">
            <div class="upper__banner">
               <!-- <p>SERVICES</p> -->
               <b id="department">OUR DEPARTMENT</b>
            </div>
            <div class="flex__container">
               <div class="firColumn__box">
                  <div class="orthopaedics">
                     <div class="flex__box">
                        <div class="upper__img">
                           <img src="./dist/components/img/our-dept/specialities.webp" alt="">
                           <strong>01</strong>
                        </div>
                        <b>Primary Care & General Medicine</b>
                        <p>Primary care physicians have expertise in providing comprehensive and ongoing care for individuals with any health concern, regardless of its origin or organ system. They are trained to address undiagnosed signs, symptoms, or health issues in a first-contact setting.</p>
                        <div class="descrip__check">
                           <div class="check__one">
                              <ul>
                                 <li>
                                    <b><i class="fa-solid fa-check"></i>Hypertension</b>
                                    <b><i class="fa-solid fa-check"></i>Headaches</b>
                                    <b><i class="fa-solid fa-check"></i>Osteoarthritis</b>
                                 </li>
                              </ul>
                           </div>
                           <div class="check__two">
                              <ul>
                                 <li>
                                    <b><i class="fa-solid fa-check"></i>Abdominal pain</b>
                                    <b><i class="fa-solid fa-check"></i>Bronchitis</b>
                                    <!-- <b><i class="fa-solid fa-check"></i>Bones</b> -->
                                 </li>
                              </ul>
                           </div>
                        </div>

                        <a href="" class="btn bg--green">Get Appointment <i class="fa-solid fa-chevron-right fa-sm"></i></a>
                     </div>
                  </div>
                  <div class="dermatologist">
                     <div class="flex__box">
                        <div class="upper__img">
                           <img src="./dist/components/img/our-dept/ob-gyn-and-womens-health.webp" alt="">
                           <strong>02</strong>
                        </div>
                        <b>OB-GYN's & Women's Health</b>
                        <p>An OB/GYN, is a medical professional who specializes in pregnancy, childbirth, and women's reproductive health. They provide comprehensive care during pregnancy, including monitoring and delivering babies, as well as postpartum care.</p>
                        <div class="descrip__check">
                           <div class="check__one">
                              <ul>
                                 <li>
                                    <b><i class="fa-solid fa-check"></i>Pregnancy</b>
                                    <b><i class="fa-solid fa-check"></i>Childbirth</b>
                                    <b><i class="fa-solid fa-check"></i>Vaginitis</b>
                                 </li>
                              </ul>
                           </div>
                           <div class="check__two">
                              <ul>
                                 <li>
                                    <b><i class="fa-solid fa-check"></i>Female Reproductive System</b>
                                    <b><i class="fa-solid fa-check"></i>Abnormal uterine bleeding</b>
                                 </li>
                              </ul>
                           </div>
                        </div>
                        <a href="" class="btn bg--green">Get Appointment <i class="fa-solid fa-chevron-right fa-sm"></i></a>
                     </div>
                  </div>
               </div>
               <div class="secColumn__box">
                  <div class="surgery">
                     <div class="flex__box">
                        <div class="upper__img">
                           <img src="./dist/components/img/our-dept/diabetes-and-endocrinology.webp" alt="">
                           <strong>03</strong>
                        </div>
                        <b>Diabetes & Endocrinology</b>
                        <p>Diabetologists focus on diabetes and its treatment, while Endocrinologists specialize in the entire endocrine system, which includes the pancreas and insulin.</p>
                        <div class="descrip__check">
                           <div class="check__one">
                              <ul>
                                 <li>
                                    <b><i class="fa-solid fa-check"></i>Diabetes</b>
                                    <b><i class="fa-solid fa-check"></i>Thyroid diseases</b>
                                    <b><i class="fa-solid fa-check"></i>Infertility</b>
                                 </li>
                              </ul>
                           </div>
                           <div class="check__two">
                              <ul>
                                 <li>
                                    <b><i class="fa-solid fa-check"></i>Growth issues</b>
                                    <b><i class="fa-solid fa-check"></i>Metabolic disorders</b>
                                 </li>
                              </ul>
                           </div>
                        </div>
                        <a href="" class="btn bg--green">Get Appointment <i class="fa-solid fa-chevron-right fa-sm"></i></a>
                     </div>
                  </div>
                  <div class="corona__checkup">
                     <div class="flex__box">
                        <div class="upper__img">
                           <img src="./dist/components/img/our-dept/eye-and-vision-doctor.webp" alt="">
                           <strong>04</strong>
                        </div>
                        <b>Eye & Vision Doctor</b>
                        <p>Optometrists diagnose and treat patients' eyes, while ophthalmologists provide medical and surgical treatments for eye conditions.</p>
                        <div class="descrip__check">
                           <div class="check__one">
                              <ul>
                                 <li>
                                    <b><i class="fa-solid fa-check"></i>Eye Diseases </b>
                                    <b><i class="fa-solid fa-check"></i>Vision Problem</b>
                                    <b><i class="fa-solid fa-check"></i>Astigmatism.</b>
                                 </li>
                              </ul>
                           </div>
                           <div class="check__two">
                              <ul>
                                 <li>
                                    <b><i class="fa-solid fa-check"></i>Myopia (nearsightedness)</b>
                                    <b><i class="fa-solid fa-check"></i>Hyperopia (farsightedness)</b>
                                 </li>
                              </ul>
                           </div>
                        </div>
                        <a href="" class="btn bg--green">Get Appointment <i class="fa-solid fa-chevron-right fa-sm"></i></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <div class="styled-block"></div>



   </section>


   <!-- <svg class="features" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 245">
      <path d="M0 216C102.4 171.7 369.9 84.3 837 58c386.2-21.8 808 52 1083-58v245H0v-29z"></path>
   </svg> -->











   <!-- <section class="service">
      <div class="container">
         <div class="service__title">
            <h2>Our Services</h2>
            <h3>We offer</h3>
         </div>
         <div class="service__wrapper">
            <div class="service__item">
               <img src="./dist/components/img/about_img.png" alt="" />
               <h4>Service</h4>
               <a href="">Learn more <i class="fa-solid fa-arrow-right"></i></a>
            </div>
            <div class="service__item">
               <img src="./dist/components/img/about-icon.png" alt="" />
               <h4>Service</h4>
               <a href="">Learn more <i class="fa-solid fa-arrow-right"></i></a>
            </div>
            <div class="service__item">
               <img src="./dist/components/img/schedule.png" alt="" />
               <h4>Service</h4>
               <a href="">Learn more <i class="fa-solid fa-arrow-right"></i></a>
            </div>
         </div>
      </div>
   </section> -->


   <!---------------------- OUR DOCTORS SECTION---------------------------------->

   <section class="our__doctors">
      <div class="styled-block"></div>
      <div class="container">
         <div class="our__doctors__title">
            <h2 id="service">MEET OUR EXPERT DOCTORS</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, quam. </p>
         </div>
         <div class="our__doctors__wrapper">
            <div class="slider-nav">

               <div class="our__doctors__item">
                  <img src="./dist/components/img/doctors/new/Ng-Tsai-Chua-Ophtha-2-1.jpg" alt="">
                  <div class="our__doctors__item__text">
                     <h3>Dr. Aimee Tsai</h3>
                     <h4>Retina</h4>
                  </div>
               </div>

               <div class="our__doctors__item">
                  <img src="./dist/components/img/doctors/Caranzo-1.jpg" alt="">
                  <div class="our__doctors__item__text">
                     <h3>Dr. Jonathan Coranzo</h3>
                     <h4><i class="fa-solid fa-heart-pulse"></i>OB-Gyne</h4>
                  </div>
               </div>

               <div class="our__doctors__item">
                  <img src="./dist/components/img/doctors/Delgado-1.jpg" alt="">
                  <div class="our__doctors__item__text">
                     <h3>Dr. Angelica Delgado</h3>
                     <h4><i class="fa-solid fa-heart-pulse"></i>General Surgery</h4>
                  </div>
               </div>

               <div class="our__doctors__item">
                  <img src="./dist/components/img/doctors/Tang-Hervin-IM-Cardio-1.jpg" alt="">
                  <div class="our__doctors__item__text">
                     <h3>Dr. Hervin Tang</h3>
                     <h4><i class="fa-solid fa-heart-pulse"></i>General Anesthesiay</h4>
                  </div>
               </div>


               <div class="our__doctors__item">
                  <img src="./dist/components/img/doctors/tolentino-arnel-MD-1.jpg-1.png" alt="">
                  <div class="our__doctors__item__text">
                     <h3>Dr. Arnel Tolentino</h3>
                     <h4><i class="fa-solid fa-heart-pulse"></i>ENT-HNS</h4>
                  </div>
               </div>

               <div class="our__doctors__item">
                  <img src="./dist/components/img/doctors/Bosco-Favila-Czarina-OB.jpg" alt="">
                  <div class="our__doctors__item__text">
                     <h3>Dr. Czarina Basco</h3>
                     <h4><i class="fa-solid fa-heart-pulse"></i>OB-Gyne</h4>
                  </div>
               </div>

               <div class="our__doctors__item">
                  <img src="./dist/components/img/doctors/new/Urbino-Fernandez-Elsi-Lizette-Pedia.jpg" alt="">
                  <div class="our__doctors__item__text">
                     <h3>Dr. Elsie Uribino</h3>
                     <h4><i class="fa-solid fa-heart-pulse"></i>IM - Cardiology</h4>
                  </div>
               </div>

               <div class="our__doctors__item">
                  <img src="./dist/components/img/doctors/new/torres-castro-carmel-chtistine.jpg" alt="">
                  <div class="our__doctors__item__text">
                     <h3>Dr. Carmel Castro</h3>
                     <h4><i class="fa-solid fa-heart-pulse"></i>Pediatric Medicine</h4>
                  </div>
               </div>

               <div class="our__doctors__item">
                  <img src="./dist/components/img/doctors/new/tang-judith-ang-dermatology-5-1.jpg" alt="">
                  <div class="our__doctors__item__text">
                     <h3>Dr. Juding Tang</h3>
                     <h4><i class="fa-solid fa-heart-pulse"></i>Dermatology</h4>
                  </div>
               </div>

               <div class="our__doctors__item">
                  <img src="./dist/components/img/doctors/new/Joson-rafael-radio-1-1.jpg" alt="">
                  <div class="our__doctors__item__text">
                     <h3>Dr. Rafael Jason</h3>
                     <h4><i class="fa-solid fa-heart-pulse"></i>Radiology</h4>
                  </div>
               </div>

            </div>

            <div class="our__doctors__link">
               <a href="./doctor.php">See more</a>
            </div>
         </div>
      </div>
   </section>

   <div class="bottom__slider">
      <div class="bottom__slider__wrapper">
         <div class="bottom__slide">
            <img src="./dist/components/img/partners/25-percent-premium-income-growth.webp" alt="">
         </div>
         <div class="bottom__slide">
            <img src="./dist/components/img/partners/ddhlogo11.webp" alt="">
         </div>
         <div class="bottom__slide">
            <img src="./dist/components/img/partners/header-logo.webp" alt="">
         </div>
         <div class="bottom__slide">
            <img src="./dist/components/img/partners/LSNZHGM3NXD86PEFMBBT-5746c097.webp" alt="">
         </div>
         <div class="bottom__slide">
            <img src="./dist/components/img/partners/MediCard-Logo-colored-282-x-78-px-1.webp" alt="">
         </div>
         <div class="bottom__slide">
            <img src="./dist/components/img/partners/new-home-logo.webp" alt="">
         </div>
         <!-- <div class="bottom__slide">
            <img src="./dist/components/img/partners/New-Logo.webp" alt="">
         </div> -->
         <div class="bottom__slide">
            <img src="./dist/components/img/partners/ph_logo0.webp" alt="">
         </div>
         <div class="bottom__slide">
            <img src="./dist/components/img/partners/philcare-logo.webp" alt="">
         </div>
         <!-- Same bottom__slide Double -->
         <div class="bottom__slide">
            <img src="./dist/components/img/partners/SMJZJL98GVTWAFDGVUR4-588014c7.webp" alt="">
         </div>
         <div class="bottom__slide">
            <img src="./dist/components/img/partners/25-percent-premium-income-growth.webp" alt="">
         </div>
         <div class="bottom__slide">
            <img src="./dist/components/img/partners/ddhlogo11.webp" alt="">
         </div>
         <div class="bottom__slide">
            <img src="./dist/components/img/partners/header-logo.webp" alt="">
         </div>
         <div class="bottom__slide">
            <img src="./dist/components/img/partners/LSNZHGM3NXD86PEFMBBT-5746c097.webp" alt="">
         </div>
         <div class="bottom__slide">
            <img src="./dist/components/img/partners/MediCard-Logo-colored-282-x-78-px-1.webp" alt="">
            <div class="bottom__slide">
               <img src="./dist/components/img/partners/new-home-logo.webp" alt="">
            </div>
            <!-- <div class="bottom__slide">
            <img src="./dist/components/img/partners/New-Logo.webp" alt="">
         </div> -->
            <div class="bottom__slide">
               <img src="./dist/components/img/partners/ph_logo0.webp" alt="">
            </div>
            <div class="bottom__slide">
               <img src="./dist/components/img/partners/philcare-logo.webp" alt="">
            </div>
            <div class="bottom__slide">
               <img src="./dist/components/img/partners/SMJZJL98GVTWAFDGVUR4-588014c7.webp" alt="">
            </div>


         </div>
      </div>


      <!---------------------- FOOTER SECTION---------------------------------->
      <footer class="footer">
         <!-- <div class="upper__bg">
            <span></span>
        </div> -->
         <div class="container">


            <div class="footer__wrapper">
               <div class="footer__section">
                  <div class="footer__branding">
                     <img src="./dist/components/img/medbud__logo.png" alt="">
                     <p>non mauris non mauris non mauris non mauris non mauris non mauris non mauris non mauris non mauris</p>

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
                           <li><a href="">Book Appointment</a></li>
                           <li><a href="">Department</a></li>
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
                     <!-- <div class="telephone">
                            <div class="telephone__text">
                                <ul>
                                    <span></span>
                                    <h1>Telephone</h1>
                                    <p>09918380404</p>
                                </ul>
                            </div>
                        </div>

                        <div class="email">
                            <div class="email__text">
                                <ul>
                                    <span></span>
                                    <h1>Email</h1>
                                    <p>damimongblahblah@gmail.com</p>
                                </ul>
                            </div>
                        </div> -->
                  </div>
               </div>
            </div>
         </div>
         <div class="right__reserve">
            <span></span>
            <div class="right__text">
               <h1>MEDBUD </h1>
               <p><i class="fa-regular fa-copyright"></i>&nbsp;2023 All Rights Preserve</p>
            </div>

         </div>
      </footer>


      <!-- <div class="container__form">
      <div class="content">
         <h3>hi, <span>user</span></h3>
         <h1>welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
         <p>this is an user page</p>
         <a href="login_form.php" class="btn">login</a>
         <a href="register_form.php" class="btn">register</a>
         <a href="logout.php" class="btn">logout</a>
      </div>
   </div> -->

      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

      <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

      <script src="./script.js"></script>

      <script>
         $(document).ready(function() {
            $('.slider-nav').slick({
               slidesToShow: 5,
               slidesToScroll: 5,
               autoplay: false,
               dots: true,
               autoplaySpeed: 4000,
               responsive: [{
                     breakpoint: 768,
                     settings: {
                        slidesToShow: 2
                     }
                  },
                  {
                     breakpoint: 480,
                     settings: {
                        slidesToShow: 1
                     }
                  }
               ]
            });
         });
      </script>
</body>

</html>
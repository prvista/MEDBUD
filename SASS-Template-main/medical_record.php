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

                <div class="header__nav" id="head__red">
                    <ul>
                        <li><a href="./user_page.php">Home</a></li>
                        <li><a href="#about">About</a></li>

                        <li class="navi">
                            <a href="#service" class="place">Services</a>
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
    </header>

    <!-- <section class="appointment__banner">
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
    </section> -->

    <!-- <section class="users">
        <div class="users__wrapper">
            <div class="users__content">
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
                            <li><a href="./doctor.php"><i class="fa-solid fa-user-doctor"></i>All Doctors</a></li>
                            <span></span>
                            <li><a href="./appointment.php"><i class="fa-regular fa-calendar"></i>Schedule Appointment</a></li>
                            <span></span>
                            <li><a href="./laboratory.php"><i class="fa-solid fa-flask-vial"></i>Laboratory Tests</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section> -->


    <!-- NEW -->
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
                            <li><a href="#"><i class="fa-solid fa-notes-medical"></i>Medical Record</a></li>
                            <span></span>
                            <li><a href="./doctor.php"><i class="fa-solid fa-user-doctor"></i>All Doctors</a></li>
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
                    <h3>Medical Record</h3>
                </div>

                <div class="dashboard__date" id="todayDate">
                    <h3>Today's Date</h3>
                    <h4> <?php
                            echo date('F j, Y');
                            ?></h4>
                </div>
            </div>


            <div class="med__banner">
                <div class="container">
                    <div class="med__banner__wrapper">
                        <div class="med__banner__text">
                            <h2>MedBud Medical Record</h2>
                            <!-- <h3><?php echo $_SESSION['user_name'] ?></h3> -->
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis vel minus in, quos perferendis nam quas reiciendis impedit maiores saepe.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="lab__details__title">
                <h2>Laboratory Tests Available</h2>
            </div> -->

            <div class="patient__form">
                <div class="patient__form__container">
                    <div class="patient__form__wrapper">
                        <div class="patient__input">
                            <h2>Medical Record Form</h3>
                                <span></span>
                                <form action="../SASS-Template-main/medical_record.php" method="POST">
                                    <div class="info_title">
                                        <h3>Personal Information</h3>
                                    </div>
                                    <div class="personal__info">
                                        <div class="input_isolation">
                                            <label for="firstname">First name:</label>
                                            <input required id="firstname" type="text" name="first_name" placeholder="First name">
                                        </div>
                                        <div class="input_isolation">
                                            <label for="middlename">Middle name:</label>
                                            <input required id="middlename" type="text" name="middle_name" placeholder="Middle name">
                                        </div>
                                        <div class="input_isolation">
                                            <label for="lastname">Last name:</label>
                                            <input required id="lastname" type="text" name="last_name" placeholder="Last name">
                                        </div>
                                        <div class="date__age">
                                            <div class="input_isolation">
                                                <label for="datebirth">Date of Birth:</label>
                                                <input required id="datebirth" type="date" name="date_birth" placeholder="date of birth">
                                            </div>
                                            <div class="input_isolation">
                                                <label for="age">Age:</label>
                                                <input required id="age" type="text" name="age" placeholder="Age">
                                            </div>
                                        </div>
                                        <div class="gender__bloodtype">
                                            <div class="input_isolation">
                                                <label for="gender">Gender:</label>
                                                <select required name="gender" id="gender">
                                                    <option value="" disabled selected hidden>-- gender --</option>
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>
                                                    <option value="other">Other</option>
                                                </select>
                                            </div>
                                            <div class="input_isolation">
                                                <label for="bloodtype">Blood type:</label>
                                                <select required name="blood_type" id="bloodtype">
                                                    <option value="" disabled selected hidden>-- blood type --</option>
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="AB">AB</option>
                                                    <option value="O">O</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="input_isolation">
                                            <label for="nationality">Nationality:</label>
                                            <select name="nationality">
                                                <option value="">-- nationality --</option>
                                                <option value="afghan">Afghan</option>
                                                <option value="albanian">Albanian</option>
                                                <option value="algerian">Algerian</option>
                                                <option value="american">American</option>
                                                <option value="andorran">Andorran</option>
                                                <option value="angolan">Angolan</option>
                                                <option value="antiguans">Antiguans</option>
                                                <option value="argentinean">Argentinean</option>
                                                <option value="armenian">Armenian</option>
                                                <option value="australian">Australian</option>
                                                <option value="austrian">Austrian</option>
                                                <option value="azerbaijani">Azerbaijani</option>
                                                <option value="bahamian">Bahamian</option>
                                                <option value="bahraini">Bahraini</option>
                                                <option value="bangladeshi">Bangladeshi</option>
                                                <option value="barbadian">Barbadian</option>
                                                <option value="barbudans">Barbudans</option>
                                                <option value="batswana">Batswana</option>
                                                <option value="belarusian">Belarusian</option>
                                                <option value="belgian">Belgian</option>
                                                <option value="belizean">Belizean</option>
                                                <option value="beninese">Beninese</option>
                                                <option value="bhutanese">Bhutanese</option>
                                                <option value="bolivian">Bolivian</option>
                                                <option value="bosnian">Bosnian</option>
                                                <option value="brazilian">Brazilian</option>
                                                <option value="british">British</option>
                                                <option value="bruneian">Bruneian</option>
                                                <option value="bulgarian">Bulgarian</option>
                                                <option value="burkinabe">Burkinabe</option>
                                                <option value="burmese">Burmese</option>
                                                <option value="burundian">Burundian</option>
                                                <option value="cambodian">Cambodian</option>
                                                <option value="cameroonian">Cameroonian</option>
                                                <option value="canadian">Canadian</option>
                                                <option value="cape verdean">Cape Verdean</option>
                                                <option value="central african">Central African</option>
                                                <option value="chadian">Chadian</option>
                                                <option value="chilean">Chilean</option>
                                                <option value="chinese">Chinese</option>
                                                <option value="colombian">Colombian</option>
                                                <option value="comoran">Comoran</option>
                                                <option value="congolese">Congolese</option>
                                                <option value="costa rican">Costa Rican</option>
                                                <option value="croatian">Croatian</option>
                                                <option value="cuban">Cuban</option>
                                                <option value="cypriot">Cypriot</option>
                                                <option value="czech">Czech</option>
                                                <option value="danish">Danish</option>
                                                <option value="djibouti">Djibouti</option>
                                                <option value="dominican">Dominican</option>
                                                <option value="dutch">Dutch</option>
                                                <option value="east timorese">East Timorese</option>
                                                <option value="ecuadorean">Ecuadorean</option>
                                                <option value="egyptian">Egyptian</option>
                                                <option value="emirian">Emirian</option>
                                                <option value="equatorial guinean">Equatorial Guinean</option>
                                                <option value="eritrean">Eritrean</option>
                                                <option value="estonian">Estonian</option>
                                                <option value="ethiopian">Ethiopian</option>
                                                <option value="fijian">Fijian</option>
                                                <option value="filipino">Filipino</option>
                                                <option value="finnish">Finnish</option>
                                                <option value="french">French</option>
                                                <option value="gabonese">Gabonese</option>
                                                <option value="gambian">Gambian</option>
                                                <option value="georgian">Georgian</option>
                                                <option value="german">German</option>
                                                <option value="ghanaian">Ghanaian</option>
                                                <option value="greek">Greek</option>
                                                <option value="grenadian">Grenadian</option>
                                                <option value="guatemalan">Guatemalan</option>
                                                <option value="guinea-bissauan">Guinea-Bissauan</option>
                                                <option value="guinean">Guinean</option>
                                                <option value="guyanese">Guyanese</option>
                                                <option value="haitian">Haitian</option>
                                                <option value="herzegovinian">Herzegovinian</option>
                                                <option value="honduran">Honduran</option>
                                                <option value="hungarian">Hungarian</option>
                                                <option value="icelander">Icelander</option>
                                                <option value="indian">Indian</option>
                                                <option value="indonesian">Indonesian</option>
                                                <option value="iranian">Iranian</option>
                                                <option value="iraqi">Iraqi</option>
                                                <option value="irish">Irish</option>
                                                <option value="israeli">Israeli</option>
                                                <option value="italian">Italian</option>
                                                <option value="ivorian">Ivorian</option>
                                                <option value="jamaican">Jamaican</option>
                                                <option value="japanese">Japanese</option>
                                                <option value="jordanian">Jordanian</option>
                                                <option value="kazakhstani">Kazakhstani</option>
                                                <option value="kenyan">Kenyan</option>
                                                <option value="kittian and nevisian">Kittian and Nevisian</option>
                                                <option value="kuwaiti">Kuwaiti</option>
                                                <option value="kyrgyz">Kyrgyz</option>
                                                <option value="laotian">Laotian</option>
                                                <option value="latvian">Latvian</option>
                                                <option value="lebanese">Lebanese</option>
                                                <option value="liberian">Liberian</option>
                                                <option value="libyan">Libyan</option>
                                                <option value="liechtensteiner">Liechtensteiner</option>
                                                <option value="lithuanian">Lithuanian</option>
                                                <option value="luxembourger">Luxembourger</option>
                                                <option value="macedonian">Macedonian</option>
                                                <option value="malagasy">Malagasy</option>
                                                <option value="malawian">Malawian</option>
                                                <option value="malaysian">Malaysian</option>
                                                <option value="maldivan">Maldivan</option>
                                                <option value="malian">Malian</option>
                                                <option value="maltese">Maltese</option>
                                                <option value="marshallese">Marshallese</option>
                                                <option value="mauritanian">Mauritanian</option>
                                                <option value="mauritian">Mauritian</option>
                                                <option value="mexican">Mexican</option>
                                                <option value="micronesian">Micronesian</option>
                                                <option value="moldovan">Moldovan</option>
                                                <option value="monacan">Monacan</option>
                                                <option value="mongolian">Mongolian</option>
                                                <option value="moroccan">Moroccan</option>
                                                <option value="mosotho">Mosotho</option>
                                                <option value="motswana">Motswana</option>
                                                <option value="mozambican">Mozambican</option>
                                                <option value="namibian">Namibian</option>
                                                <option value="nauruan">Nauruan</option>
                                                <option value="nepalese">Nepalese</option>
                                                <option value="new zealander">New Zealander</option>
                                                <option value="ni-vanuatu">Ni-Vanuatu</option>
                                                <option value="nicaraguan">Nicaraguan</option>
                                                <option value="nigerien">Nigerien</option>
                                                <option value="north korean">North Korean</option>
                                                <option value="northern irish">Northern Irish</option>
                                                <option value="norwegian">Norwegian</option>
                                                <option value="omani">Omani</option>
                                                <option value="pakistani">Pakistani</option>
                                                <option value="palauan">Palauan</option>
                                                <option value="panamanian">Panamanian</option>
                                                <option value="papua new guinean">Papua New Guinean</option>
                                                <option value="paraguayan">Paraguayan</option>
                                                <option value="peruvian">Peruvian</option>
                                                <option value="polish">Polish</option>
                                                <option value="portuguese">Portuguese</option>
                                                <option value="qatari">Qatari</option>
                                                <option value="romanian">Romanian</option>
                                                <option value="russian">Russian</option>
                                                <option value="rwandan">Rwandan</option>
                                                <option value="saint lucian">Saint Lucian</option>
                                                <option value="salvadoran">Salvadoran</option>
                                                <option value="samoan">Samoan</option>
                                                <option value="san marinese">San Marinese</option>
                                                <option value="sao tomean">Sao Tomean</option>
                                                <option value="saudi">Saudi</option>
                                                <option value="scottish">Scottish</option>
                                                <option value="senegalese">Senegalese</option>
                                                <option value="serbian">Serbian</option>
                                                <option value="seychellois">Seychellois</option>
                                                <option value="sierra leonean">Sierra Leonean</option>
                                                <option value="singaporean">Singaporean</option>
                                                <option value="slovakian">Slovakian</option>
                                                <option value="slovenian">Slovenian</option>
                                                <option value="solomon islander">Solomon Islander</option>
                                                <option value="somali">Somali</option>
                                                <option value="south african">South African</option>
                                                <option value="south korean">South Korean</option>
                                                <option value="spanish">Spanish</option>
                                                <option value="sri lankan">Sri Lankan</option>
                                                <option value="sudanese">Sudanese</option>
                                                <option value="surinamer">Surinamer</option>
                                                <option value="swazi">Swazi</option>
                                                <option value="swedish">Swedish</option>
                                                <option value="swiss">Swiss</option>
                                                <option value="syrian">Syrian</option>
                                                <option value="taiwanese">Taiwanese</option>
                                                <option value="tajik">Tajik</option>
                                                <option value="tanzanian">Tanzanian</option>
                                                <option value="thai">Thai</option>
                                                <option value="togolese">Togolese</option>
                                                <option value="tongan">Tongan</option>
                                                <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
                                                <option value="tunisian">Tunisian</option>
                                                <option value="turkish">Turkish</option>
                                                <option value="tuvaluan">Tuvaluan</option>
                                                <option value="ugandan">Ugandan</option>
                                                <option value="ukrainian">Ukrainian</option>
                                                <option value="uruguayan">Uruguayan</option>
                                                <option value="uzbekistani">Uzbekistani</option>
                                                <option value="venezuelan">Venezuelan</option>
                                                <option value="vietnamese">Vietnamese</option>
                                                <option value="welsh">Welsh</option>
                                                <option value="yemenite">Yemenite</option>
                                                <option value="zambian">Zambian</option>
                                                <option value="zimbabwean">Zimbabwean</option>
                                            </select>
                                        </div>
                                        <div class="input_isolation">
                                            <label for="Email">Email</label>
                                            <input id="email" type="text" name="email_address" placeholder="email address">
                                        </div>
                                        <div class="input_isolation">
                                            <label for="address">Address:</label>
                                            <input required id="address" type="text" name="home_address" placeholder="address">
                                        </div>
                                        <div class="input_isolation">
                                            <label for="contact">Contact No.</label>
                                            <input required id="contact" type="text" name="contact_no" placeholder="contact no.">
                                        </div>
                                    </div>
                                    <div class="info_title">
                                        <h3>Emergency Contact</h3>
                                    </div>
                                    <div class="emergency__contact">
                                        <h4>First Contact</h4>
                                        <div class="first__emer__contact">
                                            <div class="input_isolation">
                                                <label for="fullname">Full Name:</label>
                                                <input required id="fullname" type="text" name="emer_full_name_1" placeholder="full name">
                                            </div>
                                            <div class="input_isolation">
                                                <label for="relationship">Relationship:</label>
                                                <input required id="relationship" type="text" name="relationship_1" placeholder="relationship">
                                            </div>
                                            <div class="input_isolation">
                                                <label for="emer_contact">Contact No.</label>
                                                <input required id="emer_contact" type="text" name="emer_contact_1" placeholder="contact no.">
                                            </div>
                                        </div>
                                        <h4>Second Contact</h4>
                                        <div class="second__emer__contact">
                                            <div class="input_isolation">
                                                <label for="fullname">Full Name:</label>
                                                <input required id="fullname" type="text" name="emer_full_name_2" placeholder="full name">
                                            </div>
                                            <div class="input_isolation">
                                                <label for="relationship">Relationship:</label>
                                                <input required id="relationship" type="text" name="relationship_2" placeholder="relationship">
                                            </div>
                                            <div class="input_isolation">
                                                <label for="emer_contact">Contact No.</label>
                                                <input required id="emer_contact" type="text" name="emer_contact_2" placeholder="contact no.">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="info_title">
                                        <h3>Health Information</h3>
                                    </div>
                                    <div class="health__info">
                                        <label for="medicalcondition">Known Medical Condition:</label>
                                        <textarea name="known_medical_condition" id="" cols="30" rows="10" class="medical__condition"></textarea>
                                        <label for="allergies">Allergies:</label>
                                        <textarea name="allergies" id="" cols="30" rows="10" class="allergies"></textarea>
                                    </div>
                                    <div class="submit__btn">
                                        <a href="../patient-test/patient_index.php" class="input__cancel">Cancel</a>
                                        <input type="submit" class="input__submit" value="submit">
                                    </div>
                                </form>
                        </div>
                    </div>
                </div>
            </div>




        </div>
    </section>


</body>

</html>
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
                    <ul class="head__red">
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
                    <h3>Dashboard</h3>
                </div>

                <div class="dashboard__date" id="todayDate">
                    <h3>Today's Date</h3>
                    <h4> <?php
                            echo date('F j, Y');
                            ?></h4>
                </div>
            </div>



            <div class="dashboard__banner">
                <div class="container">
                    <div class="dashboard__banner__wrapper">
                        <div class="dashboard__banner__text">
                            <h2>Welcome! <?php echo $_SESSION['user_name'] ?></h2>
                            <p>Manage your health efficiently with the MedBud dashboard. Access your medical records, schedule appointments, view test results, and explore personalized health recommendations—all in one place for your convenience.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="appointment__details__title">
                <h2>My Appointments</h2>
                <!-- <a href="./sample.php">DITOOOOOOOOOOOOOOO</a> -->
            </div>


            <div class="appointment__details">
                <div class="container">
                    <div class="appointment__details__wrapper">

                        <div class="appointment__details__information">
                            <div class="appointment__details__information__date-time">
                                <h2>Booked Appointment</h2>
                                <!-- <h3>Appointment Hour:</h3> -->


                                <?php
                                $servername = "localhost";
                                $username = "root"; // Change as per your MySQL credentials
                                $password = ""; // Change as per your MySQL credentials
                                $dbname = "doctor_appointments";

                                $conn = new mysqli($servername, $username, $password, $dbname);

                                // Check connection
                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                }

                                // Initially set variables to display a blank table
                                $patient = "";
                                $appointmentDate = "";
                                $appointmentTime = "";
                                $consultation = "";
                                $doctor = "";

                                // Read the latest appointment
                                $sql = "SELECT * FROM appointments ORDER BY created_at DESC LIMIT 1";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    // Fetch the latest appointment details
                                    while ($row = $result->fetch_assoc()) {
                                        $patient = $row["first_name"] . " " . $row["last_name"];
                                        $appointmentDate = $row["appointment_date"];
                                        $appointmentTime = $row["appointment_time"];
                                        $consultation = $row["consultation_type"];
                                        $doctor = $row["specialization"];
                                    }
                                }
                                ?>

                                <table class="table__app" border="1">
                                    <tr>
                                        <th>Patient</th>
                                        <th>Appointment Date</th>
                                        <th>Appointment Time</th>
                                        <th>Consultation</th>
                                        <th>Doctor</th>
                                    </tr>

                                    <?php
                                    if ($patient !== "") { // Display the latest appointment only if it exists
                                        echo "<tr>";
                                        echo "<td>" . $patient . "</td>";
                                        echo "<td>" . $appointmentDate . "</td>";
                                        echo "<td>" . $appointmentTime . "</td>";
                                        echo "<td>" . $consultation . "</td>";
                                        echo "<td>" . $doctor . "</td>";
                                        echo "</tr>";
                                    } else {
                                        echo "<tr><td colspan='5'>No appointments found</td></tr>";
                                    }
                                    ?>
                                </table>

                                <?php
                                $conn->close();
                                ?>




                                <h2>Booked Laboratory Test</h2>
                                <?php
                                $servername = "localhost";
                                $username = "root"; // Change as per your MySQL credentials
                                $password = ""; // Change as per your MySQL credentials
                                $dbname = "labtest_db";

                                $conn = new mysqli($servername, $username, $password, $dbname);

                                // Check connection
                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                }

                                $sql = "SELECT * FROM lab_tests ORDER BY id DESC LIMIT 1"; // Fetching the latest record
                                $result = $conn->query($sql);
                                ?>

                                <style>
                                    /* Include your CSS styles here for table formatting */
                                </style>

                                <div class="labtest__table">
                                    <table>
                                        <tr>
                                            <th>Patient</th>
                                            <th>Selected Test</th>
                                            <th>Appointment Date</th>
                                            <th>Appointment Time</th>
                                        </tr>
                                        <?php
                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                echo "<tr>";
                                                echo "<td>" . $row["first_name"] . " " . $row["last_name"] . "</td>";
                                                echo "<td>" . $row["selected_tests"] . "</td>";
                                                echo "<td>" . $row["test_date"] . "</td>";
                                                echo "<td>" . $row["test_time"] . "</td>";
                                                echo "</tr>";
                                            }
                                        } else {
                                            echo "<tr><td colspan='3'>No records found</td></tr>";
                                        }
                                        ?>
                                    </table>
                                </div>

                                <?php
                                $conn->close();
                                ?>

                            </div>

                            <!-- <div class="appointment__details__type">
                                <h2>
                                    High Blood
                                </h2>
                            </div>

                            <div class="appointment__details__doctor">
                                <h2>Dr. Reinier</h2>
                                <h3>Online Consultation</h3>
                            </div>

                            <div class="appointment__information__status">
                                <h2>
                                    Approved
                                </h2>
                            </div> -->
                        </div>



                    </div>
                </div>
            </div>

        </div>
    </section>
</body>

</html>
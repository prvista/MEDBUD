<?php

@include 'config.php';

session_start();

if (!isset($_SESSION['admin_name'])) {
  // header('location:login_form.php');
}


// COPY DOCTORS NAME
$doctorName = isset($_GET['doctor']) ? $_GET['doctor'] : 'No Doctor';


?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "doctor_appointments";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

function insertAppointment($conn)
{
  if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    // Retrieve and sanitize form data
    $first_name = isset($_POST['first_name']) ? $_POST['first_name'] : '';
    $last_name = isset($_POST['last_name']) ? $_POST['last_name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $appointment_date = isset($_POST['appointment_date']) ? $_POST['appointment_date'] : '';
    $appointment_time = isset($_POST['appointment_time']) ? $_POST['appointment_time'] : '';
    $hmo = isset($_POST['hmo']) ? $_POST['hmo'] : '';
    $consultation_type = isset($_POST['consultation_type']) ? $_POST['consultation_type'] : '';
    $specialization = isset($_POST['specialization']) ? $_POST['specialization'] : '';
    $message = isset($_POST['message']) ? $_POST['message'] : '';



    // Prepare and bind the SQL statement with placeholders
    $sql = "INSERT INTO appointments (first_name, last_name, email, phone, appointment_date, appointment_time, specialization, message, hmo, consultation_type)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);

    if (!$stmt) {
      die("Error: " . $conn->error); // Check for SQL syntax errors or problems with the SQL statement
    }

    // Bind parameters with form data and data types
    $stmt->bind_param("ssssssssss", $first_name, $last_name, $email, $phone, $appointment_date, $appointment_time, $specialization, $message, $hmo, $consultation_type);

    if ($stmt->execute()) {
      return true; // Return true if insertion is successful
    } else {
      echo "Error: " . $stmt->error; // Check for execution errors
    }

    $stmt->close();
  }
  return false; // Return false if form is not submitted
}

// Check if the form was submitted and appointment inserted successfully
if (insertAppointment($conn)) {
  echo "<script>alert('Appointment successfully booked!');</script>";
}

$conn->close();
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

            <li class="navi">
              <a href="#service" class="place">Services </a>
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

  <!-- <section class="appointment__banner appointment--bg">
    <div class="container">
      <div class="appointment__banner__wrapper">
        <div class="appointment__banner__text">
          <h2>Appointment</h2>
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
              <li><a href="./doctor.php"><i class="fa-solid fa-user-doctor"></i>All Doctors</a></li>
              <span></span>
              <li><a href="#"><i class="fa-regular fa-calendar"></i>Schedule Appointment</a></li>
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

      <!-- <div class="dashboard__form__title">

        <div class="dashboard__form__title__text">
          <h3>Doctors</h3>
        </div>

        <div class="dashboard__date" id="todayDate">
          <h3>Today's Date</h3>
          <h4> <?php
                echo date('F j, Y');
                ?></h4>
        </div>
      </div> -->


      <div class="app__banner admin__top">
        <div class="container">
          <div class="app__banner__wrapper">
            <div class="app__banner__text">
              <h2>MedBud Appointment</h2>
              <!-- <h3><?php echo $_SESSION['user_name'] ?></h3> -->
              <p>Book appointments hassle-free with MedBud's convenient scheduling system. Take control of your health journey by easily securing your appointments online.</p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <section class="users">
    <div class="users__wrapper">
      <div class="users__content">
        <!-- <div class="users__nav">
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
        </div> -->
      </div>
      <div class="users__table">



        <div class="appointment__form__title">
          <div class="appointment__form__title__text">
            <h3>Appointment Form</h3>
          </div>
        </div>
        <div class="appointment__form">
          <div class="container">
            <div class="appointment__form__wrapper">

              <form method="post" action="appointment.php" class="appointment-form">
                <div class="appointment__wrapper">
                  <label for="">Name</label>
                  <div class="appointment-name">
                    <!-- <input type="text" name="first_name" class="app__name" placeholder="First Name">
                    <input type="text" name="last_name" class="app__name" placeholder="Last Name"> -->
                    <input type="text" name="first_name" placeholder="First Name">
                    <input type="text" name="last_name" placeholder="Last Name">
                  </div>
                  <div class="appointment-contact">
                    <input type="email" name="email" class="form-control" placeholder="Enter Email">
                    <input type="tel" name="phone" class="form-control" placeholder="Phone Number">
                  </div>

                  <div class="appointment-consultaion">
                    <select class="form-select" name="consultation_type">
                      <option selected disabled>
                        Consultaion</option>
                      <option value="Online">Online</option>
                      <option value="Outpatient">Outpatient</option>
                    </select>

                    <select class="form-select" name="hmo">
                      <option selected disabled>
                        Select HMOs</option>
                      <option value="PhilHealth">PhilHealth</option>
                      <option value="Maxicare"> Maxicare</option>
                      <option value="Medicard"> Medicard</option>
                      <option value="Caritas Health Shield">
                        Caritas Health Shield</option>
                      <option value="PhilCare">PhilCare</option>
                      <option value="Pacific Cross Philippines"> Pacific Cross Philippines</option>
                      <option value="FWD Health"> FWD Health</option>
                    </select>


                  </div>


                  <div class="appointment-date">
                    <input type="date" class="form-control" placeholder="Enter Date" name="appointment_date">
                    <input type="time" class="form-control" placeholder="Enter Time" name="appointment_time">
                  </div>


                  <div class="appointment-doctor">
                    <div class="doctor-name-input">
                      <input type="text" id="doctorNameInput" placeholder="Doctor's Name" value="" name="doctor_name" readonly>
                      <select class="form-select" id="specializationSelect" name="specialization">
                        <option selected disabled>
                          Specialization</option>
                        <option value="Dr. Aimee Tsai - Retina">Retina</option>
                        <option value="Dr. Jonathan Coranzo - General Anesthesia">General Anesthesia</option>
                        <option value="Dr. Angelica Delgado - General Surgery">General Surgery</option>
                        <option value="Dr. Hervin Tang - IM - Cardiology">IM - Cardiology</option>
                        <option value="Dr. Arnel Tolentino - ENT-HNS">ENT-HNS</option>
                        <option value="Dr. Czarina Basco - OB-Gyne">OB-Gyne</option>
                        <option value="Dr. Elsie Uribino - Pediatrician">Pediatrician</option>
                        <option value="Dr. Carmel Castro - Pediatric Medicine">Pediatric Medicine</option>
                        <option value="Dr. Juding Tang - Dermatology">Dermatology</option>
                        <option value="Dr. Rafael Jason - Radiology">Radiology</option>
                        <option value="Dr. Raymundo Lo - Pathology">Pathology</option>
                        <option value="Dr. Lawrence Sarza - Cardiologist">Cardiologist</option>
                        <option value="Dr. Merenisa Usman - Gastroenterologist">Gastroenterologist</option>
                        <option value="Dr. Cecilia Germar - Psychiatry">Psychiatry</option>
                        <option value="Dr. Maria Yulde - General Pediatrics">General Pediatrics</option>
                        <option value="Dr. Angela Ong - Internal Medicine">Internal Medicine</option>
                        <option value="Dr. Artemio Pilar - IM Pulmonology">IM Pulmonology</option>
                        <option value="Dr. Barbara Pineda - General Opthalmology">General Opthalmology</option>
                        <option value="Dr. Jose Navarro - Neurology - Stroke">Neurology - Stroke</option>
                        <option value="Dr. Paulette Dominguez - IM Metabolism">IM Metabolism</option>
                        <option value="Dr. John Marinas - Urology - Endourology">Urology - Endourology</option>



                      </select>
                    </div>
                  </div>




                  <div class="appointment-message">
                    <textarea name="message" class="form-control" placeholder="Message"></textarea>
                  </div>

                  <div class="appointment-button">
                    <button type="button" class="btn btn-outline-secondary float-end me-2">Cancel</button>
                    <button type="submit" name="submit" class="btn btn-primary float-end" onclick="bookAppointment()">Book Appointment</button>
                  </div>
                </div>
              </form>

            </div>
          </div>
        </div>
        <br>
        <br>



      </div>
    </div>
  </section>


  <script>





    function bookAppointment() {
      var formData = new FormData(document.getElementById('appointmentForm'));

      // AJAX request
      var xhr = new XMLHttpRequest();
      xhr.onreadystatechange = function() {
        if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
          if (this.responseText.trim() === 'success') {
            alert('Appointment successfully booked!');
          } else if (this.responseText.trim() === 'exists') {
            alert('Appointment is already booked!');
          } else {
            alert('There was an error booking the appointment.');
          }
        }
      };

      xhr.open("POST", "appointment.php");
      xhr.send(formData);
    }
  </script>


  <script src="./script.js"></script>
</body>

</html>
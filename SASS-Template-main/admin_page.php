<?php

@include 'config.php';

session_start();

if (!isset($_SESSION['admin_name'])) {
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>MedBud Doctors</title>

   <link rel="stylesheet" href="./dist/scss/main.css">
   <link rel="icon" type="image/png" href="./dist/components/img/medbud__icon.png" />
   <script src="https://kit.fontawesome.com/29865ec48b.js" crossorigin="anonymous"></script>
</head>

<body>



   <section class="doctors__top__nav">
      <div class="doctors__top__nav__wrapper">
         <div class="doctors__name__top">
            <h4><i class="fa-solid fa-house-medical"></i> Dashboard</h4>
         </div>


         <div class="doctors__branding">
            <img src="./dist/components/img/logo__bgremoved_ver2.png" alt="">
         </div>
      </div>
   </section>






   <section class="dashboard">
      <div class="dashboard__wrapper">
         <div class="dashboard__content">
            <div class="dashboard__nav admin__top">
               <div class="doctors__name">
                  <h2>Doctor <?php echo $_SESSION['admin_name'] ?></h2>
               </div>

               <div class="dashboard__side__nav">
                  <h4>CATEGORIES</h4>
                  <ul>
                     <li><a href="#"><i class="fa-solid fa-file"></i>Appointments</a></li>
                     <span></span>
                     <li><a href=""><i class="fa-solid fa-clipboard"></i>Medical Records</a></li>
                     <span></span>
                     <li><a href="./admin_page_lab.php"><i class="fa-solid fa-address-book"></i>Booked Tests</a></li>
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
               <h3>Appointment Table</h3>
            </div>

            <div class="dashboard__date" id="todayDate">
               <h3>Today's Date</h3>
               <h4> <?php
                     echo date('F j, Y');
                     ?></h4>
            </div>
         </div>


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

         // CRUD operations...

         // Read Appointments
         $sql = "SELECT * FROM appointments";
         $result = $conn->query($sql);

         ?>


         <table class="table__app" border="1">
            <tr>
               <th>ID</th>
               <th>First Name</th>
               <th>Last Name</th>
               <th>Email</th>
               <th>Phone Number</th>
               <th>Appointment Date</th>
               <th>Appointment Time</th>
               <th>HMO's</th>
               <th>Consulation</th>
               <th>Doctor</th>
               <th>Message</th>
               <th>Time Submitted</th>
            </tr>

            <?php
            if ($result->num_rows > 0) {
               while ($row = $result->fetch_assoc()) {
                  echo "<tr>";
                  echo "<td>" . $row["id"] . "</td>";
                  echo "<td>" . $row["first_name"] . "</td>";
                  echo "<td>" . $row["last_name"] . "</td>";
                  echo "<td>" . $row["email"] . "</td>";
                  echo "<td>" . $row["phone"] . "</td>";
                  echo "<td>" . $row["appointment_date"] . "</td>";
                  echo "<td>" . $row["appointment_time"] . "</td>";
                  echo "<td>" . $row["hmo"] . "</td>";
                  echo "<td>" . $row["consultation_type"] . "</td>";
                  echo "<td>" . $row["specialization"] . "</td>";
                  echo "<td>" . $row["message"] . "</td>";
                  echo "<td>" . $row["created_at"] . "</td>";

                  echo "</tr>";
               }
            } else {
               echo "<tr><td colspan='10'>No appointments found</td></tr>";
            }
            ?>
         </table>

         <?php
         $conn->close();
         ?>








      </div>
   </section>
</body>

</html>
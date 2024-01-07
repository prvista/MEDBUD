<?php
@include 'config.php';

session_start();

if (!isset($_SESSION['admin_name'])) {
   header('location:login_form.php');
   exit(); // Terminate script after redirect
}

// Database connection configuration
$servername = "localhost";
$username = "root"; // Change as per your MySQL credentials
$password = ""; // Change as per your MySQL credentials
$dbname = "doctor_appointments";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}

// Handle delete operation
if (isset($_POST['delete'])) {
   $delete_id = $_POST['delete_id'];

   // Check if delete confirmation is received
   if (isset($_POST['confirm_delete']) && $_POST['confirm_delete'] === 'yes') {
      // SQL to delete a record
      $sql_delete = "DELETE FROM appointments WHERE id = $delete_id";

      if ($conn->query($sql_delete) === TRUE) {
         // Redirect to prevent resubmission on page refresh
         header("Location: {$_SERVER['PHP_SELF']}");
         exit();
      } else {
         echo "Error deleting record: " . $conn->error;
      }
   }
}

// Handle edit form submission via AJAX
if (isset($_POST['action']) && $_POST['action'] == 'update_appointment') {
   $edit_id = $_POST['edit_id'];
   $first_name = $_POST['first_name'];
   $last_name = $_POST['last_name'];
   // Other fields to be updated

   // Update the record in the database
   $sql_update = "UPDATE appointments SET first_name='$first_name', last_name='$last_name' WHERE id=$edit_id";

   if ($conn->query($sql_update) === TRUE) {
      echo json_encode(['status' => 'success']);
      exit();
   } else {
      echo json_encode(['status' => 'error', 'message' => 'Error updating record: ' . $conn->error]);
      exit();
   }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <title>MedBud Doctors</title>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>MedBud Doctors</title>

   <link rel="stylesheet" href="./dist/scss/main.css">
   <link rel="icon" type="image/png" href="./dist/components/img/medbud__icon.png" />
   <script src="https://kit.fontawesome.com/29865ec48b.js" crossorigin="anonymous"></script>
</head>

<style>
   /* CSS for table edit form */
   .edit-form {
      display: none;
   }

   .edit-form input[type="text"] {
      width: 100px;
      /* Adjust width as needed */
   }
</style>

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
                     <li><a href="./admin_medical.php"><i class="fa-solid fa-clipboard"></i>Medical Records</a></li>
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
               <h4><?php echo date('F j, Y'); ?></h4>
            </div>
         </div>

         <!-- <div class="med__banner">
            <div class="container">
               <div class="med__banner__wrapper">
                  <div class="med__banner__text">
                     <h2>MedBud Medical Record</h2>
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis vel minus in, quos perferendis nam quas reiciendis impedit maiores saepe.</p>
                  </div>
               </div>
            </div>
         </div> -->

         <?php
         $sql = "SELECT * FROM appointments";
         $result = $conn->query($sql);
         ?>

         <table class="table__app">
            <tr>
               <th>ID</th>
               <th>First Name</th>
               <th>Last Name</th>
               <th>Email</th>
               <th>Phone Number</th>
               <th>Appointment Date</th>
               <th>Appointment Time</th>
               <th>HMO's</th>
               <th>Consultation</th>
               <th>Doctor</th>
               <th>Message</th>
               <th>Time Submitted</th>
               <th>Action</th>
            </tr>

            <?php
            if ($result->num_rows > 0) {
               while ($row = $result->fetch_assoc()) {
                  echo "<tr>";
                  echo "<td>" . $row["id"] . "</td>";
                  echo "<td><input type='text' name='first_name' value='" . $row['first_name'] . "'></td>";
                  echo "<td><input type='text' name='last_name' value='" . $row['last_name'] . "'></td>";
                  echo "<td>" . $row["email"] . "</td>";
                  echo "<td>" . $row["phone"] . "</td>";
                  echo "<td>" . $row["appointment_date"] . "</td>";
                  echo "<td>" . $row["appointment_time"] . "</td>";
                  echo "<td>" . $row["hmo"] . "</td>";
                  echo "<td>" . $row["consultation_type"] . "</td>";
                  echo "<td>" . $row["specialization"] . "</td>";
                  echo "<td>" . $row["message"] . "</td>";
                  echo "<td>" . $row["created_at"] . "</td>";

                  echo "<td class='btn-container'>";
                  echo "<button onclick='saveChanges(" . $row['id'] . ")'>Save</button>";
                  echo "<form method='POST' onsubmit='return confirmDelete(" . $row['id'] . ")'><input type='hidden' name='delete_id' value='" . $row['id'] . "'><input type='hidden' name='confirm_delete'><button type='submit' name='delete'>Delete</button></form>";
                  echo "</td>";
                  echo "</tr>";
               }
            } else {
               echo "<tr><td colspan='13'>No appointments found</td></tr>";
            }
            ?>
         </table>

         <!-- Your HTML code -->
         <!-- Include any headers, navigations, etc. -->

         <script>
            function saveChanges(id) {
               var firstName = document.querySelector('input[name="first_name"]').value;
               var lastName = document.querySelector('input[name="last_name"]').value;
               // Retrieve other fields to be updated

               var xhttp = new XMLHttpRequest();
               xhttp.onreadystatechange = function() {
                  if (this.readyState == 4 && this.status == 200) {
                     var response = JSON.parse(this.responseText);
                     if (response.status === 'success') {
                        alert('Changes saved successfully.');
                        window.location.reload(); // Reload the page to reflect changes
                     } else {
                        alert('Error: ' + response.message);
                     }
                  }
               };
               xhttp.open('POST', '<?php echo $_SERVER["PHP_SELF"]; ?>', true);
               xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
               xhttp.send('action=update_appointment&edit_id=' + id + '&first_name=' + encodeURIComponent(firstName) + '&last_name=' + encodeURIComponent(lastName));
            }

            function confirmDelete(id) {
               var confirmation = confirm("Are you sure you want to delete appointment with ID: " + id + "?");
               if (confirmation) {
                  var confirmed = prompt("Type 'yes' to confirm deletion:");
                  if (confirmed && confirmed.toLowerCase() === 'yes') {
                     document.querySelector('input[name="confirm_delete"]').value = 'yes';
                     return true;
                  } else {
                     return false;
                  }
               } else {
                  return false;
               }
            }
         </script>

</body>

</html>
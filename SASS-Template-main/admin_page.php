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


   <section class="doctors">
      <div class="doctors__wrapper">
         <div class="doctors__content">
            <div class="doctors__nav">
               <div class="doctors__name">
                  <!-- <h1>Dashboard</h1> -->
                  <h2>Doctor <?php echo $_SESSION['admin_name'] ?></h2>
                  <h5>Pediatrician</h5>
               </div>

               <div class="doctors__side__nav">
                  <h4>CATEGORIES</h4>
                  <ul>
                     <li><a href="./sample.php"><i class="fa-solid fa-file"></i>Appointments</a></li>
                     <span></span>
                     <li><a href=""><i class="fa-solid fa-clipboard"></i>Medical Records</a></li>
                     <span></span>
                     <li><a href=""><i class="fa-solid fa-address-book"></i>Contact Info</a></li>


                  </ul>


                  <div class="lower__buttons">
                     <!-- <a href="">
                        <p>Settings</p>
                     </a> -->
                     <a href="./login_form.php">
                        <button class="logout__btn__animation">

                           <div class="sign"><svg viewBox="0 0 512 512">
                                 <path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"></path>
                              </svg></div>

                           <div class="text">Logout</div>
                        </button>
                     </a>
                  </div>


                  <!-- <ul>
                     <li><a href="">Settings</a></li>
                     <li><a href="./login_form.php">
                           <button class="Btn">

                              <div class="sign"><svg viewBox="0 0 512 512">
                                    <path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"></path>
                                 </svg></div>

                              <div class="text">Logout</div>
                           </button>
                        </a>
                     </li>
                  </ul> -->
               </div>
            </div>

            <!-- <div class="branding">
               <img src="./dist/components/img/logo__bgremoved_ver2.png" alt="">
            </div> -->
         </div>

         <div class="doctors__table">
            <table>
               <thead>
                  <tr>
                     <th>Column 1</th>
                     <th>Column 2</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td>Data 1</td>
                     <td>Data 2</td>
                  </tr>
               </tbody>
            </table>
         </div>
      </div>
   </section>
</body>

</html>
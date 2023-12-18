<?php
@include 'config.php';

session_start();

if (isset($_POST['submit'])) {
   $name = isset($_POST['name']) ? mysqli_real_escape_string($conn, $_POST['name']) : '';
   $email = isset($_POST['email']) ? mysqli_real_escape_string($conn, $_POST['email']) : '';
   $pass = isset($_POST['password']) ? md5($_POST['password']) : '';
   $cpass = isset($_POST['cpassword']) ? md5($_POST['cpassword']) : '';
   $user_type = isset($_POST['user_type']) ? $_POST['user_type'] : '';

   if ($email !== '' && $pass !== '') {
      $select = "SELECT * FROM user_form WHERE email = '$email' && password = '$pass'";

      $result = mysqli_query($conn, $select);

      if ($result && mysqli_num_rows($result) > 0) {
         $row = mysqli_fetch_array($result);

         if ($row['user_type'] == 'admin') {
            $_SESSION['admin_name'] = $row['name'];
            header('location:admin_page.php');
            exit();
         } elseif ($row['user_type'] == 'user') {
            $_SESSION['user_name'] = $row['name'];
            header('location:user_page.php');
            exit();
         }
      } else {
         $error[] = 'Incorrect email or password!';
      }
   } else {
      $error[] = 'Email and password are required!';
   }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>MedBud Login</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="./dist/scss/main.css">
   <link rel="icon" type="image/png" href="./dist/components/img/medbud__icon.png" />
   <script src="https://kit.fontawesome.com/29865ec48b.js" crossorigin="anonymous"></script>
</head>

<body>

   <!-- <div class="sign-in__form">
      <form action="" method="post">
         <div class="sign-in__form__wrapper">
            <?php
            if (isset($error)) {
               foreach ($error as $error) {
                  echo '<span class="error-msg">' . $error . '</span>';
               };
            };
            ?>
            <div class="login__left">
               <h2>MEDBUD</h2>
               <img src="../SASS-Template-main/dist/components/img/logo__bgremoved_ver2.png" alt="">
            </div>

            <div class="login__right">
               <h3>LOGIN</h3>
               <input type="email" name="email" required placeholder="Enter your email">
               <input type="password" name="password" required placeholder="Enter your password">
               <input type="submit" name="submit" value="login now" class="form-btn">
               <p>don't have an account? <a href="register_form.php">register now</a></p>
            </div>
         </div>
      </form>
   </div> -->
   <div class="sign-in__form">
      <form action="" method="post">
         <div class="sign-in__form__wrapper">
            <div class="login__left">
               <!-- <h2>MEDBUD</h2> -->
               <img src="../SASS-Template-main/dist/components/img/logo__bgremoved_ver2.png" alt="">
            </div>

            <div class="login__right">
               <h3>Log In</h3>
               <?php
               if (isset($error) && is_array($error)) {
                  foreach ($error as $singleError) {
                     echo '<span class="error-msg">' . $singleError . '</span>';
                  };
               } else if (isset($error)) {
                  echo '<span class="error-msg">' . $error . '</span>';
               }
               ?>
               <input type="email" name="email" required placeholder="Enter your email">
               <!-- <i class="fa-solid fa-envelope"></i> -->
               <input type="password" name="password" required placeholder="Enter your password">
               <!-- <i class="fa-solid fa-lock"></i> -->
               <!-- <i class="fa-regular fa-eye-slash"></i> -->
               <input type="submit" name="submit" value="login now" class="form-btn">
               <p>don't have an account? <a href="register_form.php">register now</a></p>
            </div>
         </div>
      </form>
   </div>




</body>

</html>
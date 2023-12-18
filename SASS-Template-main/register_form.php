<?php

@include './config.php';

if (isset($_POST['submit'])) {

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if (mysqli_num_rows($result) > 0) {

      $error[] = 'user already exist!';
   } else {

      if ($pass != $cpass) {
         $error[] = 'password not matched!';
      } else {
         $insert = "INSERT INTO user_form(name, email, password, user_type) VALUES('$name','$email','$pass','$user_type')";
         mysqli_query($conn, $insert);
         header('location:login_form.php');
      }
   }
};


?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>MedBud Registration</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="./dist/scss/main.css">
   <link rel="icon" type="image/png" href="./dist/components/img/medbud__icon.png" />

</head>

<body>

   <!-- <div class="form-container">

      <form action="" method="post">

         <h3>register now</h3>

         <input type="text" name="name" required placeholder="Enter your name">
         <input type="email" name="email" required placeholder="Enter your email">
         <input type="password" name="password" required placeholder="Enter your password">
         <input type="password" name="cpassword" required placeholder="Confirm your password">
         <select name="user_type">
            <option value="user">patient</option>
            <option value="admin">doctor</option>
         </select>
         <input type="submit" name="submit" value="register now" class="form-btn">
         <p>already have an account? <a href="login_form.php">login now</a></p>
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
               <h3>Register</h3>
               <?php
               if (isset($error)) {
                  foreach ($error as $error) {
                     echo '<span class="error-msg">' . $error . '</span>';
                  };
               };
               ?>
               <input type="text" name="name" required placeholder="Enter your name">
               <input type="email" name="email" required placeholder="Enter your email">
               <input type="password" name="password" required placeholder="Enter your password">
               <input type="password" name="cpassword" required placeholder="Confirm your password">
               <!-- <select name="user_type">
                  <option value="user">patient</option>
                  <option value="admin">doctor</option>
               </select> -->
               <!-- <input type="radio" class="user_type"> -->

               <!-- <label><input type="radio" name="user_type" value="user">Patient</label>
               <label><input type="radio" name="user_type" value="admin">Doctor</label> -->

               <div class="radio-buttons">
                  <label class="radio-button">
                     <input type="radio" name="user_type" value="user">
                     <div class="radio-circle"></div>
                     <span class="radio-label">Patient</span>
                  </label>
                  <label class="radio-button">
                     <input type="radio" name="user_type" value="admin">
                     <div class="radio-circle"></div>
                     <span class="radio-label">Doctor</span>
                  </label>
               </div>
               <input type="submit" name="submit" value="register now" class="form-btn">
               <p>already have an account? <a href="login_form.php">login now</a></p>
      </form>
   </div>
   </div>
   </form>
   </div>

</body>

</html>
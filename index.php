<?php
session_start();

 if(isset($_SESSION['id'])) {
      header("location:home.php");
 }
?>

<!DOCTYPE html>

<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Login and Registration Form </title>
      <link rel="stylesheet" href="login.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>
      <div class="wrapper">
         <div class="title-text">
            <div class="title login">
               Login Form
            </div>
            <div class="title signup">
               Signup Form
            </div>
         </div>
         <div class="form-container">
            <div class="slide-controls">
               <input type="radio" name="slide" id="login" checked>
               <input type="radio" name="slide" id="signup">
               <label for="login" class="slide login">Login</label>
               <label for="signup" class="slide signup">Signup</label>
               <div class="slider-tab"></div>
            </div>
            <div class="form-inner">
              <form method="post" class="login">
                  <div class="field">
                     <input type="text" placeholder="Email Address" name="email2" required>
                  </div>
                  <div class="field">
                     <input type="password" placeholder="Password" name="password2" required>
                  </div>
                  <div class="pass-link">
                     <a href="#">Forgot password?</a>
                  </div>
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" name="submit2" value="Login">
                  </div>
                  <div class="signup-link">
                     Not a member? <a href="">Signup now</a>
                  </div>
               </form>
<?php
  include "dbconnect.php";

  if(isset($_POST['submit2']))
  {
    $email = $_POST['email2'];
    $pass = $_POST['password2'];

    $email_search = "SELECT * FROM users where email='$email'";
    $query = mysqli_query($con,$email_search);

    $email_count = mysqli_num_rows($query);

    if($email_count)
    {
      $email_pass = mysqli_fetch_assoc($query);

      $db_passs = $email_pass['password'];
	  
      $_SESSION['id'] = $email_pass['id'];

      $_SESSION["name"] = $email_pass['name'];

      $_SESSION["email"] = $email_pass['email'];

      $pass_decode = password_verify($pass,$db_passs);

      if(!$pass_decode)
      {
        ?>
          <script>
            alert("Password Incorrect");
          </script>
        <?php
      } else {
      	header("location:home.php");
      }
    } else {
        ?>
          <script>
            alert("Invalid Email");
          </script>
        <?php
      
    }
  }
?>
               <form method="post" class="signup">
                  <div class="field">
                     <input type="text" placeholder="Name" name="name" required>
                  </div>
                  <div class="field">
                     <input type="text" placeholder="Email Address" name="email" required>
                  </div>
                  <div class="field">
                     <input type="password" placeholder="Password" name="password" required>
                  </div>
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" name="submit" value="Signup">
                  </div>
               </form>
<?php
    include("dbconnect.php");

    if(isset($_POST['submit']))
    {
      $name = mysqli_real_escape_string($con, $_POST['name']);
      $email = mysqli_real_escape_string($con, $_POST['email']) ;
      $pass = mysqli_real_escape_string($con, $_POST['password']);

      $password = password_hash($pass,PASSWORD_BCRYPT);
      
      $emailquery = "SELECT * FROM users where email='$email'";
      $query= mysqli_query($con,$emailquery);

      $emailcount = mysqli_num_rows($query);

      if($emailcount >0){
        ?>
          <script>
            alert("Email Already Exist");
          </script>
        <?php
      }
      else
      {
        
        $insertquery = "INSERT INTO users (name, email, password) values ('$name','$email','$password')";

        $iquery = mysqli_query($con,$insertquery);
        if($iquery){
            ?>
            <script>
                alert("REGISTRATION SUCCESSFUL");
            </script>
            <?php
        } else {
            ?>
            <script>
                alert("FAILED TO REGISTER");
            </script>
            <?php
        }   
      }
   }
    $con->close();
?>
            </div>
         </div>
      </div>
      <script>
         const loginText = document.querySelector(".title-text .login");
         const loginForm = document.querySelector("form.login");
         const loginBtn = document.querySelector("label.login");
         const signupBtn = document.querySelector("label.signup");
         const signupLink = document.querySelector("form .signup-link a");
         signupBtn.onclick = (()=>{
           loginForm.style.marginLeft = "-50%";
           loginText.style.marginLeft = "-50%";
         });
         loginBtn.onclick = (()=>{
           loginForm.style.marginLeft = "0%";
           loginText.style.marginLeft = "0%";
         });
         signupLink.onclick = (()=>{
           signupBtn.click();
           return false;
         });
      </script>
   </body>
</html>
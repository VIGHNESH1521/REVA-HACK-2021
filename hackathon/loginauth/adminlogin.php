<?php
   ob_start();
   session_start();
?>

<?
   // error_reporting(E_ALL);
   // ini_set("display_errors", 1);
?>

<html lang = "en">

   <head>
      <title>Admin Login</title>
      <link href = "css/bootstrap.min.css" rel = "stylesheet">

      <style>
      body
      {
        background-image: url(https://www.knoxalliance.store/wp-content/uploads/2017/05/light-color-background-images-for-website-top-hd-images-for-free-light-color-background-images-for-website-1-1024x768.jpg);
        background-size: cover;
        background-attachment: fixed;
      }
      h1{
        font-size: 40px;
        font-family: Chalkduster, fantasy;
      }
      .btn-group button{
        float: right;
        border-radius: 12px;
        font-family: monospace;
        font-size: 15px;
        color: white;
        background: grey;
        width: 100px;
        height: 60px;
      }
      .btn-group button:hover{
        background-color: #000000;
      }

      </style>

   </head>

   <body>
     <div class="btn-group">
     <button onclick="goBack()"><h3>Back</h3></button>

     <script>
     function goBack() {
     window.history.back();
     }
     </script>
     </div>
     <h1><center><em>Admin login</em></center></h1>

     <br>

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <div class = "container form-signin">

         <?php
            $msg = '';

            if (isset($_POST['login']) && !empty($_POST['username'])
               && !empty($_POST['password'])) {

               if ($_POST['username'] == 'admin' &&
                  $_POST['password'] == 'imbatman') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();


                  echo header("location:admindata.php");
               }else {
                  $msg = 'Invalid Username or Password';
               }
            }
         ?>
      </div>

      <div class = "container">


         <form class = "form-signin" role = "form"
            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']);
            ?>" method = "post">
            <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
            <center>


            <input type = "text" class = "form-control"
               name = "username" placeholder = "Username"
               required autofocus></br>
            <input type = "password" class = "form-control"
               name = "password" placeholder = "Password" required>
               <br />
            <button class = "btn btn-lg btn-primary btn-block" type = "submit"
               name = "login">Login</button>
             </center>
         </form>



      </div>

   </body>
</html>

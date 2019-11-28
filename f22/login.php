<?php
    session_start();
    echo isset($_SESSION['login']);
    if(isset($_SESSION['login'])) {
      header('LOCATION:dashboard.php'); die();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>f22-LOGIN</title>
</head>
<body onload='document.myform.name.focus()'>
    <div id="linear-gradient"></div>

    <div class="card login">

        <header>
            <img src="avatar.jpg" alt="avatar" class="avatar" height="70px" width="70px">
            <p class="heading">Admin Login</p>
            <p>Sign in to your account</p>
        </header>
        
        <?php
          if(isset($_POST['submit'])){
           $username = $_POST['username']; $password = $_POST['password'];
           if($username === 'vsshahul737@gmail.com' && $password === 'password')
           {
             $_SESSION['login'] = true; header('LOCATION:dashboard.php'); die();
               } 
               else{
                 echo "<div class='alert alert-danger'>Username and Password do not match.</div>";
              }
           }
         ?>

        <form  name="myform" method="post" action="">
            <input type="email" placeholder="Enter Email Address"  name="username"><br>
            <input type="password" placeholder="password" name="password"><br>
            <div class="formFooter">
            <div class="floater">
            <input type="checkbox" name="remember" >
            Remember Me
            </div>
            <input type="submit" value="LOGIN" name="submit" class="btnLogin">
        </form>
        
        <footer>
           <div class="footerContent"> Connect with 
                <a href=""><i class="fa fa-twitter" style="font-size:26px"></i></a>
                <a href=""><i class="fa fa-facebook" style="font-size:26px"></i></a>
            </div>
        </footer>
        
    </div>
</body>
</html>
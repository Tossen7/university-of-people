<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>University of People | Registration</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
            <link rel="stylesheet" href="css/style.css">
            <link rel="icon" href="images/demo/uop.jpg">

  <title>Register</title>
   
    <link rel="stylesheet" href="layout/styles/lognreg.css">
    </head>
<body>
    <?php 
     if(isset($_POST['submit'])){
         if(!empty($_POST['username']) && !empty($_POST['lastname']) && !empty($_POST['firstname']) && !empty($_POST['password']) && !empty($_POST['email'])){
             $con = mysqli_connect("localhost","root","","uop") or die("noconnection");
         }
     }
    
    ?>
<div class="panel">
  <div class="state">
    <br><i><img alt="Logo UOP" src="images/demo/uop.jpg" style="radius:50px; width:20px;" ></i>
    <br>
    <h1>University of People</h1></div>
    <span style="color:rgb(176, 176, 176">
    Students Registration
    
    </span>
    
  <div class="form">
  <form action="welcome.php" method="POST">
    <input placeholder='First Name' type="text" name="firstname" id="fname" style="color:#636363;" autocomplete="off">
      <input placeholder='Last Name' type="text" name="lastname" id="lname" style="color:#636363;" autocomplete="off">
      <input placeholder='User Name' type="text" name="username" id="uname" style="color:#636363;" autocomplete="off">
      <input placeholder='Password' type="password" name="password" id="username" style="color:#636363;" autocomplete="off">
      <input placeholder='Email' type="text" name="email"  id="email" style="color:#636363;" autocomplete="off" required="required">
      
    
    <input type="submit" class="login" value="Register">
    </form>
  </div>
    <div class="line">
</div></div>
    <div>
    </div>
    <script src="js/main.js"></script>
    </body>
</html>



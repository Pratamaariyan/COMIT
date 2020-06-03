<?php
require 'functions.php';

// check register button
if (isset($_POST["register"])) {
    //check data success or failed
    if (registration($_POST) > 0) {
        echo "<script>
                alert('Registrasi admin berhasil');
                document.location.href = 'login.php';
            </script>";
    } else {
        echo "<script>
                alert('Registrasi admin gagal');
                document.location.href = 'registration.php';
            </script>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Registration</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/png" href="images/icons/favicon.png" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
<img class="wave" src="images/wave.png">
	<div class="container">
		<div class="img">
			<img src="images/image-register.svg">
		</div>
		<div class="login-content">
			<form action="" method="post">
				<img src="images/icons/avatar.svg">
				<h2 class="title">Admin Registration</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fa fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" name="username" required="" autocomplete="off" class="input">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fa fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" name="password" required="" class="input">
            	   </div>
                </div>
                <div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fa fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password Confirmation</h5>
           		    	<input type="password" name="conpassword" required="" class="input">
            	   </div>
            	</div>
            	<input type="submit" name="register" class="btn" value="Register">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/login.js"></script>





    <!-- <div class="box-login">
        <h2>Admin Registration</h2>
        <form action="" method="post">
            <div class="input-box">
                <input type="text" name="username" required="" autocomplete="off" placeholder="Username">
                <i class="fa fa-user"></i>
            </div>
            <div class="input-box">
                <input type="password" name="password" required="" placeholder="Password">
                <i class="fa fa-lock"></i>
            </div>
            <div class="input-box">
                <input type="password" name="conpassword" required="" placeholder="Password Confirmation">
                <i class="fa fa-lock"></i>
            </div>
            <button type="submit" name="register"> <i class="fa fa-send"></i>Register</button>
        </form>
    </div> -->

</body>

</html>
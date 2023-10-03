
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  
 
    <link rel="canonical" href="https://codepen.io/auritiwedesign/pen/gOaaLXV">
  
  
  
  
<style>
html{
	height: 100%;
	}

body {
	mergin: 0;
	padding: 0;
	font-family: 'Arial', sans-serif;
	background: linear-gradient(#03e9f4, #552441);	
}

.login-box {
	position: absolute;
	top: 50%;
	left: 50%;
	width: 400px;
	padding: 40px;
	transform: translate(-50%, -50%);
	background: rgba(0,0,0,.5);
	box-sizing: border-box;
	box-shadow: 0 15px 25px rgba(0,0,0,.6);
	border-radius: 10px;
}

.login-box h2 {
	margin: 0 0 30px;
	padding: 0;
	color: #F1EEE6;
	text-align: center;
}

.login-box .user-box {
	position: relative;
}

.login-box .user-box input {
	width: 100%;
	padding: 10px 0;
	font-size: 16px;
	color: #F1EEE6;
	margin-bottom: 30px;
	border: none;
	border-bottom: 1px solid #F1EEE6;
	outline: none;
	background: transparent;
}

.login-box .user-box label {
	position: absolute;
	top: 0;
	left: 0;
	padding: 10px 0;
	font-size: 16px;
	color: #F1EEE6;
	pointer-events: none;
	transition: .5s;
}

.login-box .user-box input:focus ~ label, .login-box .user-box input:valid ~ label {
	top: -20px; 
	left: 0px; 
	color: #03E9F4;
	font-size: 12px;
}


.login-box form button {
	position: relative;
	display: inline-block;
	padding: 10px 20px;
	color: #03E9F4;
	font-size: 16px;
	text-decoration: none;
	text-transform: uppercase;
	overflow: hidden;
	transition: .5s;
	margin-top: 40px;
	background: radial-gradient(#0ad7e3, #17404a);
	letter-spacing: 4px;
}

.login-box form button:hover {
	background: #03E9F4;
	color: #F1EEE6;
	border-radius: 5px;
	box-shadow: 0 0 5px #03E9F4,
							 0 0 25px #03E9F4,
							 0 0 50px #03E9F4,
							 0 0 100px #03E9F4;
}

.login-box button span {
	position: absolute;
	display: block;
}

.login-box button span:nth-child(1) {
  top: 0;
  left: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(90deg, transparent, #03e9f4);
  -webkit-animation: btn-anim1 1s linear infinite;
          animation: btn-anim1 1s linear infinite;
}

@-webkit-keyframes btn-anim1 {
  0% {
    left: -100%;
  }
  50%,100% {
    left: 100%;
  }
}

@keyframes btn-anim1 {
  0% {
    left: -100%;
  }
  50%,100% {
    left: 100%;
  }
}

.login-box span:nth-child(2) {
	top: -100%;
	right: 0;
	width: 2px;
	height: 100%;
	background: linear-gradient(180deg, transparent, #03E9F4);
	-webkit-animation: btn-anim2 1s linear infinite;
	        animation: btn-anim2 1s linear infinite;
	-webkit-animation-delay: .25s;
	        animation-delay: .25s;
}

@-webkit-keyframes btn-anim2 {
	0%{
		top: -100%;
	}
	50%,100% {
		top: 100%;
	}
}

@keyframes btn-anim2 {
	0%{
		top: -100%;
	}
	50%,100% {
		top: 100%;
	}
}

.login-box span:nth-child(3){
	bottom: 0;
	tight: -100%;
	width: 100%;
	height: 2px;
	background: linear-gradient(270deg, transparent, #03E9F4);
	-webkit-animation: btn-anim3 1s linear infinite;
	        animation: btn-anim3 1s linear infinite;
	-webkit-animation-delay: .5s;
	        animation-delay: .5s;
}

@-webkit-keyframes btn-anim3 {
	0%{
		right: -100%;
	}
	50%,100% {
		right: 100%;
	}
}

@keyframes btn-anim3 {
	0%{
		right: -100%;
	}
	50%,100% {
		right: 100%;
	}
}

.login-box span:nth-child(4) {
	bottom: -100%;
	left: 0;
	width: 2px;
	height: 100%;
	background: linear-gradient(360deg, transparent, #30E9F4);
	-webkit-animation: btn-anim4 1s linear infinite;
	        animation: btn-anim4 1s linear infinite;
	animation-dealy: .75s;
}

@-webkit-keyframes btn-anim4 {
  0% {
    bottom: -100%;
  }
  50%,100% {
    bottom: 100%;
  }
}

@keyframes btn-anim4 {
  0% {
    bottom: -100%;
  }
  50%,100% {
    bottom: 100%;
  }
}
</style>

 

  
  
</head>

<body translate="no">
  <div class="login-box">
	<h2>Login</h2>
	<form action="" method="POST" >
		<div class="user-box">
			<input type="text" name="email" required="">
			<label>Username</label>
		</div>
		<div class="user-box">
			<input type="password" name="pass">
			<label for="">Password</label>
		</div>
	  <button type="submit" class="bg-sky-500 hover:bg-sky-600 px-4 py-1 text-white rounded" name="submit">
                        Login
                    </button>
	</form>
</div>
  
<?php
require_once "db.php";

if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, $_POST['pass']);

 
    
    $query = "SELECT * FROM login WHERE email = '$email' AND pass = '$pass'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result)) {
        // Login successful, redirect to the thanks-3.html page
        ob_start();
     echo '<script>window.location.href = "wel.php";</script>';
        exit();
    } else {
        // Login failed, show an error message or redirect to an error page
        echo "Login failed. Invalid email or password.";
    }

    mysqli_close($conn);
}
?>

  
  
  
  
  
</body>

</html>

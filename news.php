<?php 


?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
<style type="text/css">
	body * {
    box-sizing: border-box;
    font-family: 'Open Sans', sans-serif
}

	body {
    background: linear-gradient(rgba(246, 247, 249, 0.8), rgba(246, 247, 249, 0.8)), url(images/kids1.jpg) no-repeat center center fixed;
    background-size: cover
}

.container {
    width: 100%;
    padding-top: 70px;
    padding-bottom: 100px
}

.frame {
    height: 510px;
    width: 400px;
    background: linear-gradient(rgba(35, 43, 85, 0.75), rgba(35, 43, 85, 0.95)), url(images/kids.jpg) no-repeat center center;
    background-size: cover;
    margin-left: auto;
    margin-right: auto;
    border-top: solid 1px rgba(255, 255, 255, .5);
    border-radius: 5px;
    box-shadow: 0px 2px 7px rgba(0, 0, 0, 0.2);
    overflow: hidden;
    transition: all .5s ease
}
.signin-active a {
    padding-bottom: 10px;
    color: #ffffff;
    text-decoration: none;
    border-bottom: solid 2px #1059FF;
    transition: all .25s ease;
    cursor: pointer
}

.signin-inactive a {
    padding-bottom: 0;
    color: rgba(255, 255, 255, .3);
    text-decoration: none;
    border-bottom: none;
    cursor: pointer
}
.form-signin {
    width: 430px;
    height: 375px;
    font-size: 16px;
    font-weight: 300;
    padding-left: 37px;
    padding-right: 37px;
    padding-top: 55px;
    transition: opacity .5s ease, transform .5s ease
}

.form-signin-left {
    transform: translateX(-400px);
    opacity: .0
}
.success {
    width: 80%;
    height: 150px;
    text-align: center;
    position: relative;
    top: -890px;
    left: 450px;
    opacity: .0;
    transition: all .8s .4s ease
}

.success-left {
    transform: translateX(-406px);
    opacity: 1
}

.successtext {
    color: #ffffff;
    font-size: 16px;
    font-weight: 300;
    margin-top: -35px;
    padding-left: 37px;
    padding-right: 37px
}

#check path {
    stroke: #ffffff;
    stroke-linecap: round;
    stroke-linejoin: round;
    stroke-width: .85px;
    stroke-dasharray: 60px 300px;
    stroke-dashoffset: -166px;
    fill: rgba(255, 255, 255, .0);
    transition: stroke-dashoffset 2s ease .5s, fill 1.5s ease 1.0s
}

#check.checked path {
    stroke-dashoffset: 33px;
    fill: rgba(255, 255, 255, .03)
}

.form-signin input{
    color: #ffffff;
    font-size: 13px
}

.form-styling {
    width: 80%;
    height: 45px;
    padding-left: 30px;
    margin-left: 35px;
    border: left;
    border-radius: 15px;
    margin-bottom: 20px;
    background: rgba(255, 255, 255, .2)
}

label {
    font-weight: 400;
    text-transform: uppercase;
    font-size: 18px;
    padding-left: 140px;
    padding-bottom: 10px;
    color: rgba(255, 255, 255, .7);
    display: block
}

:focus {
    outline: none
}

.form-signin input:focus
	textarea:focus {
    background: rgba(255, 255, 255, .3);
    border: none;
    padding-right: 40px;
    transition: background .5s ease
}

.forgot a{
    color: #e0ebeb;
    font-weight: 300;
    font-size: 13px;
    margin-left: 50px;
    text-decoration: none
}

.btn-signin:hover {
    cursor: pointer;
    background-color: #00cc66;
    transition: background-color .5s
}


.btn-signin {
    float: left;
    padding-top: 12px;
    width: 100%;
    height: 40px;
    border: none;
    border-radius: 15px;
    margin-top: -8px
}
.btn-animate {
    float: left;
    font-weight: 700;
    text-transform: uppercase;
    font-size: 16px;
    text-align: center;
    color: rgba(255, 255, 255, 1);
    padding-top: 9px;
    padding-left: none;
    width: 90%;
    height: 40px;
    border: none;
    border-radius: 15px;
    margin-top: 25px;
    margin-left: 20px;
    background-color: #80bfff;
    left: 15px;
    top: 0px;
    transition: all .5s ease, top .5s ease .5s, height .5s ease .5s, background-color .5s ease .75s
}
.btn-animate1 {
    float: center;
    font-weight: 700;
    text-transform: none;
    font-size: 20px;
    text-align: center;
    color: hsl(0, 0%, 100%);
    padding-top: 75px;
    width: none;
    height: 40px;
    border: none;
    border-radius: none;
    margin-top: 20px;
    left: 10px;
    top: 10px;
    transition: all .5s ease, top .5s ease .5s, height .5s ease .5s, background-color .5s ease .75s
}
.form-check-input.is-invalid~.form-check-label,
.was-validated .form-check-input:invalid~.form-check-label {
    color: #f54394
}
</style>

	<div class="container">
					<div class="frame">
						<form method="post">
							<div style="font-size: 20px;margin: 30px;color: white;">
							<h2 class="signin-active"><a class="btn">Login To Your Account</a></h2>
							</div>
							<form class="form-signin" action="" method="post" name="form">
								<label for="username">Username</label>
								<input class="form-styling" type="text" name="username" placeholder="Enter Your UserID/StudentID" />
								<label for="password">Password</label>
								<input class="form-styling" type="text" name="password" placeholder="Enter Your Password" />
                                <input type="checkbox" class="form-check-input">
            					<div class="btn-animate"> <a class="btn-signin">Login</a></div>
            					<div class="forgot"> <a href="#">Forgot your password?</a> </div>
								<div>
									<h3 class="btn-animate1"><a href="admission.php">Apply for Admission</a></h3>
								</div>
            				</form>
            			</form>
					</div>
	</div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style1.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
  <style>
    body {
    background: linear-gradient(rgba(246, 247, 249, 0.8), rgba(246, 247, 249, 0.8)), url(images/cscc.jpg) no-repeat center center fixed;
    background-size: cover;
    font-family: Arial, Helvetica, sans-serif;
}
*{
  box-sizing: border-box;
}
/*Footer style*/
.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  padding: 10px;
  width: 100%;
  background-color: #000d1a;
  color: white;
  text-align: center;
}
/*Login Button Style*/
div[class*=container1] {
  text-align: center;
  display: block;
  justify-content: center;
  align-items: center;
}
.container1 { background: #666699; }

.btn {
  position: relative;
  color: white;
  width: none;
  height: none;
  line-height: normal;
  transition: all 0.5s;
  span {
    transition: all 0.5s;
    tranform: scale(1, 1);
  }
}

.btn::before, .btn::after {
  content: '';
  position: absolute;
  transition: all 0.5s;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100%;

}

.btn-lgin::before {
  transition: transform 0.15s, 0.15s border-radius 0.15s;
  opacity: 20;
  background: rgba(255, 255, 255, 0.1);
  transform: scale(0.1, 0.1);
  border-radius: 50%;
}

.btn-lgin:hover::before {
  opacity: 10;
  transform: scale(1, 1);
  border-radius: 0;
}

.btn-lgin::after {
  transition: all 0.3s;
  border: 3px solid rgba(255, 255, 255, 0.3);
}

.btn-lgin:hover::after {
  opacity: 10;
}

/* Result Check style*/
 
 .flex-container {
  display: flex;
  width: 80%;
  padding-bottom:10px;
  padding-left:10px;
  padding-right:10px;
  margin-left: 150px;
}


 .presult {
    background: #ccccb3;
    text-align: center;
    width: 650px;
    height: 700px;
    padding-top: 10px;
    border: 5px solid  #00a170;
    box-sizing: border-box;
    margin-top: 60px;
    margin-left: 10px; 
    padding-right:10px;
}
 .aresult {
    /*background: #ccccb3;*/
    width: 450px;
    text-align: center;
    color: #008080;
    height: 550px;
    padding-top: 10px;
    border: 5px solid  #990033;
    box-sizing: border-box;
    margin-top: 60px;
    margin-left: 10px;
    padding-right:10px;
}
/*Checker*/
*{
  box-sizing: border-box;
}
 

/* style inputs and link buttons */
input,
.btnchk {
  width: 180%;
  padding: 10px;
  border: none;
  border-radius: 4px;
  margin: 10px 0;
  opacity: 0.85;
  display: inline-block;
  font-size: 17px;
  line-height: 20px;
  text-decoration: none; /* remove underline from anchors */
}


/* Two-column layout*/ 
.colchk {
  float: left;
  width: 50%;
  margin: auto;
  padding: 0 50px;
  margin-top: 6px;
}
.sr{
  width: 20%;
  padding: 10px;
  opacity: 0.9;
  display: inline-block;
  font-size: 17px;
  line-height: 20px;
}
.col-77 {
  width: 100%;
  margin-top: 30px;
}
.row-12:after {
  content: "";
  display: table;
  clear: both;
}

  </style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="home.php">Cloud School & College</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Academics
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

          <a class="dropdown-item" href="school.php">Teachers (School Section)</a>
          <a class="dropdown-item" href="college.php">Teachers (College Section)</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="academics.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Admission
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="admission.php">Apply Now</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Requirments</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="result.php">Result</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="events.php">Events</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="club.php">Clubs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
      <li class="nav-item">
            <a href="login/login.php">
            <div class="container1">
              <div class="btn btn-lgin">
                <span>Login</span>
              </div>
            </div>
          </a>
          </li>

    </ul>
  </div>
</nav>
<div class="flex-container">
  <div class="presult">
  <h3 style="font-size: 50px; color: #009933;">Public Result Stastistics</h3>
  <h4>Higher Secondary Certificate:</h4>
  <h4>Secondary School Certificate:</h4>
  <h4>Junior School Certificate:</h4>
  <h4>Primary School Certificate:</h4>

  
  </div>
  <div class="aresult">
    <h3>Check Your Admission Result</h3>
      <form action="/action_page.php">
        <div class="rowchk">
          <div class="colchk" style="margin-left: 50px">
            <input type="text" name="aid" placeholder="Admission ID" required>
            <input type="pin" name="pin" placeholder="PIN" required><br><br>
            <input type="submit" value="Submit">
            <div style="margin-top: 30px; text-align: center;">
              <textarea id="subject" name="subject" placeholder="Admission Status" style=" padding-left: 50px; height:120px; width: 250px"></textarea>
            </div>
          </div>
          </div>
        </div>
      </form>


<br>
<br>
<div class="footer">Copyright by Cloud School @2021, Developed by Mamunur Rashid Alex</div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
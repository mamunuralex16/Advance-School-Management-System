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
}

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

* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.columnclb {
  float: left;
  width: 25%;
  padding: 0 20px;
}

/* Remove extra left and right margins, due to padding */
.rowclb {margin: 0 -5px;}

/* Clear floats after the columns */
.rowclb:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .columnclb {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.cardst {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #b3003b;
}

.cardds {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #3973ac;
}

.cardct {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #ff4d4d;
}

.cardel {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #ff9933;
}

.cardgs {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #ff9933;
}
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
        <a href="login.php">
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
<h1 style="text-align: center; color: green">Student Clubs by Cloud School</h1>

<div class="rowclb">
  <div class="columnclb">
    <div class="cardst">
      <img src="images/itlogo.png" alt="No images found" width="75" height="120">
      <h2 style="text-align: left; color: white"> Science & IT Club</h2>
    </div>
  </div>

  <div class="columnclb">
    <div class="cardds">
      <img src="images/dslogo.png" alt="No images found" width="75" height="120">
      <h2 style="text-align: center; color: white">Debate Club</h2>
    </div>
  </div>
  
  <div class="columnclb">
    <div class="cardct">
      <img src="images/cclogo.png" alt="No images found" width="75" height="120">
      <h2 style="text-align: center; color: white">Cultural Club</h2>

    </div>
  </div>
  
  <div class="columnclb">
    <div class="cardel">
      <img src="images/elclogo.jpg" alt="No images found" width="75" height="120">
      <h2 style="text-align: center; color: white">Game & Sports Club</h2>
    </div>
  </div>
</div>

<br>
<br>

<div class="footer">Copyright by Cloud School @2021, Developed by Mamunur Rashid Alex</div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
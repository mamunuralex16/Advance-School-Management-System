<!DOCTYPE html>
<html>
<head>
  <title>About Cloud School</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style1.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>

    body {
    background: linear-gradient(rgba(246, 247, 249, 0.8), rgba(246, 247, 249, 0.8)), url(images/cscc.jpg) no-repeat center center fixed;
    background-size: cover
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

/* Create three equal columns that floats next to each other */
.columnab {
  float: left;
  width: 50%;
  padding: 15px;
  height: 350px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.rowab:after {
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
          <a class="dropdown-item" href="academics.php">Requirments</a>
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
<h2 class="text-center">About Cloud School</h2>
<div class="rowab">
  <div class="columnab" style="background-color:#66cc99;">
    <h1 style="text-align: center;">Why Study Here in?</h1>
    <p>Academic Facilities:</p>
    <p>Excellent Result:</p>
    <p>Strong cultural Identity:</p>
    <p>Leader in Games & Sports:</p>
    <p>Academic Facilities:</p>
  </div>
  <div class="columnab" style="background-color:#9fbfdf;">
    <h1 style="text-align: center;">Mission</h1>
    <p style="color:">"We take pride to be an educational institution which nurtures individual excellence and community well-being."</p>
  </div>
  <div class="columnab" style="background-color:#9fbfdf;">
    <h1 style="text-align: center;">Vission</h1>
    <p style="color: green">"We take pride to be an educational institution which nurtures individual excellence and community well-being."</p>
  </div>
  <div class="columnab" style="background-color:#ff80ff;">
    <h1 style="text-align: center;">Goal & Objective</h1>
    <p>"We take pride to be an educational institution which nurtures individual excellence and community well-being."</p>
  </div>
</div>
<br>
<br>
<br>

<div class="footer">
  Copyright by Cloud School @2021, Developed by Mamunur Rashid Alex
</div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
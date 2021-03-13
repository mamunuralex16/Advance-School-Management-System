<!DOCTYPE html>
<html>
<head>
  <title> Cloud School & College</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style1.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<style>
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

.notice {
  align-content: left;
  width: 99%;
  padding-top: 10px;
  padding-bottom: 10px;
  padding-left: 10px;
}
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 7px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

tr:hover {
background-color: #862d59;
}

.news {
  align-content: left;
  width: 98%;
  padding-top: 10px;
  padding-bottom: 10px;
  padding-left: 10px;
  padding-right: 10px;
  background-color: #009999;
}
  .marquee{
  background-color: #e0ebeb;
  color: green;
  font-weight: bold;
}
.gmap{
  float: left;
  width: 98%;
  padding: 10px;
  height: 250px;
}
.speach{
  float: left;
  width: 98%;
  padding-left: 10px;
  padding-right: 10px
  height: 250px;
}
.msg{
  color: white;
  padding-left: 10px;
  padding-right: none;
}
.txt{
  padding-left: 13px;
  padding-right: 5px;
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
            <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
      
      <div style="text-align: center; font-size: 30px; color: white; background: #262626; width: 99%">
        Welcome to<a href="home.php"><img src="images/slogo.png" height="5000%"></a> <font size="8">Cloud School & College</font>
      </div>
      <marquee class="marquee" behavior="alternate" style="width: 99%"> Admission 2022 application is available now; Deadline: 5th December 2021
      </marquee>

      <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/cscc.jpg" alt="No images found" width="1100" height="500">
            <div class="carousel-caption">
             
            </div>   
          </div>
          <div class="carousel-item">
            <img src="images/kids.jpg" alt="No images found" width="1100" height="500">
            <div class="carousel-caption">
       
            </div>   
          </div>
          <div class="carousel-item">
            <img src="images/sc1.jpg" alt="No images found" width="1100" height="500">
            <div class="carousel-caption">
              
            </div>  
          </div>
          <div class="carousel-item">
            <img src="images/sc2.jpg" alt="No images found" width="1100" height="500">
            <div class="carousel-caption">
            
            </div>   
          </div>
          <div class="carousel-item">
            <img src="images/sc3.jpg" alt="No images found" width="1100" height="500">
            <div class="carousel-caption">
          
            </div>   
          </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>
    <marquee class="marquee" behavior="alternate" style="width: 99%"> Admission test will be held on Friday 10 December 2021 at 9am.
    </marquee>

<div class="notice">     
    <div class="row" style="width: 101%">
      <div class="col-sm-6 bg-success">
        <div class="notice">
  <h2 class="text-white">Notice Board</h2>            
  <table class="table bg-white">
    <tbody>
      <tr style="color: #4775d1;">
      <th style="text-align: center;">Notice Title</th>
      <th style="text-align: center;">Date</th>
      </tr>
      <tr class="text-danger">
        <td>Holiday</td>
        <td style="text-align: center;">21 February 2021</td>
      </tr>
      <tr class="text-danger">
        <td>Monthly Exam</td>
        <td style="text-align: center;">01 March 2021</td>
      </tr>
      <tr style="color: red">
        <td>Last date of Payment</td>
        <td style="text-align: center;">01 March 2021</td>
      </tr>
      <tr>
        <td> <a href="notice_board.php" style="color: blue">See all</a></td>
      </tr>
    </tbody>
  </table>
      </div>
    </div>


      <div class="col-sm-6 bg-success">
        <div class="notice">
      <h2 class="text-white">Messages</h2>
      <div class="gmap" style="background-color: #ccb3ff;">            
      <marquee width="100%" direction="up" height="100%" scrollamount="2">
          <div class="row">
            <div class="speach" style="background-color: #79a6d2;">
              <h4 class="msg">Message of the Chairman </h4>
              <p class="msg">
                <img src="images/principle.jpg" alt="No images found" width="100" height="130" align="left">
                <p>"We take pride to be an educational institution which nurtures individual excellence and community well-being."</p>
              </p>
            </div>
            <div class="speach" style="background-color: #79d2a4;">
              <h4 class="msg">Message of the Principle</h4>
              <p class="msg">
                <img src="images/principle.jpg" alt="No images found" width="100" height="135" align="left">
                <p>"We take pride to be an educational institution which nurtures individual excellence and community well-being."</p>
              </p>
            </div>
            <div class="speach" style="background-color:#ffd480;">
              <h4 class="msg">Message of the Head Teacher</h4>
              <p class="msg">
                <img src="images/principle.jpg" alt="No images found" width="100" height="135" align="left">
                <p>"We take pride to be an educational institution which nurtures individual excellence and community well-being."</p>
              </p>
            </div>
          </div>
      </marquee>
      </div>
      </div>
    </div>

    <div class="col-sm-6 bg-success">
        <div class="news">
          <h2 class="text-white">News</h2>
          
          <marquee width="100%" direction="up" height="100%" scrollamount="2">            
          <table class="table bg-green">
          <tbody>
          <tr class="text-white">
        <td>Holiday</td>
        <td>21 February 2021</td>
      </tr>
      <tr class="text-white">
        <td>Monthly Exam</td>
        <td>01 March 2021</td>
      </tr>
      <tr style="color: #0c001a">
        <td>Last date of Payment</td>
        <td>01 March 2021</td>
      </tr>
      <tr>
        <td> <a href="notice_board.php" class="text-white">See all</a></td>
      </tr>
      </tbody>
      </table>
    </marquee>
  
      </div>
    </div>

    <div class="col-sm-6 bg-success">
      <div class="notice">
            <h2 class="text-white">Google Map Location</h2>            
            <div class="gmap" style="background-color: #336699;">
              <div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.697733512794!2d90.40220021470365!3d23.79377568456801!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c70e6702fb15%3A0x7dae9cb1e6025f73!2sSEU%20CSE%20Department!5e0!3m2!1sen!2sbd!4v1615574313374!5m2!1sen!2sbd" width="630" height="230" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              </div>
            </div>
      </div>
    </div>

    </div>
  </div>
</div>
<br>
<br>

<div class="footer">Copyright by Cloud School @2021, Developed by Mamunur Rashid Alex</div>

  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCOP7z1WfD0f4xRaHDBw2-l8Y6kd6WjC_4&callback=initMap"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
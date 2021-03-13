<!DOCTYPE html>
<html>
<head>
    <title>Admission Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style1.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<style type="text/css">
    body * {
    box-sizing: border-box;
    font-family: 'Open Sans', sans-serif
}

    body {
    background: linear-gradient(rgba(246, 247, 249, 0.8), rgba(246, 247, 249, 0.8)), url(images/cscc.jpg) no-repeat center center fixed;
    background-size: cover
}

* {
  box-sizing: border-box;
}
.containerad {
    width: 100%;
    padding-top: 10px;
    padding-bottom: 100px
}

.frame-ad {
    height: 1900px;
    width: 1100px;
    background: linear-gradient(rgba(11, 156, 49, 0.1), rgba(11, 156, 49, 0.4)), url(images/logocsc.png) no-repeat center center;
    background-size: contain;
    margin-left: auto;
    margin-right: auto;
    border-top: solid 1px rgba(255, 255, 255, .5);
    border-radius: 5px;
    box-shadow: 0px 2px 7px rgba(0, 0, 0, 0.2);
    overflow: hidden;
    transition: all .5s ease
}

.card {
  overflow: hidden;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 0;
  background: #fff;
}

.card-a {
  -webkit-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
  -moz-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
  box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
}

.card-a .card-heading {
  padding-top: 210px;
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

/* Admission form (submiting) */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: left;
}

input[type=submit]:hover {
  background-color: #d98c8c;
}

.col-25 {
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row-11:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
/* Footer */
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
<body>
    <div style="text-align: center; font-size: 30px; color: white; background: #262626; width: 100%">
            <a href="home.php"><img src="images/slogo.png"></a> <font size="6">Cloud School & College</font>
    </div>
        <h2 style="padding-top: 15px; text-align: center; color: green; font-size: 50px"> Admission Form</h2>
        <div class="containerad">
            <div class="frame-ad">
                <div class="card card-a">
                    <img src="images/bg-head-cscc.jpg" alt="No image found" height="250">
                </div>
                <div style="padding-left: 30px; width: 130%">
                  <form action="/action_page.php">
                  <div class="row-11">
                    <div class="col-25">
                      <label for="sname">1. Student's Name*</label>
                    </div>
                    <div class="col-75">
                      <input type="text" id="sname" name="studentname" placeholder="Your name.." required="*">
                    </div>
                  </div>

                  <div class="row-11">
                    <div class="col-25">
                      <label for="fname">2. Father's Name*</label>
                    </div>
                    <div class="col-75">
                      <input type="text" id="fname" name="fathername" placeholder="Your last name.." required="*">
                    </div>
                  </div>
                  <div class="row-11">
                    <div class="col-25">
                      <label for="mname">3. Mother's Name*</label>
                    </div>
                    <div class="col-75">
                      <input type="text" id="mname" name="mothername" placeholder="Your last name.." required="*">
                    </div>
                  </div>

                  <div class="row-11">
                    <div class="col-25">
                      <label for="bdate">4. Date of Birth*</label>
                    </div>
                    <div class="col-75">
                      <input type="date" id="bday" name="birthday" required="*">
                    </div>
                  </div>

                  <div class="row-11" style="width: 30%">
                    <div class="col-25">
                      <label for="classes">5. Gender</label>
                    </div>
                    <div class="col-75">
                      <select id="classes" name="classes">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="others">Others</option>
                      </select>
                    </div>
                  </div>

                  <div class="row-11" style="width: 38%">
                    <div class="col-25">
                      <label for="classes">6. Blood Group</label>
                    </div>
                    <div class="col-75">
                      <select id="bgroup" name="classes">
                        <option value="a+">A+</option>
                        <option value="a-">A-</option>
                        <option value="b+">B+</option>
                        <option value="b-">B-</option>
                        <option value="o+">O+</option>
                        <option value="o-">O-</option>
                        <option value="ab+">AB+</option>
                        <option value="ab-">AB-</option>
                      </select>
                    </div>
                  </div>

                  <div class="row-11" style="width: 30%">
                    <div class="col-25">
                      <label for="mname">7. Mobile*</label>
                    </div>
                    <div class="col-75">
                      <input type="text" id="snumber" name="spnumber" placeholder="Gurdian Phone Number" minlength="11" maxlength="11" required="*">
                    </div>
                  </div>

                  <div class="row-11" style="width: 25%">
                    <div class="col-25">
                      <label for="mname">8. Result (If Any)</label>
                    </div>
                    <div class="col-75">
                      <input type="text" id="sscresult" name="ssc" placeholder="SSC" minlength="2.5" maxlength="5.00" required="*">
                    </div>
                  </div>


                  <div class="row-11" style="width: 40%">
                    <div class="col-25">
                      <label for="email">9. Email (If Any)</label>
                    </div>
                    <div class="col-75">
                        <input style="width: 60%" type="email" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="Email Address..">
                      
                    </div>
                  </div>

                  <div class="row-11" style="width: 30%">
                    <div class="col-25">
                      <label for="classes">10. Class</label>
                    </div>
                    <div class="col-75">
                      <select id="classes" name="classes">
                        <option value="playgroup">Play Group</option>
                        <option value="kg">KG</option>
                        <option value="one">ONE</option>
                        <option value="two">TWO</option>
                        <option value="three">THREE</option>
                        <option value="four">FOUR</option>
                        <option value="Five">FIVE</option>
                        <option value="six">SIX</option>
                        <option value="seven">SEVEN</option>
                        <option value="eight">EIGHT</option>
                        <option value="nine">NINE</option>
                        <option value="eleven">ELEVEN</option>
                      </select>
                    </div>
                  </div>
                  <div class="row-11">
                    <div class="col-25">
                      <label for="prsaddress">11. Present Address*</label>
                    </div>
                    <div class="col-75">
                      <textarea id="subject" name="subject" placeholder="Write something.." style="height:100px" required="*"></textarea>
                    </div>
                  </div>

                  <div class="row-11">
                    <div class="col-25">
                      <label for="prmaddress">12. Permanent Address*</label>
                    </div>
                    <div class="col-75">
                      <textarea id="subject" name="subject" placeholder="Write something.." style="height:100px" required="*"></textarea>
                    </div>
                  </div>

                    <input type="checkbox" id="cbox" name="checkbox" value="checkbox">
                    I agree to all of the given information is correct, if any information is proved to be false then I will punished.
                  <br>
                  <br>
                  <div class="row-11">
                    <input type="submit" value="Submit">
                  </div>
                  </form>


                </div>

            </div>
        </div>

        <div class="footer">Copyright by Cloud School @2021, Developed by Mamunur Rashid Alex</div>
</body>
</html>
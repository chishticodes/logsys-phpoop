<?php
if (isset($_POST['submit'])) {
  //grabbing the data
  $uid = $_POST['uid'];
  $pwd = $_POST['pwd'];
  $pwdRepeat = $_POST['pwdrepeat'];
  $email = $_POST['email'];

  //instanciate signup contr class
  include "../classes/dbh.class.php";
  include "../classes/signup.class.php";
  include "../classes/signup-contr.class.php";

  $signup = new SignupContr($uid, $pwd, $pwdRepeat, $email);

  //running error handlers and user signup
  $signup->signUpUser();
  //going back to front page
  header('Location: ../index.php?error-none');
}

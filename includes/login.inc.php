<?php
if (isset($_POST['submit'])) {
  //grabbing the data
  $uid = $_POST['uid'];
  $pwd = $_POST['pwd'];

  //instanciate signup contr class
  include "../classes/dbh.class.php";
  include "../classes/login.class.php";
  include "../classes/login-contr.class.php";

  $login = new LoginContr($uid, $pwd);

  //running error handlers and user signup
  $login->LoginUser();
  //going back to front page
  header('Location: ../index.php?error-none');
}

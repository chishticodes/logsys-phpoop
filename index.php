<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>sign-up and log-in form</title>
</head>

<body>
  <nav class="navbar navbar-expand-sm navbar-light bg-light mb-4">
    <div class="container">
      <a class="navbar-brand" href="#">Bilal Chishti</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="/php-crash/feedback/index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/php-crash/feedback/feedback.html">Feedback</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/php-crash/feedback/about.html">About</a>
          </li>
        </ul>
        <ul class="navbar-nav me">
          <?php if (isset($_SESSION['userid'])) : ?>
            <li class="nav-item"><a href="#"><?php echo $_SESSION['usersuid'] ?></a></li>
            <li class="nav-item"><a href="includes/logout.inc.php" class="header-login-a">log out</a></li>
          <?php else : ?>


            <li class="nav-item"><a href="#">sign-up</a></li>
            <li class="nav-item"><a href="#" class="header-login-a">log-in</a></li>
          <?php endif ?>
        </ul>
      </div>
    </div>
  </nav>

  <main>
    <section class="sign-up">
      <div class="container d-flex flex-column align-items-center">
        <img src="img/myLogo.png" class="w-25 mb-3" alt="">
        <h2>Sign Up</h2>
        <p class="lead text-center">Sign up here</p>
        <form action="includes/signup.inc.php" method="post" class="mt-4 w-75">
          <div class="mb-3">
            <label for="uid" class="form-label">Name</label>
            <input type="text" class="form-control" id="uid" name="uid" placeholder="Enter your name">
          </div>
          <div class="mb-3">
            <label for="pwd" class="form-label">Password</label>
            <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter your password">
          </div>
          <div class="mb-3">
            <label for="pwdrepeat" class="form-label">Repeat Password</label>
            <input type="password" class="form-control" id="pwdrepeat" name="pwdrepeat" placeholder="Re-Enter your password">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
          </div>
          <div class="mb-3">
            <button class="btn btn-primary" type="submit" name="submit">sign up</button>
            <!-- <input type="submit" name="sign-up" value="sign-up" class="btn btn-dark w-100"> -->
          </div>
        </form>
      </div>
    </section>

    <section class="login">
      <div class="container d-flex flex-column align-items-center mt-4">
        <!-- <img src="img/myLogo.png" class="w-25 mb-3" alt=""> -->
        <h2>Sign in</h2>
        <p class="lead text-center">Sign in here</p>
        <form action="includes/login.inc.php" method="post" class="mt-4 w-75">
          <div class="mb-3">
            <label for="uid" class="form-label">Name</label>
            <input type="text" class="form-control" id="uid" name="uid" placeholder="Enter your name">
          </div>
          <div class="mb-3">
            <label for="pwd" class="form-label">Password</label>
            <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter your password">
          </div>
          <div class="mb-3">
            <button class="btn btn-success" type="submit" name="submit">Log in</button>
            <!-- <input type="submit" name="submit" value="Send" class="btn btn-dark w-100"> -->
          </div>
        </form>
      </div>
    </section>

  </main>

  <footer class="text-center mt-5">
    Copyright &copy; 2023
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>
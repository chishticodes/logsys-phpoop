<?php

class SignupContr extends Signup
{
  private $uid;
  private $pwd;
  private $pwdRepeat;
  private $email;

  public function __construct($uid, $pwd, $pwdRepeat, $email)
  {
    $this->uid = $uid;
    $this->pwd = $pwd;
    $this->pwdRepeat = $pwdRepeat;
    $this->email = $email;
  }

  public function signUpUser()
  {
    if ($this->emptyInput() == false) {
      header('Location: ../index.php?error=emptyinput');
      exit;
    }
    if ($this->inValidUid() == false) {
      header('Location: ../index.php?error=invalidusername');
      exit;
    }
    if ($this->invalidEmail() == false) {
      header('Location: ../index.php?error=invalidemail');
      exit;
    }
    if ($this->pwdMatch() == false) {
      header('Location: ../index.php?error=passworddoesnotmatch');
      exit;
    }
    if ($this->emptyInput() == false) {
      header('Location: ../index.php?error=useroremailtaken');
      exit;
    }

    $this->setUser($this->uid, $this->pwd, $this->email);
  }

  private function emptyInput()
  {
    $result = false;
    if (empty($this->uid) || empty($this->pwd) || empty($this->pwdRepeat) || empty($this->email)) {
      $result = false;
    } else {
      $result = true;
    }
    return $result;
  }

  private function inValidUid()
  {
    $result = false;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $this->uid)) {
      $result = false;
    } else {
      $result = true;
    }
    return $result;
  }

  private function invalidEmail()
  {
    $result = false;
    if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
      $result = false;
    } else {
      $result = true;
    }
    return $result;
  }

  private function pwdMatch()
  {
    $result = false;
    if ($this->pwd !== $this->pwdRepeat) {
      $result = false;
    } else {
      $result = true;
    }
    return $result;
  }
  private function uidTakenCheck()
  {
    $result = false;
    if (!$this->checkUser($this->uid, $this->email)) {
      $result = false;
    } else {
      $result = true;
    }
    return $result;
  }
}

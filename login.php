<?php
session_start();
$ok = 0;
  include_once('auth.php');
if ($_POST[firstname] !== '' && $_POST[lastname] !== '' && $_POST[password] !== '' && $_POST[submit] === "REGISTER")
{
  include ('create.php');
}
else if ($_POST[firstname] !== '' && $_POST[lastname] !== '' && $_POST[password] !== '' && $_POST[submit] === "DELETE")
{
  include ('create.php');
}
else if ($_POST[firstname] !== '' && $_POST[lastname] !== '' && $_POST[password] !== '' && $_POST[submit] === "LOGIN")
{
  $login = $_POST[firstname].$_POST[lastname];
  if (auth($login, $_POST[password]))
  {
    $_SESSION[logged_in] = array();
    $_SESSION[logged_in][firstname] = $_POST[firstname];
    $_SESSION[logged_in][lastname] = $_POST[lastname];
    $_SESSION[guest] = 0;
    $_SESSION[rights] = 1;
    $ok = 1;
    header("Location: http://localhost:8080/rush00/index.php");
  }
  else {
    $ok = 0;
    $_SESSION[logged_in] = NULL;
  }
}
else if ($_POST[submit] === "BROWSE AS GUEST") {
  $_SESSION[guest] = 1;
  $_SESSION = array();
  $_SESSION[logged_in][firstname] = 'guest';
  $_SESSION[logged_in][lastname] = 'what kind of guest has a last name?';
  $_SESSION[rights] = 0;
  $ok = 1;
  header("Location: http://localhost:8080/rush00/index.php");
}
if ($ok === 0)
{
  $_SESSION[logged_in] = NULL;
  header("Location: http://localhost:8080/rush00/index.php");
}
?>

<?php
$OK = 0;
include_once('auth.php');
function test_for_double_login($current, $database)
{
  foreach ($database as $value) {
    foreach ($value as $key => $subvalue) {
      if ($key == 'login' && $subvalue == $current)
      return (TRUE);
    }
  }
  return (FALSE);
}
function delete_user($current, &$database)
{
  foreach ($database as $topkey => $value) {
    foreach ($value as $key => $subvalue) {
      if ($key == 'login' && $subvalue == $current)
      {
        array_splice($database, $topkey, 1);
        return (TRUE);
      }
    }
  }
  return (FALSE);
}
function add_to_file($hash, $account, $file)
{
  $hash = hash("whirlpool", $_POST[password]);
  $account = array('login' => $_POST[firstname].$_POST[lastname],'password' => $hash);
  array_push($file ,$account);
  file_put_contents("../private/passwd", serialize($file));
  return (42);
}
if ($_POST[firstname] != '' && $_POST[lastname] != '' && $_POST[password] != '' && $_POST[submit] === "REGISTER")
{
  if (!file_exists("../private/passwd"))
  {
    $file = array();
    if (!file_exists("../private"))
    mkdir("../private");
    $OK = add_to_file($hash, $account, $file);
  }
  else
  {
    $file = file_get_contents("../private/passwd");
    $file = unserialize($file);
    if (test_for_double_login($_POST[firstname].$_POST[lastname],$file))
    $OK = 0;
    else {
      $OK = add_to_file($hash, $account, $file);
    }
  }
}
if ($_POST[firstname] != '' && $_POST[lastname] != '' && $_POST[password] != '' && $_POST[submit] === "DELETE")
{
  if (auth($_POST[firstname].$_POST[lastname], $_POST[password]))
  {
    $file = file_get_contents("../private/passwd");
    $file = unserialize($file);
    delete_user($_POST[firstname].$_POST[lastname], $file);
    file_put_contents("../private/passwd", serialize($file));
  }
}

if ($OK !== 42){
}
?>

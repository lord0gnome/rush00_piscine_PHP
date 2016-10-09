<?php
session_start();
if ($_SESSION[logged_in] != NULL) {
  echo $_SESSION[logged_in][firstname]."\n";
}
else {
  echo "ERROR\n";
}
?>

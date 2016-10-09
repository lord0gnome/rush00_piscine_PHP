<?php
session_start();
if ($_SESSION[logged_in] !== NULL)
{
  if ($_SESSION[logged_in][firstname] === 'admin' && $_SESSION[logged_in][lastname] === 'admin')
  $_SESSION[rights] = 2;
  if ($_SESSION[basket] !== NULL)
  $_SESSION[basket] = array();
}
else {
  $_SESSION[rights] = -1;
}
?>
<html>
<link rel="stylesheet" href="./css/main.css" charset="utf-8">
<head>
  <meta charset="utf-8">
  <title>Le site du 42</title>
</head>
<body>
  <div class="header">
    <div id='lmodal' class='login-modal'>
      <form action='login.php' method='post'>
        <br />
        <input name='firstname' placeholder="Prenom" value=''>
        <br />
        <input name='lastname' value='' placeholder="Nom">
        <br />
        <input name='password' value='' placeholder="Mot de Passe">
        <br />
        <input name='submit' type='submit' value='LOGIN'>
        <br />
        <input name='submit' type='submit' value='REGISTER'>
        <br />
        <input name='submit' type='submit' value='DELETE'>
      </form>
    </div>
    <?php
    if ($_SESSION[logged_in] === NULL)
    {
      ?>
      <script type="text/javascript">
      document.getElementById('lmodal').style.display = "block";
      </script>
      <?php
    } else if ($_SESSION[rights] >= 0) {
      ?>
      <form id='topright-logout' action="logout.php" method="post"><div class="login">Bonjour <?php
      if ($_SESSION[logged_in] !== NULL)
      echo $_SESSION[logged_in][firstname];

    }?>
    <input type="submit" name="logout" value="Log out"></form></div>
  </div>
  <div class="footer"></div>
  <div class="sidebar-left">

  </div>
  <div class="centerbar">
    <?php
    if ($_SESSION[rights] >= 2)
    {
      $mysqli = mysqli_connect('localhost', 'root', 'root', 'db');
      $result = mysqli_query($mysqli, "SELECT * FROM shop WHERE category_id=1");
      // Output table header
      // Define the columns title and name in this array map.
// Output table header
echo "<table border=\"1px solid black\"><tr>";
$fields = mysqli_fetch_fields($result);
?> <table border="1px solid black""><tr> <?php
foreach($fields as $field) {
    ?> <th><?php echo $field->name; ?></th> <?php
}
?> </tr> <?php
while ($row = mysqli_fetch_array($result)){
  ?><tr><?php

  foreach($row as $key => $val) {
        if (is_int($key))
        ?> <td style="text-align: center;"> <?php echo $val; ?> </td> <?php
  }

  ?> </tr> <?php
}
?> </table> <?php ?>
      <form style="margin-top:40px;margin-left:120px;display:flex;flex-direction:column;" action="create.php" method="post">
        <span>First Name: <input name="firstname" value=""></span>
        <span>Last Name: <input name='lastname' value=''></span>
        <span>Password: <input name='password' value=''></span>
        <input type="submit" name="submit" value="REGISTER"></form>
        <?php
      }
      ?>
    </div>
  </body>
  </html>

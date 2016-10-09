<?php
$file = '../private/passwd';
$ok = 0;
if ($_POST[submit] == "OK" && $_POST[firstname] $_POST[lastname] !== '' && $_POST[oldpw] !== '' && $_POST[newpw] !== '')
{
  $count = 0;
  if (file_exists($file)){
    $database = file_get_contents($file);
    $database = unserialize($database);
    $_POST[oldpw] = hash("whirlpool", $_POST[oldpw]);
    foreach ($database as $value) {
      if ($value[login] === $_POST[firstname].$_POST[lastname])
      {
        if ($value[passwd] === $_POST[oldpw])
        {
          if (($_POST[newpw] = hash("whirlpool", $_POST[newpw])) !== $_POST[oldpw])
          {
            $database[$count][passwd] = $_POST[newpw];
            $database = serialize($database);
            file_put_contents($file, $database);
            echo "OK\n";
            $ok = 1;
          }
        }
      }
      $count++;
    }
  }
}
if ($ok != 1)
echo "ERROR\n";
?>

<?php
function auth($login, $passwd){
  if ($login !== '' && $passwd !== ''){
    if (($db = @file_get_contents('../private/passwd')) !== FALSE){
      $db = unserialize($db);
      $hpasswd = hash("whirlpool", $passwd);
      foreach ($db as $value) {
        if ($value[login] === $login){
          if ($value[password] === $hpasswd){
            return (TRUE);
          }
        }
      }
    }
  }
  return (FALSE);
}
?>

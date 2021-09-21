<?php

  $user= 'root';
  $pass= '';
  $host = 'localhost';
  $base = 'logowanie_mech';
  $log= mysqli_connect($host,$user,$pass, $base);
  mysqli_select_db($log,$base);

  $sql = "SELECT * FROM `tabela_mech` ORDER BY `tabela_mech`.`id` ASC";
    $result = $log->query($sql);

  if(isset($_POST['dodaj'])) {
  $login = $_POST['login'];
  $haslo = $_POST['haslo'];
  $haslonowe = $_POST['haslonowe'];
  $query = "select * FROM tabela_mech WHERE Typ='admin'";
  $a = $log->query($query);
  if($a->num_rows>0){
    $query = "select login FROM tabela_mech'";
    $run =mysqli_query($log,$query) or die(mysqli_error());
           }
        }
?>
 
<form action="" method="POST">
   
    login: <input type="text" name="login"><br>
    Stare haslo: <input type="password" name="haslo"><br>
    Nowe haslo: <input type="password" name="haslonowe"><br>
    <input name="dodaj" type="submit" value="ok">
</form>

</html>
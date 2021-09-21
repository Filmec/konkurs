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
  $query = "select * FROM tabela_mech WHERE Login='$login' AND Haslo='$haslo'";
  $run =mysqli_query($log,$query) or die(mysqli_error());
  $a = $log->query($query);
  if($a->num_rows>0){
   $typ = "select * FROM tabela_mech WHERE Login='$login' AND Typ='admin'";
   $runn =mysqli_query($log,$typ) or die(mysqli_error());
   $b = $runn->query($typ); 
   if($b->num_rows>0){
   header('Location: admin.php'); 
    
  }

  else{
    header('Location: zadania.html');
  }}
  else{
       echo "zle";
           }}
?>
 
<form action="" method="POST">
   
    login: <input type="text" name="login"><br>
    Haslo: <input type="password" name="haslo"><br>
    <input name="dodaj" type="submit" value="ok">
</form>


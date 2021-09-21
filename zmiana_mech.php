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
  $query = "select * FROM tabela_mech WHERE Login='$login' AND Haslo='$haslo'";
  $a = $log->query($query);
  if($a->num_rows>0){
    $subject = "$haslonowe";
    $pattern2 = '/[A-Z]/';
    $pattern = '/[!@#$%&^]/';
    $pattern3 = '/[1-9]/';
    if(preg_match($pattern, $subject, $matches, PREG_OFFSET_CAPTURE) && preg_match($pattern2, $subject, $matches, PREG_OFFSET_CAPTURE)&& preg_match($pattern3, $subject, $matches, PREG_OFFSET_CAPTURE)){
        {
    
    $query = "UPDATE tabela_mech SET haslo = '$haslonowe' WHERE Login='$login' AND Haslo='$haslo'";
  $run =mysqli_query($log,$query) or die(mysqli_error());

  if($run){
      echo "Haslo zmienione";
      header('Location: logowanie_mech.php'); 
  }
  else{
    echo "blad";
  }
}
else{
    echo "zly login lub haslo";
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
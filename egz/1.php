<?php
 $user= 'root';
 $pass= '';
 $host = 'localhost';
 $base = 'filmoteka';    
 $con= mysqli_connect($host,$user,$pass, $base);
 mysqli_select_db($con,$base);
 
if(isset($_get['sub'])) {
$s=$get['ilosc'];
$query = "select * from recenzje limit '$s'";
$run2 =mysqli_query($con,$query) or die(mysqli_error($con));
while($b=mysqli_fetch_array($run2))
echo($b['IDRecenzja']."&nbsp;". $b['Ocena']."&nbsp;".$b['Tresc']."&nbsp;".$b['Recenzent']."<br>");
mysqli_close($con);
 
}        
           
 ?>
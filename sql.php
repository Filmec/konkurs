<html>
    <head>
</head>
<body>
  <form action='' method="GET" >  
Usuwanie podaj id<input type="text" name="nazw" > 
<input type="submit" value="Usun" name="usun"><br><br>
Edycja<br>
Podaj id do edycji<input type="text" name="numerid" ><br>
Imie <input type="text" name="imie" > <br>
Nazwisko <input type="text" name="nazwisko" > <br>
Szkola <input type="text" name="szkola" > <br>

<input type="submit" value="Edytuj" name="edytuj"><br><br>
</form>
</body>
</html>





<?php 
$user= 'root';
$pass= '';
$host= 'localhost';
$base= 'logowanie_mech';
$con= mysqli_connect($host,$user,$pass,$base);
mysqli_select_db($con,$base);

if(isset($_GET['usun']))
{
$b = $_GET ['nazw'];

$query = "delete from tabela_mech where id = '$b' ";
$run =mysqli_query($con,$query) or die(mysqli_error());

if($run){
    echo "Formularz zatwierdzony";
}
else{
    echo "formularz jest błędny";
}
         }

         if(isset($_GET['edytuj']))
{
$c = $_GET ['numerid'];
$d = $_GET ['imie'];
$e = $_GET ['nazwisko'];
$f = $_GET ['szkola'];


$query2 = "update tabela_mech set imie='$d', nazwisko='$e', szkola='$f' where id = '$c'";
$run2 =mysqli_query($con,$query2) or die(mysqli_error($con));

if($run2){
    echo ("Formularz zatwierdzony");
}
else{
    echo "formularz jest błędny";
}
         }


?>



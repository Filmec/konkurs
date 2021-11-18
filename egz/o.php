<html>
<head>
<meta charset="UTF-8">
<title>Egzamin 2</title>
<style>
    
#baner{
margin: 5px;
width: 900px;
height: 100px;
background-color: lightgrey;


}
#lewy{
    margin: 5px;
width: 210px;
height: 450px;
background-color: lightgrey;
float: left;
}
#srodek {
float: left;
width: 460px;
height: 450px;
background-color: lightgrey;
margin: 5px;
text-align: center;

}

#prawy {
    float: left;
width: 210px;
height: 450px;
background-color: lightgrey;
margin: 5px;
color:black
}

#stopka{
    width: 900px;
height: 100px; 
background-color: lightgrey;
clear: both;
margin: 5px;
text-align: center;
color: fuchsia;
}
#kadr{
   height: 40%;
  
  
}
h2{
    text-align: center;
}
table, td, tr{
    border: 3px solid;
   border-color: blue;
   border-collapse: collapse;
}
a{
  text-decoration: none;  
  color: black;
}
a:hover{
    color: blue;
}
#lista{
    color:red;
}






</style>
</head>
<body>
<div id="baner">
<center><img src="mbaner.png" alt="mały baner"></center>
</div>

<div id="lewy">
 <h1>Filmy:</h1>
 <ol reversed start="9">
 
 <?php
 $user= 'root';
 $pass= '';
 $host = 'localhost';
 $base = 'filmoteka';    
 $con= mysqli_connect($host,$user,$pass, $base);
 mysqli_select_db($con,$base);
 
$query = "select tytul from filmy ";
$run =mysqli_query($con,$query) or die(mysqli_error());
while($a=mysqli_fetch_array($run))
echo('<li>'.$a['tytul']. '</li>'); 
mysqli_close($con);      
 ?>
 </ol>
 
 <h3> Reżyserzy z nazwiskiem zawierającym literę "i": </h3>
 <?php
 $user= 'root';
 $pass= '';
 $host = 'localhost';
 $base = 'filmoteka';    
 $con= mysqli_connect($host,$user,$pass, $base);
 mysqli_select_db($con,$base);
 
$query = "select imie, nazwisko from rezyserzy where nazwisko like '%i%'";
$run2 =mysqli_query($con,$query) or die(mysqli_error($con));
while($b=mysqli_fetch_array($run2))
echo($b['imie']."&nbsp;". $b['nazwisko'].'<br>');
mysqli_close($con);
 
           
           
 ?>


</div>
<div id="srodek">
<form action="" method="GET"  >  
<input type="text" id="pole" name="ilosc">

    <input type="submit" value="Ile filmów" id="przycisk" name="sub"><br>
    </form>
    <center>
    <table>
    <?php
    
 $user= 'root';
 $pass= '';
 $host = 'localhost';
 $base = 'filmoteka';    
 $con= mysqli_connect($host,$user,$pass, $base);
 mysqli_select_db($con,$base);
 
if(isset($_GET['sub'])) {
$s=$_GET['ilosc'];
echo('<tr><td>'."IDRecenzja".'</td><td>'."Ocena".'</td><td>'."Tresc".'</td><td>'."Recenzent".'</td></tr>');
$query = "select * from recenzje limit $s";
$run3 =mysqli_query($con,$query) or die(mysqli_error($con));
while($b=mysqli_fetch_array($run3))
echo('<tr><td>'.$b['IDRecenzja']."</td><td>". $b['Ocena']."</td><td>".$b['Tresc']."</td><td>".$b['Recenzent']."</td></tr>");
mysqli_close($con);
 
}        
           
 ?>
   </table>
</center>
<br><br>
   <img src="kadr2.jpg" id="kadr" >
</div>
<div id="prawy">
    <h2> Do pobrania</h2>
    <ul type="square" id="lista">
        <li> <a href="kwarendy.txt">kwarendy</a></li>
        <li> <a href="a.PNG">zrzut a)</a></li>
        <li> <a href="b.PNG">zrzut b)</a></li>
        <li> <a href="c.PNG">zrzut c)</a></li>
        <li> <a href="d.PNG">zrzut d)</a></li>
    </ul>

    
</div>
<div id="stopka">
  <i> <u> Filip Mech</u></i>
</div>


</body>
 </html>
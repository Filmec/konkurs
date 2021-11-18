<html>
    <head> 
    <meta charset="utf-8">
    <link rel="stylesheet" href="auto.css">
    <title>Komis Samochodowy</title>
</head>
<body>
  <div class="gora">
   <h1> SAMOCHODY </h1>   
</div>

<div class="lewy">
  <h2>Wykaz samochodów</h2> 
  <?php
$host = 'localhost';
$username = 'root';
$password = '';
$dbName = 'komis';

$conn = mysqli_connect($host, $username, $password, $dbName);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  $sql = "SELECT id, marka, model FROM samochody";
  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
   
    while($row = $result->fetch_assoc()) {
      echo "<li>"  . $row["id"]. "  " . $row["marka"]. " " . $row["model"]. "<br> </li>";
    }
  } else {
    echo "0 results";
  }
  $conn->close();
  ?>
  <h2>Zamówienia</h2>
  <?php
 $user= 'root';
 $pass= '';
 $host = 'localhost';
 $base = 'komis';
 


 $conn= mysqli_connect($host,$user,$pass, $base);
   mysqli_select_db($conn,$base);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT samochody_id, klient FROM zamowienia";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo "<li>" . $row["samochody_id"]. " " . $row["klient"]."<br> </li>";
    }
  } else {
    echo "0 results";
  }
$conn->close();
?>

</div>
<div class="prawy">
     <h2> Pełne dane Fiat</h2> 
     <?php
 $user= 'root';
 $pass= '';
 $host = 'localhost';
 $base = 'komis';
 


 $conn= mysqli_connect($host,$user,$pass, $base);
   mysqli_select_db($conn,$base);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM samochody where marka='fiat' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo "<li>" . $row["id"]. " " . $row["marka"]. " " . $row["model"]." " . $row["rocznik"]. " " . $row["kolor"]. " " . $row["stan"]."<br></li>";
    }
  } else {
    echo "0 results";
  }
$conn->close();
?>
</div>
<div class="dol">
<table>
   <tr>
      <td><a href="kwerendy.txt">Kwerendy</a></td> <td>Filip Mech</td> <td><img src="auto.png" alt="komis samochodowy"></td>
   </tr>
</table>
</div>
</body>
</html>

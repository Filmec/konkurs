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
        $dodajlogin = $_POST['dodajlogin'];
        $dodajhaslo = $_POST['dodajhaslo'];
        $dodajimie = $_POST['dodajimie'];
        $dodajnazwisko = $_POST['dodajnazwisko'];
        $dodajszkole = $_POST['dodajszkole'];
        $dodajadres = $_POST['dodajadres'];
        $dodajtelefon = $_POST['dodajtelefon'];
        $query = "INSERT INTO tabela_mech(Login,Haslo ,Imie, Nazwisko, Szkola, Adres, Telefon) values('$dodajlogin', '$dodajhaslo', '$dodajimie', '$dodajnazwisko', '$dodajszkole', '$dodajadres', '$dodajtelefon')";
        $run =mysqli_query($log,$query) or die(mysqli_error());
 if($run){
    header('Location: logowanie_mech.php'); 
     echo "Uzytkownik dodany";
 }
    }


?>



<form action="" method="POST">
    Dodaj nowa osobe: <br>
    Login: <input type="text" name="dodajlogin"><br>
    Haslo: <input type="password" name="dodajhaslo"><br>
    Imie:  <input type="text" name="dodajimie"><br>
    Nazwisko:  <input type="text" name="dodajnazwisko"><br>
    Szkole:  <input type="text" name="dodajszkole"><br>
    Adres:  <input type="text" name="dodajadres"><br>
    Telefon:  <input type="number" name="dodajtelefon"><br>
    <input name="dodaj" type="submit" value="ok">
</form>

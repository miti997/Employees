<?php
session_start();
include_once "connection.php";
if(isset($_POST['save'])){
    $id_ang=$_SESSION['id'];
    $nume=$_POST['numeang'];
    $prenume=$_POST['prenumeang'];
    $adresa=$_POST['adresaang'];
    $telefon=$_POST['telefonang'];
    $functie=$_POST['functieang'];
    $departament=$_POST['departamentang'];
    $salar=$_POST['salarang'];
    $sqlUpdate="Update angajati set nume='".$nume."', prenume='".$prenume."', telefon='".$telefon."',adresa='".$adresa."', functia='".$functie."', departament='".$departament."', salar='".$salar."' where id='".$id_ang."'";
    mysqli_query($conn,$sqlUpdate);
        echo "Datele angajatului au fost modificate<br>";
    session_destroy ();
}
else
{
  $id_ang=$_SESSION['id'];
    $nume=$_POST['numeang'];
    $prenume=$_POST['prenumeang'];
    $adresa=$_POST['adresaang'];
    $telefon=$_POST['telefonang'];
    $functie=$_POST['functieang'];
    $departament=$_POST['departamentang'];
    $salar=$_POST['salarang'];
    $sqlDelete="Delete from angajati where id='".$id_ang."'";
    mysqli_query($conn,$sqlDelete);
        echo "Angajatul a fost sters<br>";
    session_destroy ();
}

?>
<html>
<head><title>Updates</title></head>
    <body>
        <a href="../angajati.php">Inapoi</a>
    </body>

</html>
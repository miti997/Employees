<?php 

include_once "php/connection.php";//connects to database
    $nume_angajat=$_POST['nume'];
    $prenume_angajat=$_POST['prenume'];
    $adresa_angajat=$_POST['adresa'];


    $sql_string="Select * from angajati where nume='".$nume_angajat."' or prenume='".$prenume_angajat."' or adresa='".$adresa_angajat."'";
    $results=mysqli_query($conn,$sql_string);//selectarea efectiva a datelor(conn vine din conexiune.php)
    $resultCheck=mysqli_num_rows($results);//numararea randurilor selectat
   $row=mysqli_fetch_assoc($results);//se creaza un array care contine datele selectate(practic se pun datele in stringuri)
        
          $id=$row['id'];
          $nume=$row['nume'];
          $prenume=$row['prenume'];
          $adresa=$row['adresa'];
          $telefon=$row['telefon'];
          $functia=$row['functia'];
          $departament=$row['departament'];
          $salar=$row['salar'];
         
       
  include "header.php"
?>
<html>
<head>
      <title>
    Date angajat
    </title>
 </head>

<body>

<form  method="POST">
    <fieldset class="uk-fieldset">

        <legend class="uk-legend">MODIFICARE ANGAJAT</legend>

        <div class="uk-margin">
            <input name="nume" class="uk-input" type="text" placeholder="Nume" value="<?php echo $nume;?>"/>
        </div>
        
        <div class="uk-margin">
            <input name="prenume" class="uk-input" type="text" placeholder="Prenume" value="<?php echo $prenume;?>"/>
        </div>
        
        <div class="uk-margin">
            <input name="adresa" class="uk-input" type="text" placeholder="Adresa" value="<?php echo $adresa;?>">
        </div>
        
        <div class="uk-margin">
            <input name="telefon" class="uk-input" type="text" placeholder="Telefon" value="<?php echo $telefon;?>">
        </div>

        <div class="uk-margin">
            <select name="functia"class="uk-select">
                <option <?php if ($functia="Programator"){echo "selected='selected'";}?>>Programator</option>
                <option <?php if ($functia="Administrator retea"){echo "selected='selected'";}?>>Administrator retea</option>
                <option>IT Support</option>
                <option>Administrator baze de date</option>
                <option>Analist financiar</option>
                <option>Contabil</option>
                <option>Recrutor</option>
                <option>Administrator resurse umane</option>
                <option>Inginer tehnician</option>
                <option>Operator</option>
                <option>Manager</option>
            </select>
        </div>
        
        <div class="uk-margin">
            <select name="departament"class="uk-select">
                <option>IT</option>
                <option>Financiar</option>
                <option>Controlling</option>
                <option>HR</option>
                <option>Productie</option>
                <option>Calitate</option>
                <option>Logistica</option>
                <option>Engineering</option>
                <option>Testare</option>
                <option>Payroll</option>
            </select>
        </div>
         <div class="uk-margin">
            <input class="uk-input" type="salar" name="salar" placeholder="Salariu"  value="<?php echo $salar;?>">
        </div>

        <button name="save" type="submit" class="uk-button uk-button-primary">Salvare</button>
        <button name="delete" type="submit" class="uk-button uk-button-primary">Stergere</button>

    </fieldset>
</form>
    <?php
    if(isset($_POST['save'])){
        $nume=$_POST['nume'];
        $prenume=$_POST['prenume'];
        $telefon=$_POST['telefon'];
        $adresa=$_POST['adresa'];
        $departament=$_POST['departament'];
        $salar=$_POST['salar'];
        $functia=$_POST['functia'];
   
    $sqlUpdate="Update angajati set nume='".$nume."', prenume='".$prenume."', telefon='".$telefon."',adresa='".$adresa."', functia='".$functia."', departament='".$departament."', salar='".$salar."' where id='".$id."'";
    mysqli_query($conn,$sqlUpdate);
        echo "Datele angajatului au fost modificate<br>";
}
 if(isset($_POST['delete']))
{    
    $sqlDelete="Delete from angajati where id='".$id."'";
    mysqli_query($conn,$sqlDelete);
        echo "Angajatul a fost sters<br>";
}

    
    ?>
</body>

</html>
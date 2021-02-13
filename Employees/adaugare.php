<!doctype html>
<html lang="en">
     <head>
        <title>Adaugare angajati</title>
  <?php
    include "header.php";
?>
    
    <form method="POST">
    <fieldset class="uk-fieldset">

        <legend class="uk-legend">ADAUGARE ANGAJAT</legend>

        <div class="uk-margin">
            <input name="nume" class="uk-input" type="text" placeholder="Nume">
        </div>
        
        <div class="uk-margin">
            <input name="prenume" class="uk-input" type="text" placeholder="Prenume">
        </div>
        
        <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
            <label><input class="uk-radio" type="radio" name="sex" checked value="masculin"> Masculin</label>
            <label><input class="uk-radio" type="radio" name="sex"value="feminin"> Feminin</label>
        </div>
        
        <div class="uk-margin">
            <input name="adresa" class="uk-input" type="text" placeholder="Adresa">
        </div>
        
        <div class="uk-margin">
            <input name="telefon" class="uk-input" type="text" placeholder="Telefon">
        </div>

        <div class="uk-margin">
            <select name="functia"class="uk-select">
                <option>Programator</option>
                <option>Administrator retea</option>
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
            <input class="uk-input" type="salar" name="salar" placeholder="Salariu">
        </div>

        <button name="add" type="submit" class="uk-button uk-button-primary">Adauga</button>

    </fieldset>
</form>

  </body>
</html>

<?php
include_once "php/connection.php";
if(isset($_POST['add'])){
    $nume=$_POST['nume'];
    $prenume=$_POST['prenume'];
    $sex=$_POST['sex'];
    $adresa=$_POST['adresa'];
    $telefon=$_POST['telefon'];
    $functie=$_POST['functia'];
    $departament=$_POST['departament'];
    $salar=$_POST['salar'];
    $sqlInsert="Insert into angajati(nume,prenume,sex,telefon,adresa,functia,departament,salar) values('".$nume."', '".$prenume."', '".$sex."', '".$telefon."','".$adresa."', '".$functie."', '".$departament."', '".$salar."')";

    mysqli_query($conn,$sqlInsert);//se executa inserarea
    echo "Datele angajatului au fost introduse";
    //echo $sqlInsert;
}
   

?>
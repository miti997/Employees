<!doctype html>
<html lang="en">
     <head>
        <title>Lista angajati</title>
<?php
include "header.php";
include_once "php/connection.php";
$query = "SELECT * FROM angajati group by functia"; //You don't need a ; like you do in SQL
$result = mysqli_query($conn,$query);

echo "<table  class='uk-table uk-table-striped'>

<thead>
        <tr>
            <th>Nume</th>
            <th>Prenume</th>
            <th>Sex</th>
            <th>Adresa</th>
            <th>Telefon</th>
            <th>Functia</th>
            <th>Departament</th>
            <th>Salariu</th>
        </tr>
    </thead>"; // start a table tag in the HTML

while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
echo 
    "<tr>
    <td>" . $row['nume'] . "</td>
    <td>" . $row['prenume'] . "</td>
    <td>" . $row['sex'] . "</td>
    <td>" . $row['adresa'] . "</td>
    <td>" . $row['telefon'] . "</td>
    <td>" . $row['functia'] . "</td>
    <td>" . $row['departament'] . "</td>
    <td>" . $row['salar'] . "</td>
    </tr>";  //$row['index'] the index here is a field name
}

echo "</table>"; //Close the table in HTML

mysqli_close($conn); //Make sure to close out the database connection
?>
    </body>
</html>
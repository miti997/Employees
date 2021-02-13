<?php
      $fullUrl="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";//reads url
      if (strpos($fullUrl,"login=empty")==true) {//if url contains a certain string display message
          echo '<p class="text-danger text-center">Completati toate campurile!</p>';
          exit();
      }
      if (strpos($fullUrl,"login=failed")==true) {//daca in variabila exista stringul echo mesajul de eroare/succes
          echo '<p class="text-danger text-center">Nume de utilizator sau parola gresita!</p>';
          exit();
      }

?>
<html>
<head>
  <title>hashing</title>
  <meta charset="utf-8">
</head>
<body>
  <?php

    $input="admin";//ce scrie utilizatorul
    $hashedPasswordInDb=password_hash("admin",PASSWORD_DEFAULT);//cum arata parola in baza de date(criptata)
    //echo password_verify($input,$hashedPasswordInDb);//ia ce a introdus utilizatorul, cripteaza
                                                    //si apoi verifica daca valoarea nou criptata se potriveste cu ce e in baza de date
    
    echo password_hash("admin",PASSWORD_DEFAULT);

   ?>
</body>
</html>
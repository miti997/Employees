<?php

$admin_email = "abcd@gmail.com";
$nume = $_POST['nume'];
$email = $_POST['email'];
$mesaj = $_POST['mesaj'];
$header="From: munged@gmail.com";
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Title</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/uikit.css" />
        <script src="js/uikit.js"></script>
        <script src="js/uikit-icons.js"></script>
    </head>
    <body>
    <div class="uk-container uk-container-small">
    <div class="uk-flex uk-flex-column uk-flex-center uk-flex-middle uk-background-muted uk-height-viewport">
<?php
if (!$nume ||!$email||!$mesaj) die ("<div class='uk-alert-danger' uk-alert>Completati toate campurile!</div>");

else {

echo "<div class='uk-alert-primary' uk-alert>Numele: ".$nume."<br>";
echo "E-mail: ".$email."<br>";
echo "Mesaj: ".$mesaj."<br></div>";

echo "<div class='uk-alert-success' uk-alert><p>Salut ".$nume."!<br>Mesajul tau: &quot;".$mesaj."&quot; a fost trimis la adresa ".$email.".</p></div>";

}

//send mail
	mail($admin_email. "Formular contact", $mesaj, "De la".$email,$header);
        

?>
</div>
</div>
</body>
</html>
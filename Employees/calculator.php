<!doctype html>
<html>
    <head>
        <title>Calculator</title>
    </head>
    
<?php
    include "header.php";
?>
    <body>
     <section class="uk-section uk-section-default">
      <div class="uk-section uk-light uk-background-cover" style="background-image: url(img/212751248e6f6591846481281fe045dc.jpg)">     
       <div class="uk-container">
           <div>         
    <h1>Calculator salariu net</h1>
<form method="POST">
	<p>Brut: <input type="text" name="brut" size="5" maxlength="5" value="<?php if (isset($_POST['brut'])) echo $_POST['brut']; ?>" ?> </p>
    <p><input type="submit" name="submit" value="Calculeaza!" /></p>
</form>
    </div>
    </div>
    </div>      
    </section> 
        
 <section class="uk-section uk-section-muted">   
       <div class="uk-container">
           <div>                 
<?php
   
    if(isset($_POST['submit'])){
        if(is_numeric($_POST['brut'] )){
    $brut=$_POST['brut'];
    $cas=0.25;
    $cass=0.1;
    $iv=0.1;
    $net=$brut-$brut*$cas-$brut*$cass-$brut*$iv;
      
       echo "Salariul net este: ".$net."<br>";
       echo "CAS este: ".$brut*$cas."<br>";
       echo "CASS este: ".$brut*$cass."<br>";
       echo "Impozitul pe venit este: ".$brut*$iv."<br>";
   }
         
     else
       {
         echo "Va rugam introduceti numere";
     }
    }
     
  
     
    
?>
 </div>
 </div>
 </section>
     <footer class="uk-section uk-section-secondary">
       <div class="uk-container">
	   <div class="uk-text-center" uk-grid> 
      <div class="uk-width-expand ">
        <div class="uk-text-left uk-margin-large-right">Tehnologii Web - PHP, Copyright &copy; 2020</div>
    </div>
	
        <div class="uk-width-auto">
		
		<div class="uk-text-right"><a uk-icon="icon: arrow-up; ratio= 2" href="#sus" uk-tooltip="Sus" uk-scroll></a></div>
    </div>
    </div>
    </div>       
    </footer>
 <script src="js/uikit.js"></script>
 <script src="js/uikit-icons.js"></script>
    </body>
</html>

<!doctype html>
<html lang="en">
     <head>
        <title>Firma Automotive</title>
         <link rel="stylesheet" type="text/css" href="mystyle.css">
  <?php
    include "header.php";
?>
    </head>   
    <body>    
        
        <section class="uk-section">
       <div class="uk-container">
           <form class="uk-form uk-form-stacked" method="post" action="afisare.php">
	  
	         <div class="uk-margin">
			    <label class="uk-form=uk-form-label">Numele</label>
				<div class="uk-form-controls">
				    <input type="text" name="nume" placeholder="introduceti numele" class="uk-input">
				</div>
</div>
			    <div class="uk-margin">
			    <label class="uk-form=uk-form-label">Email</label>
				<div class="uk-form-controls">
				    <input type="email" name="email" placeholder="introduceti email" class="uk-input" required>
				</div>
			</div>	
			    <div class="uk-margin">
			    <label class="uk-form=uk-form-label">Mesajul tau</label>
				<div class="uk-form-controls">
				    <textarea name="mesaj" name= uk-textarea cols="100" rows="9" required></textarea>
				</div>
			</div>
<div class="uk-margin">
			    <div class="uk-form-controls">
				   <button class="uk-button uk-button-primary">Submit</button>
				 </div>
			</div>	 
				   
	  </form>	
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



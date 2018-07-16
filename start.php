<?php
include('includes/header.php'); 
$email = $_GET["email"];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Commencer</title>
	    <meta name="viewport" content="width=device-width height=device-height initial-scale=1.0 maximum-scale=1.0 user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="js/bootstrap.min.js"></script>
	<script src="js/start.js"></script>


</head>
<body>


<!--<div class="container-fluid" id="header">

<div class="row">
<div class="col-md-6 logo">
<img src="img/logo.png"/>
</div>
<div class="col-md-6">

<h2>Besion d'aide ? <span><i class="fa fa-phone-square"></i> 05 87 74 11 50</span></h2>
</div>
</div>
</div>-->



<div class="container-fluid content">

<div class="row">
<div class="col-md-9 CompanyType">

<h3>Quel type de société souhaitez vous créér ?</h3>

<ul class="info-list">
			<li> Replissez le présent questionnaire en seulement 10 minutes. En cas de besoin, nos experts sont à votre disposition.</li>
			<li>Puis choisissez votre formule, validez votre commande et obtenez votre dossier complet instantanément.</li>
			<li>Nous gérons ensuite vos formalités jusqu'au KBIS</li>

		</ul>
		
		
		
		
		<form method="get" action="sarl-au.php">
			<div class="radio_container">
			
			<ul>
			<li><input class="radio" type="radio" name="choice" value="SARL AU" selected="selected"> <span>SARL AU</span></li>
			<li><input class="radio" type="radio" name="choice" value="SARL"> <span>SARL</span></li>
			<li><input class="radio" type="radio" name="choice" value="PERSONNE PHYSIQUE"> <span>PERSONNE PHYSIQUE</span></li>
			<li><input class="radio" type="radio" name="choice" value="AUTO ENTREPRENEUR"> <span>AUTO ENTREPRENEUR</span></li>
			<li><input class="radio" type="radio" name="choice" value="SA"> <span>SA</span></li>

			</ul>
			<input type="hidden" name="email" value="<?php echo $email; ?>" class="next-button"> 
		  
		    <input type="submit" name="next" value="SUIVANT" class="next-button"> 	
			</div>
		</form>
		
		
		
		
		
		
		
		
		
		
		


</div>





<div class="col-md-3">

</div>
</div>
</div>








</body>
</html>
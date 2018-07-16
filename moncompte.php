<?php 

include('includes/header.php'); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Charikty- Espace client</title>
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <meta name="viewport" content="width=device-width height=device-height initial-scale=1.0 maximum-scale=1.0 user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8" />


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="js/bootstrap.min.js"></script>

</head>
<body>
<div class="container-fluid page-title">

	<h2 style="font-size:30px;">Bonjour <?php echo $monnom;?> , Bienvenue dans votre espace client</h2>

</div>

<div class="container">
<?php include('includes/menu.php'); ?>
</div>




<div class="container" >
<div class="HomeMenu">
<div class="row">
<div class="col-md-6">
         	<div class="img"><img src="./img/ico01.jpg"></div>
         	<div class="txt">
         		<h3><a href="<?php echo 'start.php?email='.$emaill ?>">Creer une nouvelle societe</a></h3>
         		<h5>Remplissez le questionnaire (10 min), choisissez votre formule, et obtenez vos documents instantanément.</h5>
         	</div>
</div>

<div class="col-md-6">
<div class="img"><img src="./img/ico03.jpg"></div>
         	<div class="txt">
         		<h3><a href="monproffile.php">Mon profile</a></h3>
         		<h5>Modifiez vos informations de connexion et vos données personnelles.</h5>
         	</div>

</div>

</div>



<div class="row">
<div class="col-md-6">
         	<div class="img"><img src="./img/ico05.jpg"></div>
         	<div class="txt">
         		<h3><a href="mesfactures.php">Mes factures</a></h3>
         		<h5>retrouvez la liste de vos factures.</h5>
         	</div>
</div>


<div class="col-md-6">
         	<div class="img"><img src="./img/ico05.jpg"></div>
         	<div class="txt">
         		<h3><a href="mesdossiers.php">Mes documents</a></h3>
         		<h5>Accédez à la liste de vos sociétés, modifiez/reprenez votre questionnaire, téléchargez et signez vos documents .</h5>
         	</div>
</div>

</div>




<div class="row">

<div class="col-md-6">
<div class="img"><img src="./img/ico02.jpg"></div>
         	<div class="txt">
         		<h3><a href="#">Autre formlités</a></h3>
         		<h5>Transfert de siège, changement de dirigeant, modification d’activité....</h5>
         	</div>



</div>

</div>





</div>
</div>






</body>
</html>
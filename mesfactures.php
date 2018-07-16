<?php
include('includes/header.php'); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Charikty- Mes dossiers</title>
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <meta name="viewport" content="width=device-width height=device-height initial-scale=1.0 maximum-scale=1.0 user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/WidthJs.js"></script>
<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="js/bootstrap.min.js"></script>

</head>
<body id="factures">
<div class="container-fluid page-title">

	<h2>Mes Factures</h2>

</div>

<div class="container">
<?php include('includes/menu.php'); ?>
</div>






<div class="container" style="background:#fff;" >
<div class="HomeMenu" style="padding-top:3%;padding-bottom:30%;">

<h3>Liste de vos factures</h3>
<p style="margin-bottom:6%;">Cette la liste contient vos factures en ligne et la liste des factures en ligne d'une de vos propriétés.</p>

<div class="row">
    
<table class="table">
  <thead>
    <tr>
      <th scope="col">Numéro de facture</th>
      <th scope="col">Nom de facture</th>
      <th scope="col">Date</th>
      <th scope="col">Montant</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td scope="row" colspan="4"><center>vous n'avez pas de factures.</center></td>
    </tr>
    <tr>
 
  </tbody>
</table>


</div>






</div>
</div>







</body>
</html>
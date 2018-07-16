<?php
include 'connexion.php';
if(isset($_POST["connecter"]))
{
  @ob_start();
session_start();
$_SESSION["email"] = $_POST["email"];
$sql1 = "select * from users where email ='".$_POST["email"]."' and password = '".$_POST["password"]."'";
$req1 = mysqli_query($base,$sql1) or die('Erreur SQL !<br />'.$sql1.'<br />'.mysqli_error()); 
$rows = mysqli_num_rows($req1);
if( $rows > 0)
{
header("location:http://cafigec.net/charikty/espace-client/moncompte.php?email=".$_SESSION["email"]);
}
else
{
echo
'
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
   
<div class="row popoup">
<div class="col-md-4"><i class="far fa-frown"></i></div>
<div class="col-md-8">
<h2>Oh Snap!</h2>
<p>Votre Email ou votre mot de passe est incorrect</p>
<span class="close">Réessayez</span>
</div>
</div>
 </div>

</div>

<script>
var modal = document.getElementById("myModal");

var btn = document.getElementById("myBtn");

var span = document.getElementsByClassName("close")[0];

    modal.style.display = "block";

span.onclick = function() {
    modal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

</script>

';
}
}
?>






<!doctype html>
<html lang="en">

<head>
<title>Charikty - Connectez-Vous</title>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
<link rel="shortcut icon" href="images/favicon.ico" />

<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">



<link href="css/shortcodes.css" rel="stylesheet" type="text/css" />

<link href="css/style.css" rel="stylesheet" type="text/css" />






</head>
<body>



<div class="main-content">

<section class="overview-block-ptb">
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12">
<div class="heading-title text-center">

<img src="img/logo.png"/>
</div>
</div>
</div>
<div class="row justify-content-md-center">
<div class="col-md-8">
<div class="iq-login iq-pt-40 iq-pb-30 iq-plr-30">
<form method="post" action="#">
<div class="form-group">
<label for="exampleInputEmail1">Email</label>
<input type="email" class="form-control" id="email" name="email" placeholder="Email">
</div>
<div class="form-group iq-mt-20">
<label for="exampleInputPassword1">Mot de passe</label>
<input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe">
</div>


<button type="submit" name="connecter" id="connecter" class="button iq-mt-40">Se connecter</button>
</form>
<hr class="iq-mtb-30">
<div class="row">

<div class="col-sm-12">
<div class="text-center iq-mtb-10">
<div class="iq-font-black iq-tw-6">Vous n'avez pas encore de compte?</div><a href="inscription.php" class="iq-font-green iq-tw-6">Inscrivez-vous</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

</div>








</body>

</html>
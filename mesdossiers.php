<?php
include('includes/header.php'); 
$tdt = $_SESSION["email"];
$sql = "SELECT * FROM users where email = '$tdt'";
$req = mysqli_query($base,$sql);
$rows = mysqli_num_rows($req);
if( $rows > 0)
{	
$row = mysqli_fetch_assoc($req);
$id = $row["id"];
}

$sqls = "SELECT * FROM societes where id__cl = '$id'";
$reqs = mysqli_query($base,$sqls);
$rows = mysqli_num_rows($reqs);
if( $rows > 0)
{	
$row = mysqli_fetch_assoc($reqs);
$ids = $row["id_soc"];
}
$sqls = "SELECT * FROM statuts where id__soc = '$ids'";
$reqs = mysqli_query($base,$sqls);
$rows = mysqli_num_rows($reqs);
if( $rows > 0)
{	
$row = mysqli_fetch_assoc($reqs);
$idstatus = $row["id_statut"];
$etatstatus = $row["etat_status"];
}
$sqlr = "SELECT * FROM registrescommerces where id__soc = '$ids'";
$reqr = mysqli_query($base,$sqlr);
$rows = mysqli_num_rows($reqr);
if( $rows > 0)
{	
$row = mysqli_fetch_assoc($reqr);
$idrc = $row["id_rc"];
$etatrc = $row["etat_rc"];
}
$sqli = "SELECT * FROM identifiantsfiscales where id__soc = '$ids'";
$reqi = mysqli_query($base,$sqli);
$rows = mysqli_num_rows($reqi);
if( $rows > 0)
{	
$row = mysqli_fetch_assoc($reqi);
$idf = $row["id_if"];
$etatf = $row["etat_if"];
}
$sqlc = "SELECT * FROM certificatsnegatifs where id__soc = '$ids'";
$reqc = mysqli_query($base,$sqlc);
$rows = mysqli_num_rows($reqc);
if( $rows > 0)
{	
$row = mysqli_fetch_assoc($reqc);
$idcn = $row["id_cn"];
$etatcn = $row["etat_cn"];
}
$sqlp = "SELECT * FROM patentes where id__soc = '$ids'";
$reqp = mysqli_query($base,$sqlp);
$rows = mysqli_num_rows($reqp);
if( $rows > 0)
{	
$row = mysqli_fetch_assoc($reqp);
$idpatente = $row["id_patente"];
$etatpatente = $row["etat_patente"];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Mon dossiers</title>
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
<body id="mondossier">
<div class="container-fluid page-title">

	<h2>Suivez votre demande</h2>

</div>






<div class="container">
<?php include('includes/menu.php'); ?>
</div>






<div class="container" style="background:#fff;" >
<div class="HomeMenu" style="padding-top:3%;padding-bottom:20%;">

<h3>Suivez la progression de votre dossier</h3>
<p style="margin-bottom:6%;">Vous souhaitez savoir où en est le traitement de votre dossier, et quand vous serez complétés </p>

<div class="row">
    
<table class="table">
  <thead>
    <tr>
      <th scope="col">Numéro</th>
      <th scope="col">Etape</th>
      <th scope="col">Etat</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?php echo $idcn; ?></th>
      <td>Certificat négatif</td>
      <td><h5 class="encours"><?php echo $etatcn; ?></h5></td>
    </tr>
    <tr>
      <th scope="row"><?php echo $idstatus; ?></th>
      <td>Statuts</td>
      <td><h5 class="encours"><?php echo $etatstatus; ?></h5></td>
    </tr>
    <tr>
      <th scope="row"><?php echo $idrc; ?></th>
      <td>Register Commerce</td>
      <td><h5 class="encours"><?php echo $etatrc; ?></h5></td>
    </tr>
    
    
    <tr>
      <th scope="row"><?php echo $idf; ?></th>
      <td>Identfiant Fiscale</td>
      <td><h5 class="encours"><?php echo $etatf; ?></h5></td>
    </tr>
    
    
    <tr>
      <th scope="row"><?php echo $idpatente; ?></th>
      <td>Patente</td>
      <td><h5 class="encours"><?php echo $etatpatente; ?></h5></td>
    </tr>
    
    
    
    
    <tr>
      <th scope="row">6</th>
      <td>bulletin officiel</td>
      <td><h5 class="encours">En cours</h5></td>
    </tr>
    
    
    
  </tbody>
</table>


</div>






</div>
</div>















</body>
</html>
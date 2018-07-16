<?php


 $send="";
 if (isset($_POST['send']))
           {
                $send=$_POST['send'];
                 
           }

if ($send==='true') 
           {

           	$nom=$_POST['nom'];
           	$prenom=$_POST['prenom'];
           	$email=$_POST['email'];
           	$password_in=$_POST['password'];

$servername = "localhost";
$username = "cafigec_charikty";
$password = "pp=.Wt6BQ?ur";
$dbname = "cafigec_charikty";
           	// Create connection
 $conn = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
 } 

 $sql = "INSERT INTO users (nom, email,password,prenom)
 VALUES ('".$nom."','".$email."', '".$password_in."', '".$prenom."')";

 if ($conn->query($sql) === TRUE) {
    echo '<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
   
<div class="row popoup popoup-succes">
<div class="col-md-4"><i class="far fa-smile"></i></div>
<div class="col-md-8">
<h2>Yay! succès</h2>
<p>Votre compte a bien été créé</p>
<a href="index.php">Connectez vous</a>
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

</script>';

 } 
 else {
    echo '<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
   
<div class="row popoup">
<div class="col-md-4"><i class="far fa-frown"></i></div>
<div class="col-md-8">
<h2>Oh Snap!</h2>
<p>Cette adresse email est déjà utilisée</p>
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

</script>';
 }

 $conn->close();
           }           





 


?>
<!doctype html>
<html lang="en">

<head>
<title>Charikty - Creer Un compte</title>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
<link rel="shortcut icon" href="images/favicon.ico" />

<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">



<link href="css/shortcodes.css" rel="stylesheet" type="text/css" />

<link href="css/style.css" rel="stylesheet" type="text/css" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript">
	
	$(document).ready(function() {
     
     
     $('#send').click(function(e) {


                $('input').each(function() {
            if ($.trim($(this).val()) == '') {
                $(this).css({
                    "border": "1px solid #dc1431",
                    "background": "#fff4f9"
                }); 
                event.preventDefault();
                

                
            }
            else {
                
                $(this).css({
                    "border": "",
                    "background": ""
                });
                

                


            }
        }); 
                
                if ($('#exampleInputPassword1').val()!='' || $('#exampleInputPassword2').val()!='') {

                if ($('#exampleInputPassword1').val()!=$('#exampleInputPassword2').val()) 
                {
                	$('.alert').css('display','block');

                	 $('#exampleInputPassword1').css({
                    "border": "1px solid #dc1431",
                    "background": "#fff4f9"
                     });

                     $('#exampleInputPassword2').css({
                    "border": "1px solid #dc1431",
                    "background": "#fff4f9"
                     });
                     event.preventDefault();
                }

                if ($('#exampleInputPassword1').val()===$('#exampleInputPassword2').val()) 
                {
                	$('.alert').css('display','none');

                	$('#exampleInputPassword1').css({
                    "border": "",
                    "background": ""
                     });

                	$('#exampleInputPassword2').css({
                    "border": "",
                    "background": ""
                    });

                }
               }

               else
               {
               	$('#exampleInputPassword1').css({
                    "border": "1px solid #dc1431",
                    "background": "#fff4f9"
                     });

                     $('#exampleInputPassword2').css({
                    "border": "1px solid #dc1431",
                    "background": "#fff4f9"
                     });
               }



              });  
     
   
    });

</script>




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
<div class="iq-register iq-pt-40 iq-pb-30 iq-plr-30">

<form method="POST" action="inscription.php">
<div class="form-group">
<label for="exampleInputName">Votre nom</label>
<input type="text" class="form-control" id="nom" name="nom" placeholder="Nom">
</div>
<div class="form-group iq-mt-20">
<label for="exampleInputEmail">Votre prénom</label>
<input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prénom">
</div>
<div class="form-group iq-mt-20">
<label for="exampleInputEmail">Votre email</label>
<input type="email" class="form-control" id="email" name="email" placeholder="Email">
</div>
<div class="form-group iq-mt-20">
<label for="exampleInputPassword1">Mote de passe</label>
<input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Mot de passe">
</div>
<div class="form-group iq-mt-20">
<label for="exampleInputPassword1">Répéter le mot de passe</label>
<input type="password" class="form-control" id="exampleInputPassword2" name="confirm_password" placeholder="Répéter le mot de passe">
</div>
<div class="alert alert-danger" role="alert" style="display:none;">
  <b>Attention!</b> La confirmation du mot de passe a échoué.
</div>
<button type="submit" class="button iq-mt-40" id="send" name="send" value="true">S'inscrire</button>
</form>
<hr class="iq-mtb-30">
<div class="row">

<div class="col-sm-12">
<div class="text-center iq-mtb-10">
<div class="iq-font-black iq-tw-6">Vous avez déjà un compte?<a href="index.php" class="iq-font-green iq-tw-6"> s'identifier</a></div>
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
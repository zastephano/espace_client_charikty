<?php
include('includes/header.php'); 
?>


<?php
// Start the session
session_start();
?>
<?php 

$conn= mysqli_connect('localhost','cafigec_charikty','pp=.Wt6BQ?ur','cafigec_charikty');

 // Check connection
 if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
 } 

$email_user=$_SESSION["email"];



if(isset($_POST["modifier"]))
{
  


  $l_name=$_POST["nom"];
  $f_name=$_POST["prenom"];
  $new_password=$_POST["password"];
 

  $Update_query='UPDATE `users` SET `nom`="'.$l_name.'",`password`="'.$new_password.'",`prenom`="'.$f_name.'" WHERE `email`="'.$email_user.'"';
  $result2 = mysqli_query($conn, $Update_query);
  
  echo "<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js'></script>";
  echo "<script type='text/javascript'>";
  echo "$(document).ready(function() {";
  echo "$('.modal').css('display','block');";
  echo " });";
  echo " </script>";

}




$select_query='SELECT `nom`,`prenom` FROM `users` where `email`="'.$email_user.'"';

$result = mysqli_query($conn, $select_query);

 
    while($row = mysqli_fetch_assoc($result)) {

    	$last_name=$row["nom"];
    	$first_name=$row["prenom"];
    }


?>


<!DOCTYPE html>
<html>
<head>
	<title>Charikty- Mes dossiers</title>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <meta name="viewport" content="width=device-width height=device-height initial-scale=1.0 maximum-scale=1.0 user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="js/bootstrap.min.js"></script>
	
<style type="text/css">
    input{outline: none;}


    .modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

 
/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 15% auto; /* 15% from the top and centered */
    padding: 0px;
    border: 1px solid #888;
    /*width: 50%; /* Could be more or less, depending on screen size */
}



.popoup .col-md-4
{
 background:#AEC704;
 text-align:center;
 padding:5%;
}

.popoup i
{
 color:#fff;
 font-size:100px;
 }
.popoup .col-md-8
{

 padding:5%;
}
.popoup h2
{

    font-size: 35px;
    color: #AEC704;
    /* text-transform: uppercase; */
    letter-spacing: 1px;
    font-weight: 600;}


.close {
 color: #fff;
    float: right;
    font-size: 19px;
    font-weight: normal;
    /* margin-bottom: 20px; */
    background: #AEC704;
    opacity: 1;
    padding: 2% 3% 2% 3%;
    border-radius: 5px;
    text-align: center;
}




.close:hover,
.close:focus {
    text-decoration: none;
    cursor: pointer;
  color: #fff;
    /* margin-bottom: 20px; */
    background: #db4040;
    opacity: 1;
}
    

    </style>	

<script type="text/javascript">


		$(document).ready(function() {

$('#modifier').click(function(e) {

   if ($('#exampleInputPassword1').val()!='' || $('#exampleInputPassword2').val()!='') {

                if ($('#exampleInputPassword1').val()!=$('#exampleInputPassword2').val()) 
                {
                	 

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

                     event.preventDefault();
               }
        
         });  

       $(".close").click(function(){
           $(".modal").css("display","none");
        });
  
    });

</script>	

</head>
<body id="monprofile">
    
    
   <div id="myModal" class="modal container-fluid">

  <!-- Modal content -->
  <div class="modal-content col-xs-11 col-sm-10 col-md-7">
   
<div class="row popoup">
<div class="col-xs-10 col-sm-4 col-md-4"><i class="fas fa-smile" style="font-size:100px;color:white;"></i></div>
<div class="col-xs-10 col-sm-8 col-md-8">
<h2>Congratulations!</h2>
<p>Vos informations sont à jour</p>

<span class="close" style="margin-left:13px;"><i class="fas fa-times"></i></span>
</div>
</div>
 </div>

</div>
    
    
<div class="container-fluid page-title">

	<h2>Mon Profile</h2>

</div>

<div class="container">
<?php include('includes/menu.php'); ?>
</div>








<div class="container" style="background:#fff;" >
<div class="HomeMenu">

<h3 style="margin-bottom:4%;">Modifier vos informations personnelles</h3>

<form method="POST" action="monprofile.php">
	

<div class="row">
    
<div class="col-md-6">
<label>Nom :</label><input type="text" name="nom" value="<?php echo ($last_name); ?>">
</div>

<div class="col-md-6">

<label>Prénom :</label><input type="text" name="prenom" value="<?php echo ($first_name); ?>">

</div>

</div>

<div class="row">
    
<div class="col-md-6">
<label>Email :</label><input type="text" name="email" disabled value="<?php echo ($email_user); ?>">
</div>


</div>



<div class="row">
    
<div class="col-md-6">
<label>Mot de passe :</label><input type="text" name="password" id="exampleInputPassword1">
</div>



<div class="col-md-6">

<label>Répeter Mot de passe :</label><input type="text" name="rptpassword" id="exampleInputPassword2">

</div>

</div>


<div class="row">
    
<div class="col-md-12">
<input type="submit" class="updateBTN" name="modifier" id="modifier" value="Modifier"></div>


</div>

</form>





</div>
</div>


















</body>
</html>
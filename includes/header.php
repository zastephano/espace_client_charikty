<?php
header('Content-Type: text/html; charset=utf-8');
include 'connexion.php';
session_start();
ob_start();
?>
<?php
if(!isset($_SESSION["email"]))
{   
  
    header("location:index.php");
   ?>

<?php
}
if(isset($_POST["deconnexion"]))
{
	session_unset(); 
	
	header("location:index.php");
	
	?>

<?php
}
ob_end_flush();
?>
<head>
<meta charset="UTF-8">
</head>
<div class="container-fluid" id="header">
<div class="row">
<div class="col-md-6 logo">
<img src="img/logo.png"/>
</div>


<div class="col-md-6" style="text-align:right;">
<?php 
$sql1 = "SELECT * FROM users where email='".$_SESSION['email']."'";
$req1 = mysqli_query($base,$sql1)or die("MySQL error: " . mysqli_error($base) . "<hr>\nQuery: $query");
while($row1 = mysqli_fetch_array($req1))
{
$monnom =$row1["nom"];
$emaill = $row1["email"];
?>
<div class="dropdown">
<button onclick="myFunction()" class="dropbtn"><i class="fa fa-user"></i> <?php echo $monnom;?> </button>
<div id="myDropdown" class="dropdown-content">
<form method="post" action="#">
<h2><button type="submit" name="deconnexion" id="deconnexion"><i class="fa fa-sign-out" aria-hidden="true"></i>
 Deconnexion</button></h2>
			</form>
</div>
 
<?php 
}
?>
</div>

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
</div>
</div>
</div>
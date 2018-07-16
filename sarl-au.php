<?php

include('includes/header.php');
$email = $_GET['email'];
$sql = "SELECT * FROM users where email = '$email'";
$req = mysqli_query($base,$sql);
$rows = mysqli_num_rows($req);
if( $rows > 0)
{	
$row = mysqli_fetch_assoc($req);
$emaila = $row["email"];
$nom = $row["nom"];
$prenom = $row["prenom"];
}
 echo 
'
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){


  $("#end").click(function(e) {

       

         var civilite_associe = localStorage.getItem("civilite_associe");
         var email_associe = localStorage.getItem("email_associe");
      var nom_associe = localStorage.getItem("nom_associe").replace(/\+/g, " ");
      var prenom_associe = localStorage.getItem("prenom_associe").replace(/\+/g, " ");
      var adresse_associe = localStorage.getItem("adresse_associe").replace(/\+/g, " ");
      var code_postal_associe = localStorage.getItem("code_postal_associe").replace(/\+/g, " ");
      var ville_associe = localStorage.getItem("ville_associe").replace(/\+/g, " ");
      var jour_naissance_associe = localStorage.getItem("jour_naissance_associe");
      var mois_naissance_associe = localStorage.getItem("mois_naissance_associe");
      var annee_naissance_associe = localStorage.getItem("annee_naissance_associe").replace(/\+/g, " ");
      var lieu_naissance_associe = localStorage.getItem("lieu_naissance_associe").replace(/\+/g, " ");
      var nationalite_associe = localStorage.getItem("nationalite_associe").replace(/\+/g, " "); 

      var type_identifiant_associe = localStorage.getItem("type_identifiant_associe");
      var code_identifiant_associe = localStorage.getItem("code_identifiant_associe").replace(/\+/g, " ");


      var nom_societe = localStorage.getItem("nom_societe").replace(/\+/g, " ");
      var denomination_1 = localStorage.getItem("denomination_1").replace(/\+/g, " ");
      var denomination_2 = localStorage.getItem("denomination_2").replace(/\+/g, " ");



      var adresse_siege_social = localStorage.getItem("adresse_siege_social").replace(/\+/g, " ");
      var code_postal_siege_social = localStorage.getItem("code_postal_siege_social").replace(/\+/g, " ");
      var ville_siege_social = localStorage.getItem("ville_siege_social").replace(/\+/g, " ");
      var emplacement_siege_social = localStorage.getItem("emplacement_siege_social").replace(/\+/g, " ");



      var activite_principal_societe = localStorage.getItem("activite_principal_societe").replace(/\+/g, " ");
      var description_activite_principal_societe = localStorage.getItem("description_activite_principal_societe").replace(/\+/g, " ");


      var capital_en_chiffres = localStorage.getItem("capital_en_chiffres");
      var capital_en_letteres = localStorage.getItem("capital_en_letteres");
      var nombre_actions = localStorage.getItem("nombre_actions");

       
       
       

       $.post("test.php",
    {
        

        civilite_associe: civilite_associe,
         email_associe: email_associe,
        nom_associe: nom_associe,
        prenom_associe: prenom_associe,
        adresse_associe: adresse_associe,
        code_postal_associe: code_postal_associe,
        ville_associe: ville_associe,
        jour_naissance_associe: jour_naissance_associe,
        mois_naissance_associe: mois_naissance_associe,
        annee_naissance_associe: annee_naissance_associe,
        lieu_naissance_associe: lieu_naissance_associe,
        nationalite_associe: nationalite_associe,
        type_identifiant_associe: type_identifiant_associe,
        code_identifiant_associe: code_identifiant_associe,

        
        nom_societe: nom_societe,
        denomination_1: denomination_1,
        denomination_2: denomination_2,



        adresse_siege_social: adresse_siege_social,
        code_postal_siege_social: code_postal_siege_social,
        ville_siege_social: ville_siege_social,
        emplacement_siege_social: emplacement_siege_social,



        activite_principal_societe: activite_principal_societe,
        description_activite_principal_societe: description_activite_principal_societe,


        capital_en_chiffres: capital_en_chiffres,
        capital_en_letteres: capital_en_letteres,
        nombre_actions: nombre_actions
        




    }, function(data) {
        $(".modal").css("display","block");
});



  });  


     



});
</script>
'; 


                         

?>
<html>
<head>
	<title>Sarl Au</title>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link rel="stylesheet" href="css/start.css">
	    <meta name="viewport" content="width=device-width height=device-height initial-scale=1.0 maximum-scale=1.0 user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">

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

.altBtn{background:#AEC704;}
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

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
	<script src="js/steps.js"></script>
		<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="js/bootstrap.min.js"></script>
	
	
	<script>
	
	$(document).ready(function() {
		$(".alert-danger").css("display","none");
        
       
		

    $('#next1').click(function(e) {
        var isValid = 0;
      
        	$(".step1 input[type='text']").each(function() {
            if ($.trim($(this).val()) == '') {
                isValid++;
                $(this).css({
                    "border": "1px solid #dc1431",
                    "background": "#fff4f9"
                });	
                
            }
            else {
                $(this).css({
                    "border": "",
                    "background": ""
                });
            }
        });

        if (!$(".step1 input[type='radio']").is(":checked")) {isValid++;}

        if ($("#jour_naissance_associe").val()== 'Jour'  || $("#mois_naissance_associe").val()== 'Mois') {isValid++;}

       

        if (isValid>0) 
            {
              $(".alert-danger").css("display","block");
        	  event.preventDefault();
            }
        });
        

    $('#next2').click(function(e) {
        var isValid = 0;  
        
            $(".step2 input[type='text']").each(function() {
            if ($.trim($(this).val()) == '') {
                isValid++;
                $(this).css({
                    "border": "1px solid #dc1431",
                    "background": "#fff4f9"
                }); 
                
            }
            else {
                $(this).css({
                    "border": "",
                    "background": ""
                });
            }


        });
       
        if ($("#Denomination_1").val() == $("#Denomination_2").val() && 
       $("#Denomination_2").val() == $("#nom_societe").val()) {
                isValid++;
                $("#nom_societe").css({
                    "border": "1px solid #dc1431",
                    "background": "#fff4f9" 
                }); 

                $("#Denomination_1").css({
                    "border": "1px solid #dc1431",
                    "background": "#fff4f9"
                }); 

                 $("#Denomination_2").css({
                    "border": "1px solid #dc1431",
                    "background": "#fff4f9"
                }); 
            }
       


       else if ($("#nom_societe").val() == $("#Denomination_1").val()) {
                isValid++;
                $("#nom_societe").css({
                    "border": "1px solid #dc1431",
                    "background": "#fff4f9" 
                }); 

                $("#Denomination_1").css({
                    "border": "1px solid #dc1431",
                    "background": "#fff4f9"
                }); 
                
            } 
        else  if ($("#nom_societe").val() == $("#Denomination_2").val()) {
                isValid++;
                $("#nom_societe").css({
                    "border": "1px solid #dc1431",
                    "background": "#fff4f9"
                }); 

                $("#Denomination_2").css({
                    "border": "1px solid #dc1431",
                    "background": "#fff4f9"
                }); 
                
            }   

      else  if ($("#Denomination_1").val() == $("#Denomination_2").val()) {
                isValid++;
                $("#Denomination_2").css({
                    "border": "1px solid #dc1431",
                    "background": "#fff4f9"
                }); 

                $("#Denomination_1").css({
                    "border": "1px solid #dc1431",
                    "background": "#fff4f9"
                }); 
                
            }
                    
         

        
        if (isValid>0) 
            {
              $(".alert-danger").css("display","block");
        	  event.preventDefault();
            }

        }); 
      



        $('#next3').click(function(e) {
        var isValid = 0;
      
        	$(".step3 input[type='text']").each(function() {
            if ($.trim($(this).val()) == '') {
                isValid++;
                $(this).css({
                    "border": "1px solid #dc1431",
                    "background": "#fff4f9"
                });	
                
            }
            else {
                $(this).css({
                    "border": "",
                    "background": ""
                });
            }
        });

       

        if (isValid>0) 
            {
              $(".alert-danger").css("display","block");
        	  event.preventDefault();
            }
        }); 
        


        $('#next4').click(function(e) {

        	if (!$("#activite_not_found").is(":checked")) 
        	{
            var isValid = 0;
            
            if ($(".step4 select").val() == 'Choisissez votre activité principale dans cette liste') {isValid++;}
        
            if ($(".step4 textarea").val() == '') {
                isValid++;
                $(".step4 textarea").css({
                    "border": "1px solid #dc1431",
                    "background": "#fff4f9"
                });	
                
            }
            else {
                $(".step4 textarea").css({
                    "border": "",
                    "background": ""
                });
            }
       

       

        if (isValid>0) 
            {
              $(".alert-danger").css("display","block");
        	  event.preventDefault();
            }

        	}

        	else
        	{
        		var isValid = 0;
            
            
        
            if ($(".step4 textarea").val() == '') {
                isValid++;
                $(".step4 textarea").css({
                    "border": "1px solid #dc1431",
                    "background": "#fff4f9"
                });	
                
            }
            else {
                $(".step4 textarea").css({
                    "border": "",
                    "background": ""
                });
            }
       

       

        if (isValid>0) 
            {
              $(".alert-danger").css("display","block");
        	  event.preventDefault();
            }
        	}
       
        });  



        $('#next5').click(function(e) {
        var isValid = 0;
      
        	$(".step5 input[type='text']").each(function() {
            if ($.trim($(this).val()) == '') {
                isValid++;
                $(this).css({
                    "border": "1px solid #dc1431",
                    "background": "#fff4f9"
                });	
                
            }
            else {
                $(this).css({
                    "border": "",
                    "background": ""
                });
            }
        });

       

        if (isValid>0) 
            {
              $(".alert-danger").css("display","block");
        	  event.preventDefault();
            }
        });    

        $('#next6').click(function(e) {

        	if ($("#gerantFalse").is(":checked")) 
        	{
             
             
             var isValid = 0;
      
        	$(".step6 input[type='text']").each(function() {
            if ($.trim($(this).val()) == '') {
                isValid++;
                $(this).css({
                    "border": "1px solid #dc1431",
                    "background": "#fff4f9"
                });	
                
            }
            else {
                $(this).css({
                    "border": "",
                    "background": ""
                });
            }
        });

        if (!$(".case_2 input[type='radio']").is(":checked")) {isValid++;}

        if ($("#jour_naissance_gerant").val()== 'Jour'  || $("#mois_naissance_gerant").val()== 'Mois') {isValid++;}

       

        if (isValid>0) 
            {
              $(".alert-danger").css("display","block");
        	  event.preventDefault();
            }

        	}
       

        });    

		
        
        

    });
	
	</script>
	
	

</head>
<body>
   
   <div id="myModal" class="modal container-fluid">

  <!-- Modal content -->
  <div class="modal-content col-xs-11 col-sm-10 col-md-7">
   
<div class="row popoup">
<div class="col-xs-10 col-sm-4 col-md-4"><i class="fas fa-smile" style="font-size:100px;color:white;"></i></div>
<div class="col-xs-10 col-sm-8 col-md-8">
<h2>Congratulations!</h2>
<p>Vous avez créer votre société avec succès</p>

<a class="btn btn-primary altBtn col-6" href="moncompte.php" role="button" style="margin-left:13px;">Mon Compte</a>
</div>
</div>
 </div>

</div> 

 <div class="popUP">
    <div class="messgeTXT">
    <div class="close"><i class="fa fa-times"></i></div>
    <div style="width:150%;height:1px;background:#E9ECEF;margin-bottom:20px;margin-left:-40px;"></div>
        <label></label>
    <div style="width:150%;height:1px;background:#E9ECEF;margin-top:20px;margin-left:-40px;"></div>
    </div>
 </div>



<div class="container-fluid steps">
<div class="row">
  <div class="popUP">
                      <div class="messgeTXT">
                      <div class="close">
                        <i class="fa fa-times"></i>
                      </div>
                       <div style="width:150%;height:1px;background:#E9ECEF;margin-bottom:20px;margin-left:-40px;"></div>
                       <label></label>
                       <div style="width:150%;height:1px;background:#E9ECEF;margin-top:20px;margin-left:-40px;"></div>
                      </div>
                </div>

  <div class="col-md-9">
    <div class="inner_wrapper">

	
	<!-- 	Begin Step 1 -->	

        <div class="step1">
                
               <form method="GET" action="sarl-au.php">
               <input type="text" name="number_step" class="number_step" value="first">  
               <h2>Quel est l'associé unique de la société ? <i class="fa fa-info-circle" id="msg3" style="font-size:15px;color:#2F5BBA;cursor:pointer;"></i></h2> 
               <div class="alert alert-danger">
                <strong>Alert!</strong> Veuillez remplir tous les champs.
                </div>  
			    <div class="row">
			   <div class="col-md-12">
			   <label>Civilité :</label><input type="radio" name="civilite_associe" value="Mr"> Mr
               	          <input type="radio" name="civilite_associe" value="Mme"> Mme
               	          <input type="radio" name="civilite_associe" value="Mlle"> Mlle
			   </div>
			   
			   </div>
			   <div class="row">
			   <div class="col-md-6">
			   <input type="hidden" value="<?php echo $emaila; ?>" name="email_associe">
			   </div>
			   </div>
			   <div class="row">
			   <div class="col-md-6">
			   <label>Nom :</label><input type="text" value="<?php echo $nom; ?>" name="nom_associe" id="nom_associe">
			   </div>
			   <div class="col-md-6">
			   <label>Prenom :</label><input type="text" value="<?php echo $prenom; ?>" name="prenom_associe">
			   </div>
			   </div>
			   
			   
			   <div class="row adress">
			   <div class="col-md-12">
			   <label>Adresse :</label><input type="text" name="adresse_associe">
			   </div>
			   </div>
			   
			   
			   <div class="row">
			   <div class="col-md-6">
			   <label>Code Postal :</label><input type="text" name="code_postal_associe">
			   </div>
			   <div class="col-md-6">
			   <label>Ville :</label><input type="text" name="ville_associe">
			   </div>
			   </div>
               
			   <div class="row">
			   <div class="col-md-6 birthday">
			   <label>Date de naissance :</label>
			   <select name="jour_naissance_associe" id="jour_naissance_associe"><option>Jour</option>
               		   	 <option>01</option><option>02</option><option>03</option><option>04</option><option>05</option>
               		   	 <option>06</option><option>07</option><option>08</option><option>09</option><option>10</option>
               		   	 <option>11</option><option>12</option><option>13</option><option>14</option><option>15</option>
               		   	 <option>16</option><option>17</option><option>18</option><option>19</option><option>20</option>
               		   	 <option>21</option><option>22</option><option>23</option><option>24</option><option>25</option>
               		   	 <option>26</option><option>27</option><option>28</option><option>29</option><option>30</option>
               		   	 <option>31</option>
               		   </select>
               		   <select name="mois_naissance_associe" id="mois_naissance_associe"><option>Mois</option>
               		   	 <option>01</option><option>02</option><option>03</option><option>04</option><option>05</option>
               		   	 <option>06</option><option>07</option><option>08</option><option>09</option><option>10</option>
               		   	 <option>11</option><option>12</option>
               		   </select>
               		   <input type="text" name="annee_naissance_associe" placeholder="Année">
			   </div>
			   <div class="col-md-6">
			   <label>Lieu de Naissance :</label><input type="text" name="lieu_naissance_associe">
			   </div>
			   </div>
              
               <div class="row">
			   <div class="col-md-6">
			   <label>Nationalité :</label><input type="text" name="nationalite_associe">
			   </div>
			    
			   </div>
			   
			   <div class="row">
			   <div class="col-md-6">
			   <label>Types d'identite :</label>
			   <select name="type_identifiant_associe">
               		 <option>Carte nationale</option>
                   <option>Passeport</option>
                   <option>Carte sejour</option>
                  </select>
			   </div>
			   <div class="col-md-6">
			   <label>Numéro d'identification :</label>
			   <input type="text" name="code_identifiant_associe">
			   </div>
			   </div>
   
               <input type="submit" class="nextBTN" name="next" id="next1" value="SUIVANT">
               
               </form>
     
           </div>
    
	
<!-- 	End Step 1 -->	
	
	
	
	      
              <!-- 	Begin Step 2 -->
             <div class="step2">
               <form method="GET" action="sarl-au.php">
               <input type="text" name="number_step" class="number_step" value="second">
			   <div class="row">
			   <div class="col-md-12">
			   <h2>Quel est le nom de la société ? <i class="fa fa-info-circle" id="msg1" style="font-size:15px;color:#2F5BBA;cursor:pointer;"></i></h2> 
			   <div class="alert alert-danger">
                <strong>Alert!</strong> Le nom de la société est obligatoir.
                </div>
                <Label>Dénomination 1</label>
               <input type="text" name="nom_societe" id="nom_societe">
			   </div>
			   </div>
               
			   <div class="row">
			   <div class="col-md-12">
			   <Label>Dénomination 2</label>
               <input type="text" name="Denomination_1" id="Denomination_1">
			   </div>
			   </div>
			   
			   <div class="row">
			   <div class="col-md-12">
			   <Label>Dénomination 3</label>
               <input type="text" name="Denomination_2" id="Denomination_2">
			   </div>
			   </div>

			    
			   
			   <div class="row">
			   <div class="col-md-6">
			   <input type="hidden" name="civilite_associe" id="nom_associe" value="<?php echo $_GET["civilite_associe"]?>" />
			   </div>
			   </div>
			   		   			   <div class="row">
			   <div class="col-md-6">
			   <input type="hidden" name="nom_associe" id="nom_associe" value="<?php echo $_GET["nom_associe"]?>" />
			   </div>
			   </div>
			   			   <div class="row">
			   <div class="col-md-6">
			   <input type="hidden" name="nom_associe" id="nom_associe" value="<?php echo $_GET["nom_associe"]?>" />
			   </div>
			   <div class="col-md-6">
			<input type="hidden" name="prenom_associe" value="<?php echo $_GET["prenom_associe"]?>" />
			   </div>
			   </div>
			   
			   
			   <div class="row adress">
			   <div class="col-md-12">
			  <input type="hidden" name="adresse_associe" value="<?php echo $_GET["adresse_associe"]?>" />
			   </div>
			   </div>
			   
			   
			   <div class="row">
			   <div class="col-md-6">
			  <input type="hidden" name="code_postal_associe" value="<?php echo $_GET["code_postal_associe"]?>" />
			   </div>
			   <div class="col-md-6">
                <input type="hidden" name="ville_associe" value="<?php echo $_GET["ville_associe"]?>" />
			   </div>
			   </div>
               
			   <div class="row">
			   <div class="col-md-6 birthday">
			   <input type="hidden" name="jour_naissance_associe" id="jour_naissance_associe" value="<?php echo $_GET["jour_naissance_associe"]?>" />

               		   <input type="hidden" name="mois_naissance_associe" id="mois_naissance_associe" value="<?php echo $_GET["mois_naissance_associe"]?>" />
               		   <input type="hidden" name="annee_naissance_associe" placeholder="Année" value="<?php echo $_GET["annee_naissance_associe"]?>" />
			   </div>
			   <div class="col-md-6">
               <input type="hidden" name="lieu_naissance_associe" value="<?php echo $_GET["lieu_naissance_associe"]?>" />
			   </div>
			   </div>
              
               <div class="row">
			   <div class="col-md-6">
               <input type="hidden" name="nationalite_associe" value="<?php echo $_GET["nationalite_associe"]?>" />
			   </div>
			   
			   </div>
			   
			   <div class="row">
			   <div class="col-md-6">
			   <input type="hidden" name="type_identifiant_associe" value="<?php echo $_GET["type_identifiant_associe"]?>" />
			   </div type="hidden">
			   <div class="col-md-6">
			   <input type="hidden" name="code_identifiant_associe" value="<?php echo $_GET["code_identifiant_associe"]?>" />
			   </div>
			   </div>
			   <div class="row">
			   <div class="col-md-6">
			    <input type="submit" class="prevBTN" name="prev" value="PRECEDENT"> 
			   </div>
			   
			   <div class="col-md-6">
			   <input type="submit" class="nextBTN" name="next" id="next2" value="SUIVANT">
			   </div>
			   </div>
              
 
              
               </form>
      
           </div>

            <!-- 	End Step 2 -->
		   
		   
		   
		   
		                 <!-- 	Begin Step 3 -->

           <div class="step3">

             <form method="GET" action="sarl-au.php">

               <input type="text" name="number_step" class="number_step" value="third">
               <h2>Quelle est l'adresse du siège social ? <i class="fa fa-info-circle" id="msg4" style="font-size:15px;color:#2F5BBA;cursor:pointer;"></i></h2>

               <div class="alert alert-danger">
                <strong>Alert!</strong> Veuillez remplir tous les champs.
                </div> 
                
				<div class="row">
			   <div class="col-md-12">
			   <Label>Adresse :</label>
               <input type="text" name="adresse_siege_social">
			   </div>
			   </div>
			   
			   
			   <div class="row">
			   <div class="col-md-6">
			   <Label>Code postal :</label>
               <input type="text" name="code_postal_siege_social">
			   </div>
			   
			   <div class="col-md-6">
			   <Label>Ville :</label>
               <input type="text" name="ville_siege_social">
			   </div>
			   </div>


			   <div class="row">
			   <h2>Le siège social est situé :</h2> 
			   <div class="col-md-12">
			   <Label>Emplacement siège social :</label>
               <select name="emplacement_siege_social">
               <option>Au domicile du dirigeant</option>
               <option>Dans un local commercial</option>
               <option>Dans une entreprise de domiciliation</option>
               <option>Dans un local mis à disposition gratuitement par une société</option>
               <option>Dans un local mis à disposition gratuitement par une personne physique</option>     
               </select>			  
			   </div>
			   </div>
			   			   
			   			   		   			   <div class="row">
			   <div class="col-md-6">
			   <input type="hidden" name="civilite_associe" id="nom_associe" value="<?php echo $_GET["civilite_associe"]?>" />
			   </div>
			   </div>
                               <div class="row adress">
			   <div class="col-md-12">
                              <input type="hidden" name="nom_societe" id="nom_societe" value="<?php echo $_GET["nom_societe"]?>" />
			   </div>
			   </div>
               
			   <div class="row">
			   <div class="col-md-12">
               <input type="hidden" name="denomination_1" value="<?php echo $_GET["denomination_1"]?>"/>
			   </div>
			   </div>
			   
			   <div class="row">
			   <div class="col-md-12">
               <input type="hidden" name="denomination_2" value="<?php echo $_GET["denomination_2"]?>" />
			   </div>
			   </div>

			    
			   			   <div class="row">
			   <div class="col-md-6">
			   <input type="hidden" name="nom_associe" id="nom_associe" value="<?php echo $_GET["nom_associe"]?>" />
			   </div>
			   <div class="col-md-6">
			<input type="hidden" name="prenom_associe" value="<?php echo $_GET["prenom_associe"]?>" />
			   </div>
			   </div>
			   
			   
			   <div class="row adress">
			   <div class="col-md-12">
			  <input type="hidden" name="adresse_associe" value="<?php echo $_GET["adresse_associe"]?>" />
			   </div>
			   </div>
			   
			   
			   <div class="row">
			   <div class="col-md-6">
			  <input type="hidden" name="code_postal_associe" value="<?php echo $_GET["code_postal_associe"]?>" />
			   </div>
			   <div class="col-md-6">
                <input type="hidden" name="ville_associe" value="<?php echo $_GET["ville_associe"]?>" />
			   </div>
			   </div>
               
			   <div class="row">
			   <div class="col-md-6 birthday">
			   <input type="hidden" name="jour_naissance_associe" id="jour_naissance_associe" value="<?php echo $_GET["jour_naissance_associe"]?>" />

               		   <input type="hidden" name="mois_naissance_associe" id="mois_naissance_associe" value="<?php echo $_GET["mois_naissance_associe"]?>" />
               		   <input type="hidden" name="annee_naissance_associe" placeholder="Année" value="<?php echo $_GET["annee_naissance_associe"]?>" />
			   </div>
			   <div class="col-md-6">
               <input type="hidden" name="lieu_naissance_associe" value="<?php echo $_GET["lieu_naissance_associe"]?>" />
			   </div>
			   </div>
              
               <div class="row">
			   <div class="col-md-6">
               <input type="hidden" name="nationalite_associe" value="<?php echo $_GET["nationalite_associe"]?>" />
			   </div>
			   
			   </div>
			   
			   <div class="row">
			   <div class="col-md-6">
			   <input type="hidden" name="type_identifiant_associe" value="<?php echo $_GET["type_identifiant_associe"]?>" />
			   </div type="hidden">
			   <div class="col-md-6">
			   <input type="hidden" name="code_identifiant_associe" value="<?php echo $_GET["code_identifiant_associe"]?>" />
			   </div>
			   </div>
			   <div class="row">
			   <div class="col-md-6">
			    <input type="submit" class="prevBTN" name="prev" value="PRECEDENT">  
			   </div>
			   
			   <div class="col-md-6">
			   <input type="submit" class="nextBTN" name="next" id="next3" value="SUIVANT">
			   </div>
			   </div>
                              
               </form>      
           </div>

           <div class="step4">
             
               <form method="GET" action="sarl-au.php">
               <h2>Quelle est l'activité principale de la société ? <i class="fa fa-info-circle" id="msg5" style="font-size:15px;color:#2F5BBA;cursor:pointer;"></i></h2>

                <div class="alert alert-danger">
                <strong>Alert!</strong> Veuillez remplir tous les champs.
                </div> 

               <input type="text" name="number_step" class="number_step" value="forth"> 
               
			   
			   
			   <div class="row">
			   <div class="col-md-12">
			   <Label>L'activité principale détermine le code APE de votre société </label>
			   </div>
			   
			   <div class="col-md-12">
<select class="activite" name="activite_principal_societe"><option data-text=''>Choisissez votre activité principale dans cette liste</option>

               <option data-text="La vente et/ou l’organisation de voyages individuels ou collectifs, ainsi que tous services pouvant être fournis à l’occasion de voyages ou de séjours, notamment des services liés au transport, à l’hébergement, à la restauration et aux visites touristiques.">Agence de voyages</option>
<option data-text="L'activité de gestion immobilière, de transactions sur immeubles et fonds de commerce, et d'administration de biens.">Agence immobilière</option>
<option data-text="L'activité d'agent commercial.">Agent commercial</option>
<option data-text="Le commerce de détail non spécialisé en magasin à prédominance alimentaire ">Alimentation générale</option>
<option data-text="Transport sanitaire de personnes">Ambulance </option>
<option data-text="Etablissement d'enseignement à titre onéreux de la conduite de véhicules à moteur et de la sécurité routière.">Auto-école</option>
<option data-text="Commerce de détail d'articles de bijouterie et d'horlogerie en commerce spécialisé.">Bijouterie </option>
<option data-text="La préparation et la vente de viandes et/ou de produits à base de viande ou d’abats et de charcuteries tels que pâtés, rillettes, saucisses, salamis, boudins, andouillettes, cervelas, mortadelles, galantines, jambons cuits">Boucherie, Charcuterie </option>
<option data-text="La fabrication associée à la vente au détail de pains, de viennoiseries, et de pâtisseries fraiches">Boulangerie, pâtisserie</option>
<option data-text="L'exploitation de véhicules de tourisme avec chauffeur.">Chauffeur VTC </option>
<option data-text="Le conseil et l'assistance opérationnelle apportés aux entreprises et autres organisations en matière de gestion.">Conseil en gestion</option>
<option data-text="Entreprise générale de construction de maisons individuelles et/ou préfabriquées">Construction de maisons</option>
<option data-text="Conseil en systèmes et logiciels informatiques.">Consultant informatique</option>
<option data-text="L'activité des agents et courtiers en assurance.">Courtage en assurances</option>
<option data-text="L'intermédiation en opérations de banque, et/ou en services de paiement.">Courtage en prêts immobiliers</option>
<option data-text="Atelier de couture et retouche d’articles d’habillement">Couturier </option>
<option data-text="La conception, l'édition, le développement et l'exploitation de sites internet, et d'applications mobiles.">Création de sites internet</option>
<option data-text="L'agencement de l'intérieur, l'aménagement des espaces et la décoration.">Décoration d'intérieur</option>
<option data-text="Les services de déménagement par transport routier fournis aux entreprises et aux ménages, garde-meubles.">Déménagement</option>
<option data-text="L'édition de livres sous forme imprimée, électronique (CD, écrans, etc.), audio ou encore sur Internet.>Edition de livres</option>
<option data-text="La mise en place d'installations électriques de tous types, courant fort et faible, domotique.">Electricité </option>
<option data-text="Le commerce de détail de produits d'épicerie.">Epicerie </option>
<option data-text="L'organisation, la promotion et la gestion d'évènements en tous genres.">Evènementiel </option>
<option data-text="L'activité de formation professionnelle continue pour adultes.">Formation continue </option>
<option data-text="L’exploitation d’une galerie d’art, l'édition et la négociation de tous supports artistiques et culturels, l'organisation de tout événement ou action de communication culturelle ou professionnelle.">Galerie d’arts</option>
<option data-text="La sécurité des biens et des personnes, surveillance humaine ou surveillance par des systèmes électroniques de sécurité ou gardiennage.">Gardiennage </option>
<option data-text="L’import-export de tous produits non réglementés ">Import-export </option>
<option data-text="Vente d'articles de librairie, de papeterie, de fourniture de bureau, de jeux et organisation d'événements culturels">Librairie </option>
<option data-text="La location de voitures particulières et autres véhicules automobiles légers sans chauffeur.">Location de véhicules</option>
<option data-text="La location de chambres meublées assortie de prestations, notamment, la fourniture du petit déjeuner et du linge de maison.">Maison d'Hôtes</option>
<option data-text="L'achat et la vente de biens immobiliers">Marchand de biens</option>
<option data-text="Le commerce de détail d'articles en cuir, d'accessoires de voyage en cuir ou en cuirs synthétiques.">Maroquinerie</option>
<option data-text="Le montage de menuiseries extérieures et intérieures, de fermetures de bâtiments et de portails en bois ou en matières plastiques, tels que fenêtres, portes fenêtres, volets roulants, etc.">Menuiserie</option>
<option data-text="Les activités de mécanique automobile, carrosserie, dépannage-remorquage.">Mécanique automobile</option>
<option data-text="L'activité de nettoyage, tous corps d'état.">Nettoyage</option>
<option data-text="L'achat, la vente, l'importation, l'exportation, de véhicules neufs ou d'occasion, ainsi que de toutes pièces ou accessoires automobiles.">Négoce automobile</option>
<option data-text="L’achat, la vente, en gros ou au détail, de tous produits non réglementés ">Négoce de produits divers </option>
<option data-text="Commerce de détail d'optique : vente et montages de verres correcteurs, vente de lunettes, vente de lentilles de contact, vente de produits d'entretien pour les lunettes et les lentilles, vente d'articles divers.">Optique</option>
<option data-text="La peinture intérieure et extérieure des bâtiments, les travaux de peinture sur des ouvrages de génie civil">Peinture</option>
<option data-text="La réalisation de toutes prestations photographiques et vidéos pour les particuliers et professionnels ">Photographe</option>
<option data-text="La préparation et la vente de pizzas sur place et à emporter">Pizzeria</option>
<option data-text="La plomberie, l'installation de systèmes de chauffage et de conditionnement d'air, y compris extensions, transformations, entretien et réparations.">Plomberie/Chauffage/climatisation</option>
<option data-text="La réalisation de tous travaux de plâtrerie, revêtement des murs, et d'isolation intérieure et extérieure.">Plâtrerie</option>
<option data-text="La production, la réalisation et la fourniture de prestations audiovisuelles, de rédaction d'articles, vidéo, sonores ou écrits pour tout support télévisuel, internet, DVD, presse...">Production audiovisuelle</option>
<option data-text="L'exploitation d'un laboratoire de prothésiste dentaire, la fabrication de matériel médico-chirurgical et dentaire dont notamment la fabrication de dents artificielles, bridges etc fabriqués en laboratoires dentaires.">Prothésiste dentaire</option>
<option data-text="Les activités des agences de publicité et la régie publicitaire de médias.">Publicité/communication</option>
<option data-text="L'exploitation de tous fonds de commerce de restauration, bar, débit de boissons, à consommer sur place ou à emporter, fabrication et vente de plats cuisinés à consommer sur place ou à emporter.">Restauration, bar</option>
<option data-text="L'exploitation de tous fonds de commerce de restauration rapide, sur place, à emporter, ou en livraison.">Restauration rapide</option>
<option data-text="La réalisation de travaux du bâtiment, tous corps d'état.">Rénovation du bâtiment</option>
<option data-text="Le lavage, la coupe, la mise en plis, la teinture, la coloration, l'ondulation, le défrisage de cheveux et les services analogues pour hommes et femmes, le rasage et la taille de la barbe">Salon de coiffure</option>
<option data-text="La réalisation de toutes prestations de services administratifs combinés de bureau pour le compte de tiers.">Secrétariat</option>
<option data-text="L'activité de serrurerie : réalisation d'ouvrages en métal destinés à la sécurité, à l'accès des bâtiments ou à la décoration ; la pose, le dépannage, l'entretien et l'ouverture de porte blindée.">Serrurerie</option>
<option data-text="L'aide et le service à la personne à domicile tel que les courses, le ménage, le grand nettoyage occasionnel, le repassage, la préparation des repas, le petit bricolage ainsi que le petit jardinage.">Services à la personne</option>
<option data-text="L'activité des sociétés holdings, c'est-à-dire la prise de participations dans toutes sociétés civiles ou commerciales.">Société Holding</option>
<option data-text="Les conseils en beauté et les soins du visage et de la peau : maquillage, traitement anti rides, massages faciaux à vocation esthétique,  les soins de manucure et les soins des pieds à vocation esthétique, l'épilation.">Soins de beauté</option>
<option data-text="Soutien scolaire, aide aux devoirs, cours particuliers,">Soutien scolaire</option>
<option data-text="Le transport de voyageurs par taxis">Taxi</option>
<option data-text="La fourniture de services de restauration sur la base de dispositions contractuelles conclues avec le client, à l'endroit précisé par celui-ci et pour une occasion particulière.">Traiteur</option>
<option data-text="Le transport routier de marchandises au moyen de véhicules n'excédant pas 3.5 T.">Transport de marchandises</option>
<option data-text="Le transport public routier de personnes, au moyen de véhicules de tourisme n'excédant pas neuf places, conducteur compris.">Transport de personnes</option>
<option data-text="La vente au détail de vêtements de prêt-à-porter et accessoires de mode ">Vente de prêt à porter </option>
<option data-text="La vente et la pose de vitres, de miroirs, de portes en glace et de vitrines.">Vitrerie</option>
<option data-text="La création d’objets de communication visuelle, notamment la création des éléments graphiques de sites internet ou d'applications mobiles.">Webdesigner</option> 
                
               </select>
			   <label><input type="checkbox" class="checkbox" id="activite_not_found"> Je ne trouve pas mon activité principale dans cette liste</label>

			   </div>
			   </div>
			   
			   
			   
                
				
				<div class="row">
			   <div class="col-md-12">
			   <Label class="lbl1">Vous pouvez modifier la description ci-dessous </label>
			   <Label class="lbl2" style="display:none;margin-bottom:10px;">Rédigez l'objet social dans le cadre ci-dessous en utilisant des mots simples décrivant précisément l'activité principale de votre société.Besoin d'aide pour rédiger votre objet social ? Contactez nous au 01 84 17 84 77  </label>
			   </div>
			   </div>
			   
			   <div class="row">
			   <div class="col-md-12">
               <textarea class="descriptionTXT" name="description_activite_principal_societe" rows="8" style="width:100%;padding:10px;outline:none;"></textarea>
			   </div>
			   </div>
			   			   			   		   			   <div class="row">
			   <div class="col-md-6">
			   <input type="hidden" name="civilite_associe" id="nom_associe" value="<?php echo $_GET["civilite_associe"]?>" />
			   </div>
			   </div>
			   <div class="row">
			   <div class="col-md-12">
               <input type="hidden" name="adresse_siege_social" value="<?php echo $_GET["adresse_siege_social"]?>">
			   </div>
			   </div>
			   
			   
			   <div class="row">
			   <div class="col-md-6">
               <input type="hidden" name="code_postal_siege_social" value="<?php echo $_GET["code_postal_siege_social"]?>" />
			   </div>
			   
			   <div class="col-md-6">
               <input type="hidden" name="ville_siege_social" value="<?php echo $_GET["ville_siege_social"]?>">
			   </div>
			   </div>


			   <div class="row"> 
			   <div class="col-md-12">
               <input type="hidden" name="emplacement_siege_social" value="<?php echo $_GET["emplacement_siege_social"]?>" />		  
			   </div>
			   </div>
			   
                               <div class="row adress">
			   <div class="col-md-12">
                              <input type="hidden" name="nom_societe" id="nom_societe" value="<?php echo $_GET["nom_societe"]?>" />
			   </div>
			   </div>
               
			   <div class="row">
			   <div class="col-md-12">
               <input type="hidden" name="denomination_1" value="<?php echo $_GET["denomination_1"]?>"/>
			   </div>
			   </div>
			   
			   <div class="row">
			   <div class="col-md-12">
               <input type="hidden" name="denomination_2" value="<?php echo $_GET["denomination_2"]?>" />
			   </div>
			   </div>

			    
			   			   <div class="row">
			   <div class="col-md-6">
			   <input type="hidden" name="nom_associe" id="nom_associe" value="<?php echo $_GET["nom_associe"]?>" />
			   </div>
			   <div class="col-md-6">
			<input type="hidden" name="prenom_associe" value="<?php echo $_GET["prenom_associe"]?>" />
			   </div>
			   </div>
			   
			   
			   <div class="row adress">
			   <div class="col-md-12">
			  <input type="hidden" name="adresse_associe" value="<?php echo $_GET["adresse_associe"]?>" />
			   </div>
			   </div>
			   
			   
			   <div class="row">
			   <div class="col-md-6">
			  <input type="hidden" name="code_postal_associe" value="<?php echo $_GET["code_postal_associe"]?>" />
			   </div>
			   <div class="col-md-6">
                <input type="hidden" name="ville_associe" value="<?php echo $_GET["ville_associe"]?>" />
			   </div>
			   </div>
               
			   <div class="row">
			   <div class="col-md-6 birthday">
			   <input type="hidden" name="jour_naissance_associe" id="jour_naissance_associe" value="<?php echo $_GET["jour_naissance_associe"]?>" />

               		   <input type="hidden" name="mois_naissance_associe" id="mois_naissance_associe" value="<?php echo $_GET["mois_naissance_associe"]?>" />
               		   <input type="hidden" name="annee_naissance_associe" placeholder="Année" value="<?php echo $_GET["annee_naissance_associe"]?>" />
			   </div>
			   <div class="col-md-6">
               <input type="hidden" name="lieu_naissance_associe" value="<?php echo $_GET["lieu_naissance_associe"]?>" />
			   </div>
			   </div>
              
               <div class="row">
			   <div class="col-md-6">
               <input type="hidden" name="nationalite_associe" value="<?php echo $_GET["nationalite_associe"]?>" />
			   </div>
			  
			   </div>
			   
			   <div class="row">
			   <div class="col-md-6">
			   <input type="hidden" name="type_identifiant_associe" value="<?php echo $_GET["type_identifiant_associe"]?>" />
			   </div type="hidden">
			   <div class="col-md-6">
			   <input type="hidden" name="code_identifiant_associe" value="<?php echo $_GET["code_identifiant_associe"]?>" />
			   </div>
			   </div>
       


               <div class="row">
			   <div class="col-md-6">
               <input type="submit" class="prevBTN" name="prev" value="PRECEDENT"> 
			   </div>
			   
			   <div class="col-md-6">
               <input type="submit" class="nextBTN" name="next" id="next4" value="SUIVANT">
			   </div>
			   
			   </div>
			   
			   
               </form>
      
           </div>


           <div class="step5">
             
               <form method="GET" action="sarl-au.php">
               <h2>Quel est le montant du capital social ? <i class="fa fa-info-circle" id="msg6" style="font-size:15px;color:#2F5BBA;cursor:pointer;"></i></h2>

               <div class="alert alert-danger">
                <strong>Alert!</strong> Veuillez remplir tous les champs.
                </div> 

               <input type="text" name="number_step" class="number_step" value="fifth">
                
				<div class="row">
			   <div class="col-md-6">
               <label>Veuillez entrer le capital en Chiffres</label>
			   <input type="text" name="capital_en_chiffres">
			   </div>
	<div class="col-md-6">
               <label>Veuillez entrer le capital en Lettres</label>
			    <input type="text" name="capital_en_letteres">

			   </div>
			   
			   </div>
			   
			   <div class="row">
			   
			   
			   </div>
			   
			   <div class="row">
			   <div class="col-md-12">
               <label>Nombre d'actions :</label>
			   <input type="text" name="nombre_actions" id="nombre_actions">
			   </div>
			   </div>
			   			   			   		   			   <div class="row">
			   <div class="col-md-6">
			   <input type="hidden" name="civilite_associe" id="nom_associe" value="<?php echo $_GET["civilite_associe"]?>" />
			   </div>
			   </div>
			    <div class="row">
			   <div class="col-md-12">
               <input type="hidden" class="activite" name="activite_principal_societe" value="<?php echo $_GET["activite_principal_societe"]?>">
			   </div>
			   </div>
			   
			   <div class="row">
			   <div class="col-md-12">
               <input class="descriptionTXT" type="hidden" name="description_activite_principal_societe" value="<?php echo $_GET["description_activite_principal_societe"]?>" rows="8" style="width:100%;padding:10px;outline:none;"></textarea>
			   </div>
			   </div>
			   <div class="row">
			   <div class="col-md-12">
               <input type="hidden" name="adresse_siege_social" value="<?php echo $_GET["adresse_siege_social"]?>">
			   </div>
			   </div>
			   
			   
			   <div class="row">
			   <div class="col-md-6">
               <input type="hidden" name="code_postal_siege_social" value="<?php echo $_GET["code_postal_siege_social"]?>" />
			   </div>
			   
			   <div class="col-md-6">
               <input type="hidden" name="ville_siege_social" value="<?php echo $_GET["ville_siege_social"]?>">
			   </div>
			   </div>


			   <div class="row"> 
			   <div class="col-md-12">
               <input type="hidden" name="emplacement_siege_social" value="<?php echo $_GET["emplacement_siege_social"]?>" />		  
			   </div>
			   </div>
			   
                               <div class="row adress">
			   <div class="col-md-12">
                              <input type="hidden" name="nom_societe" id="nom_societe" value="<?php echo $_GET["nom_societe"]?>" />
			   </div>
			   </div>
               
			   <div class="row">
			   <div class="col-md-12">
               <input type="hidden" name="denomination_1" value="<?php echo $_GET["denomination_1"]?>"/>
			   </div>
			   </div>
			   
			   <div class="row">
			   <div class="col-md-12">
               <input type="hidden" name="denomination_2" value="<?php echo $_GET["denomination_2"]?>" />
			   </div>
			   </div>

			    
			   			   <div class="row">
			   <div class="col-md-6">
			   <input type="hidden" name="nom_associe" id="nom_associe" value="<?php echo $_GET["nom_associe"]?>" />
			   </div>
			   <div class="col-md-6">
			<input type="hidden" name="prenom_associe" value="<?php echo $_GET["prenom_associe"]?>" />
			   </div>
			   </div>
			   
			   
			   <div class="row adress">
			   <div class="col-md-12">
			  <input type="hidden" name="adresse_associe" value="<?php echo $_GET["adresse_associe"]?>" />
			   </div>
			   </div>
			   
			   
			   <div class="row">
			   <div class="col-md-6">
			  <input type="hidden" name="code_postal_associe" value="<?php echo $_GET["code_postal_associe"]?>" />
			   </div>
			   <div class="col-md-6">
                <input type="hidden" name="ville_associe" value="<?php echo $_GET["ville_associe"]?>" />
			   </div>
			   </div>
               
			   <div class="row">
			   <div class="col-md-6 birthday">
			   <input type="hidden" name="jour_naissance_associe" id="jour_naissance_associe" value="<?php echo $_GET["jour_naissance_associe"]?>" />

               		   <input type="hidden" name="mois_naissance_associe" id="mois_naissance_associe" value="<?php echo $_GET["mois_naissance_associe"]?>" />
               		   <input type="hidden" name="annee_naissance_associe" placeholder="Année" value="<?php echo $_GET["annee_naissance_associe"]?>" />
			   </div>
			   <div class="col-md-6">
               <input type="hidden" name="lieu_naissance_associe" value="<?php echo $_GET["lieu_naissance_associe"]?>" />
			   </div>
			   </div>
              
               <div class="row">
			   <div class="col-md-6">
               <input type="hidden" name="nationalite_associe" value="<?php echo $_GET["nationalite_associe"]?>" />
			   </div>
			    
			   </div>
			   
			   <div class="row">
			   <div class="col-md-6">
			   <input type="hidden" name="type_identifiant_associe" value="<?php echo $_GET["type_identifiant_associe"]?>" />
			   </div type="hidden">
			   <div class="col-md-6">
			   <input type="hidden" name="code_identifiant_associe" value="<?php echo $_GET["code_identifiant_associe"]?>" />
			   </div>
			   </div>
			   
			   
			   <div class="row">
			   <div class="col-md-6">
               <input type="submit" class="prevBTN" name="prev" value="PRECEDENT"> 
			   </div>
			   
			   <div class="col-md-6">
               <input type="submit" class="nextBTN" name="next" id="next5" value="SUIVANT">
			   </div>
			   
			   </div>
               </form>
      
           </div>

		   
		   
		   
		   <!-- Begin Step 6 -->

           <div class="step6">
             
      
               <form method="GET" action="sarl-au.php">
               <h2>Qui sera le gérants dans la société ? <i class="fa fa-info-circle" id="msg7" style="font-size:15px;color:#2F5BBA;cursor:pointer;"></i></h2>

               <div class="alert alert-danger">
                <strong>Alert!</strong> Veuillez remplir tous les champs.
                </div> 

               <input type="text" name="number_step" class="number_step" value="sixth"> 
               <label>Le gerant est l'associe unique.</label>
               <br>
               <label><input type="radio" class="gerantTrue" name="gerant_est_associe" id="gerantTrue" value='true' checked>Oui</label>
               <label><input type="radio" class="gerantFalse" name="gerant_est_associe" id="gerantFalse" value='false'>Non</label>
               <br>

               <div class="case_2" style="display:none;width:100%;margin-top:20px;">
               	<div class="row">
			   <div class="col-md-12">
			   <label>Civilité :</label>
			   <input type="radio" name="civilite_gerant" value="Mr"> <b>Mr</b>
               	<input type="radio" name="civilite_gerant" value="Mme"> <b>Mme</b>
               	 <input type="radio" name="civilite_gerant" value="Mlle"> <b>Mlle</b>
			   </div>
			   
			   </div>
			   
			   <div class="row">
			   <div class="col-md-6">
			   <label>Nom :</label><input type="text" name="nom_gerant">
			   </div>
			   <div class="col-md-6">
			   <label>Prenom :</label><input type="text" name="prenom_gerant">
			   </div>
			   </div>
			   
			   
			   <div class="row adress">
			   <div class="col-md-12">
			   <label>Adresse :</label><input type="text" name="adresse_gerant">
			   </div>
			   </div>
			   
			   
			   <div class="row">
			   <div class="col-md-6">
			   <label>Code Postal :</label><input type="text" name="code_postal_gerant">
			   </div>
			   <div class="col-md-6">
			   <label>Ville :</label><input type="text" name="ville_gerant">
			   </div>
			   </div>
               
			   <div class="row">
			   <div class="col-md-6 birthday">
			   <label>Date de naissance :</label>
			   <select name="jour_naissance_gerant" id="jour_naissance_gerant"><option>Jour</option>
               		   	 <option>01</option><option>02</option><option>03</option><option>04</option><option>05</option>
               		   	 <option>06</option><option>07</option><option>08</option><option>09</option><option>10</option>
               		   	 <option>11</option><option>12</option><option>13</option><option>14</option><option>15</option>
               		   	 <option>16</option><option>17</option><option>18</option><option>19</option><option>20</option>
               		   	 <option>21</option><option>22</option><option>23</option><option>24</option><option>25</option>
               		   	 <option>26</option><option>27</option><option>28</option><option>29</option><option>30</option>
               		   	 <option>31</option>
               		   </select>
               		   <select name="mois_naissance_gerant" id="mois_naissance_gerant"><option>Mois</option>
               		   	 <option>01</option><option>02</option><option>03</option><option>04</option><option>05</option>
               		   	 <option>06</option><option>07</option><option>08</option><option>09</option><option>10</option>
               		   	 <option>11</option><option>12</option>
               		   </select>
               		   <input type="text" name="annee_naissance_gerant" placeholder="Année">
			   </div>
			   <div class="col-md-6">
			   <label>Lieu de Naissance :</label><input type="text" name="lieu_naissance_gerant">
			   </div>
			   </div>
              
               <div class="row">
			   <div class="col-md-6">
			   <label>Nationalité :</label><input type="text" name="nationalite_gerant">
			   </div>
			   <div class="col-md-6">
			   <label>Situation Familiale :</label>
			   <select name="situation_familiale_gerant">
               		 <option>Marié sous le régime de la communauté</option>
                   <option>Marié sous le régime de la séparation</option>
                   <option>Divorcé</option><option>Veuf</option>
                   <option>Célibataire</option><option>Pacsé</option>
                  </select>
			   </div>
			   </div>
			   
			   <div class="row">
			   <div class="col-md-6">
			   <label>Types d'identite :</label>
			   <select name="type_identifiant_gerant">
               		 <option>Carte nationale</option>
                   <option>Passeport</option>
                   <option>Carte sejour</option><option>Veuf</option>
                  </select>
			   </div>
			   <div class="col-md-6">
			   <label>Numéro d'identification :</label>
			   <input type="text" name="code_identifiant_gerant">
			   </div>
			   </div>
               

               </div>
			   			   			   		   			   <div class="row">
			   <div class="col-md-6">
			   <input type="hidden" name="civilite_associe" id="nom_associe" value="<?php echo $_GET["civilite_associe"]?>" />
			   </div>
			   </div>
               <div class="row">
			   <div class="col-md-6">
			   <input type="hidden" name="capital_en_chiffres" value="<?php echo $_GET["capital_en_chiffres"]?>">
			   </div>
	<div class="col-md-6">
			    <input type="hidden" name="capital_en_letteres" value="<?php echo $_GET["capital_en_letteres"]?>">

			   </div>
			   
			   </div>
			   
			   <div class="row">
			   
			   
			   </div>
			   
			   <div class="row">
			   <div class="col-md-12">
			   <input type="hidden" name="nombre_actions" id="nombre_actions" value="<?php echo $_GET["nombre_actions"]?>">
			   </div>
			   </div>
			    <div class="row">
			   <div class="col-md-12">
               <input type="hidden" class="activite" name="activite_principal_societe" value="<?php echo $_GET["activite_principal_societe"]?>">
			   </div>
			   </div>
			   
			   <div class="row">
			   <div class="col-md-12">
               <input class="descriptionTXT" type="hidden" name="description_activite_principal_societe" value="<?php echo $_GET["description_activite_principal_societe"]?>" rows="8" style="width:100%;padding:10px;outline:none;"></textarea>
			   </div>
			   </div>
			   <div class="row">
			   <div class="col-md-12">
               <input type="hidden" name="adresse_siege_social" value="<?php echo $_GET["adresse_siege_social"]?>">
			   </div>
			   </div>
			   
			   
			   <div class="row">
			   <div class="col-md-6">
               <input type="hidden" name="code_postal_siege_social" value="<?php echo $_GET["code_postal_siege_social"]?>" />
			   </div>
			   
			   <div class="col-md-6">
               <input type="hidden" name="ville_siege_social" value="<?php echo $_GET["ville_siege_social"]?>">
			   </div>
			   </div>


			   <div class="row"> 
			   <div class="col-md-12">
               <input type="hidden" name="emplacement_siege_social" value="<?php echo $_GET["emplacement_siege_social"]?>" />		  
			   </div>
			   </div>
			   
                               <div class="row adress">
			   <div class="col-md-12">
                              <input type="hidden" name="nom_societe" id="nom_societe" value="<?php echo $_GET["nom_societe"]?>" />
			   </div>
			   </div>
               
			   <div class="row">
			   <div class="col-md-12">
               <input type="hidden" name="denomination_1" value="<?php echo $_GET["denomination_1"]?>"/>
			   </div>
			   </div>
			   
			   <div class="row">
			   <div class="col-md-12">
               <input type="hidden" name="denomination_2" value="<?php echo $_GET["denomination_2"]?>" />
			   </div>
			   </div>

			   
			   			   <div class="row">
			   <div class="col-md-6">
			   <input type="hidden" name="nom_associe" id="nom_associe" value="<?php echo $_GET["nom_associe"]?>" />
			   </div>
			   <div class="col-md-6">
			<input type="hidden" name="prenom_associe" value="<?php echo $_GET["prenom_associe"]?>" />
			   </div>
			   </div>
			   
			   
			   <div class="row adress">
			   <div class="col-md-12">
			  <input type="hidden" name="adresse_associe" value="<?php echo $_GET["adresse_associe"]?>" />
			   </div>
			   </div>
			   
			   
			   <div class="row">
			   <div class="col-md-6">
			  <input type="hidden" name="code_postal_associe" value="<?php echo $_GET["code_postal_associe"]?>" />
			   </div>
			   <div class="col-md-6">
                <input type="hidden" name="ville_associe" value="<?php echo $_GET["ville_associe"]?>" />
			   </div>
			   </div>
               
			   <div class="row">
			   <div class="col-md-6 birthday">
			   <input type="hidden" name="jour_naissance_associe" id="jour_naissance_associe" value="<?php echo $_GET["jour_naissance_associe"]?>" />

               		   <input type="hidden" name="mois_naissance_associe" id="mois_naissance_associe" value="<?php echo $_GET["mois_naissance_associe"]?>" />
               		   <input type="hidden" name="annee_naissance_associe" placeholder="Année" value="<?php echo $_GET["annee_naissance_associe"]?>" />
			   </div>
			   <div class="col-md-6">
               <input type="hidden" name="lieu_naissance_associe" value="<?php echo $_GET["lieu_naissance_associe"]?>" />
			   </div>
			   </div>
              
               <div class="row">
			   <div class="col-md-6">
               <input type="hidden" name="nationalite_associe" value="<?php echo $_GET["nationalite_associe"]?>" />
			   </div>
			   
			   </div>
			   
			   <div class="row">
			   <div class="col-md-6">
			   <input type="hidden" name="type_identifiant_associe" value="<?php echo $_GET["type_identifiant_associe"]?>" />
			   </div type="hidden">
			   <div class="col-md-6">
			   <input type="hidden" name="code_identifiant_associe" value="<?php echo $_GET["code_identifiant_associe"]?>" />
			   </div>
			   </div>
			   
			   
			   
			   
              <input type="submit" class="prevBTN" name="prev" value="PRECEDENT"> 
               <input type="submit" class="nextBTN" name="next" id="next6" value="SUIVANT">
               </form>
      
           </div>

		   
		   
		   

           <div class="step7" style="width:100%;padding:10px;margin-top:10px;">
             

               <form method="post" action="#">
               <input type="text" name="number_step" class="number_step" value="seventh"> 
               <h2>Félicitations vous avez complété le formulaire avec succès. </h2>
               <h4 style="font-size:18px;font-weight:200;color:#757575;margin-bottom:20px;">Vous êtes un pas de plus vers la création de votre entreprise, pour passer à l'étape suivante cliquez  sur le bouton « <span style="font-size:12px;">TERMINER</span> ».</h4>

			   
			  <div class="row">
			   <div class="col-md-6">
			   <input type="submit" class="prevBTN" name="prev" value="PRECEDENT">
			   </div>
			   

         <div class="col-md-6">
         
         <style type="text/css">
           
           .btn{font-family: 'Poppins', sans-serif;
           background:#2F5BBA;
   color:#fff;
  font-size: 16px;
  letter-spacing: 3px;
  border: 1px solid #2F5BBA;
  padding: 10px 29px 10px 29px;
  height: 45px;
  border-radius: 3px;
  outline: none;
  border: 1px solid #2F5BBA;
  margin-top: 10px;
  }
         </style>

         <button type="button" class="btn btn-info" id="end">TERMINIER</button>
         </div>
			   </div>
			   
               </form>

               
      
           </div>


 
      
    
      
    </div>
  </div>


  <div class="col-md-3 progress_side">
              <div class="state_1">
                <div class="state_indicator"><div class="label" style="margin-left:20px;">associé de la société</div></div>
                <div class="state_line"></div>
              </div>

              <div class="state_2">
                <div class="state_indicator"><div class="label" style="margin-left:20px;">nom de la société</div></div>
                <div class="state_line"></div>
              </div>


              <div class="state_3">
                <div class="state_indicator"><div class="label" style="margin-left:20px;">siège de la société</div></div>
                <div class="state_line"></div>
              </div>

              <div class="state_4">
                <div class="state_indicator"><div class="label" style="margin-left:20px;">ACTIVITÉ DE LA SOCIÉTÉ</div></div>
                <div class="state_line"></div>
              </div>

              <div class="state_5">
                <div class="state_indicator"><div class="label" style="margin-left:20px;">CAPITAL SOCIAL</div></div>
                <div class="state_line"></div>
              </div>

              <div class="state_6">
                <div class="state_indicator"><div class="label" style="margin-left:20px;">gérance</div></div>
                <div class="state_line"></div>
              </div>

              <div class="state_7">
                <div class="state_indicator"><div class="label" style="margin-left:20px;">finaliser</div></div>
                <div class="state_line"></div>
              </div>

          

            </div>


<!--   <div class="dv" style="width:fit-content;padding-top:30px;padding-bottom:30px;margin:auto;">
        
        <div style="display:inline-block;width:230px;padding:10px;position:relative;background:;">
          <img src="./img/1.png">
          <div style="width:fit-content;position:relative;left:60px;top:-45px;">plus de 300 avis clients</div>
        </div>

        <div style="display:inline-block;width:230px;padding:10px;position:relative;background:;">
          <img src="./img/1.png">
          <div style="width:fit-content;position:relative;left:60px;top:-45px;">plus de 300 avis clients</div>
        </div>
  

  </div> -->

</div>
</div>
 

</body>
</html>
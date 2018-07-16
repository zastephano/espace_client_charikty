<?php


        $civilite_associe= $_POST['civilite_associe'];
        $email_associe= $_POST['email_associe'];
        $nom_associe= $_POST['nom_associe'];
        $prenom_associe= $_POST['prenom_associe'];
        $adresse_associe= $_POST['adresse_associe'];
        $code_postal_associe= $_POST['code_postal_associe'];
        $ville_associe= $_POST['ville_associe'];
        $jour_naissance_associe= $_POST['jour_naissance_associe'];
        $mois_naissance_associe= $_POST['mois_naissance_associe'];
        $annee_naissance_associe= $_POST['annee_naissance_associe'];
        $lieu_naissance_associe= $_POST['lieu_naissance_associe'];
        $nationalite_associe= $_POST['nationalite_associe'];
        $type_identifiant_associe= $_POST['type_identifiant_associe'];
        $code_identifiant_associe= $_POST['code_identifiant_associe'];






        $nom_societe= $_POST['nom_societe'];
        $denomination_1= $_POST['denomination_1'];
        $denomination_2= $_POST['denomination_2'];




        $adresse_siege_social= $_POST['adresse_siege_social'];
        $code_postal_siege_social= $_POST['code_postal_siege_social'];
        $ville_siege_social= $_POST['ville_siege_social'];
        $emplacement_siege_social= $_POST['emplacement_siege_social'];


        
        $activite_principal_societe= $_POST['activite_principal_societe'];
        $description_activite_principal_societe= $_POST['description_activite_principal_societe'];


        
        $capital_en_chiffres= $_POST['capital_en_chiffres'];
        $capital_en_letteres= $_POST['capital_en_letteres'];
        $nombre_actions= $_POST['nombre_actions'];


        
         

      







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
$sql = "SELECT * FROM users where nom = '$nom_associe'";
$req = mysqli_query($conn,$sql);
$rows = mysqli_num_rows($req);
if( $rows > 0)
{	
$row = mysqli_fetch_assoc($req);
$id = $row["id"];
}
 $sql = "INSERT INTO `clients` (`id_cl`,`Adress`, `code_postal`, `ville`, `nationalite`, `date_naissance`, `num_identite`, `type_identite`, 
  `id__us`, `gender`, `lieu_naissance`) 
  VALUES ('".$id."','".$adresse_associe."','".$code_postal_associe."','".$ville_associe."','".$nationalite_associe."',
  '".$jour_naissance_associe."/".$mois_naissance_associe."/".$annee_naissance_associe."',
  '".$code_identifiant_associe."','".$type_identifiant_associe."',13,
  '".$civilite_associe."','".$lieu_naissance_associe."' )";



  $sql2 = "INSERT INTO `societes`(`nom_soc_1`, `nom_soc_2`, `nom_soc_3`, `adresse_soc`, `ville_soc`, `code_postal_soc`, `capitale_lettre_soc`, `capitale_chiffre_soc`, `nombre_action`, `activite`, `formJuridique`, `siege`, `objet`, `etat`, `id__cl`) VALUES ('".$nom_societe."','".$denomination_1."','".$denomination_2."','".$adresse_siege_social."','".$ville_siege_social."',".$code_postal_siege_social.",'".$capital_en_letteres."',".$capital_en_chiffres.",".$nombre_actions.",'".$activite_principal_societe."','SARL AU','".$emplacement_siege_social."','".$description_activite_principal_societe."','','".$id."')";





 if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header('Location: index.php');
 } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
 }


 if ($conn->query($sql2) === TRUE) {
    echo "Test";
    header('Location: index.php');
 } else {
    echo "sqdqsdsqdsqd: " . $sql2 . "<br>" . $conn->error;
 }
 $conn->close();
            
       





echo "///////////////////// associe /////////////////////";

echo $civilite_associe;
echo "<br>";
echo $nom_associe;
echo "<br>";
echo $prenom_associe;
echo "<br>";
echo $adresse_associe;
echo "<br>";
echo $code_postal_associe;
echo "<br>";
echo $ville_associe;
echo "<br>";
echo $jour_naissance_associe;
echo "<br>";
echo $mois_naissance_associe;
echo "<br>";
echo $annee_naissance_associe;
echo "<br>";
echo $lieu_naissance_associe;
echo "<br>";
echo $nationalite_associe;
echo "<br>";
echo $type_identifiant_associe;
echo "<br>";
echo $code_identifiant_associe;

echo "///////////////////// societe /////////////////////";

echo $nom_societe;
echo "<br>";
echo $denomination_1;
echo "<br>";
echo $denomination_1;



echo "///////////////////// siege /////////////////////";

echo $adresse_siege_social;
echo "<br>";
echo $code_postal_siege_social;
echo "<br>";
echo $ville_siege_social;
echo "<br>";
echo $emplacement_siege_social;




echo "///////////////////// activite /////////////////////";

echo $activite_principal_societe;
echo "<br>";
echo $description_activite_principal_societe;



echo "///////////////////// capital /////////////////////";

echo $capital_en_chiffres;
echo "<br>";
echo $capital_en_letteres;
echo "<br>";
echo $nombre_actions;




?>
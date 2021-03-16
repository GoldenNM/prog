
  	<!DOCTYPE html>
  	<html>
  	<head>
    	<meta charset="utf-8"/>
    	<title>
      		Récapitulatif commande
    	</title>
  	</head>
  <body>
    <?php
 

    
    try
        {

        $bdd = new PDO('mysql:host=localhost;dbname=locationch', 'root', '');
        // connection a la base de donnees via Mysql

        }
     catch (Exception $e)
     // on capture l'erreur (l'exception)
         {
                 
                 die('Erreur :' .$e->getMessage());
                 // en cas d'erreur, on affiche un message avec arret de l'execution de la page
         }
$a=$_POST['civ'];
$b=$_POST['nom'];
$c=$_POST['prenom'];
$d=$_POST['telephone'];
$e=$_POST['mail'];
$f=$_POST['adresse'];
$g=$_POST['ville'];
$h=$_POST['date'];
$i=$_POST['discipline'];


   $reponse = $bdd->prepare("INSERT INTO clients VALUES('NULL','$a', '$b', '$c', '$d', '$e', '$g','$h','$i')")or die(print_r($bdd->errorInfo()));
   $reponse->execute();
   $reponse->closeCursor();
   
   include("formulaireloc.php");

 
?>
    <h1 align="center">
      Merci pour votre commande, voici un récapitulatif de votre commande :
    </h1>

    <ul type="square">
      <font size="5">
        <li> Votre civilité est : <?php echo $_POST["cciv"]; ?> </li>
        <li>Votre nom est : <?php echo $_POST["cnom"]; ?> </li>
        <li>Votre prénom est : <?php echo $_POST["cprenom"]; ?></li>
        <li> Votre numéro de téléphone est : <?php echo $_POST["ctelephone"]; ?> </li>
        <li>Votre E-mail est : <?php echo $_POST["cmail"]; ?> </li>
        <li>Votre adresse est : <?php echo $_POST["cadresse"]; ?></li>
        <li>Votre code postal est : <?php echo $_POST["ccp"]; ?></li>
        <li>Votre ville est : <?php echo $_POST["cville"]; ?></li>
        <li>Fin de location le : <?php echo $_POST["cdate"]; ?></li>
        
          </li>
            <li> Votre discipline est : <?php echo $_POST["cdiscipline"]; ?> </li>
        </font>
      </ul>
      
  	</body>
	</html>

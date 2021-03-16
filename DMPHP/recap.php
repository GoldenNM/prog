<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>
            Récapitulatif commande
        </title>
    <style type="text/css">
        html{
            background : #111111;
        }
        h1{
            color: #FFFFFF;
            font-size: 80px;
            text-align: center;
        }
        h2{
            color: #FFFFFF;
            text-align: center;
            font-size: 25px;
        }
        div{
            color: #FFFFFF;
            font-size: 19px;
        }
        .img{
            padding: 50px;
        }

        header img{
            width: 100%;
            max-height: 500px;
        }
        body{
            font-family:"Times New Roman",sans-serif;
            margin: auto;
            width: 1500px;
        }
        nav{
            margin-left: 720px;
            margin-top: 20px;
        }
    </style>

    </head>
    <body>
<?php
 

    
    try
        {

        $bdd = new PDO('mysql:host=localhost;dbname=venteenligne', 'root', '');
        // connection a la base de donnees via Mysql

        }
     catch (Exception $e)
     // on capture l'erreur (l'exception)
         {
                 
                 die('Erreur :' .$e->getMessage());
                 // en cas d'erreur, on affiche un message avec arret de l'execution de la page
         }
$a=$_POST['cciv'];
$b=$_POST['cnom'];
$c=$_POST['cprenom'];
$d=$_POST['ctelephone'];
$e=$_POST['cmail'];
$f=$_POST['cadresse'];
$g=$_POST['cville'];


   $reponse = $bdd->prepare("INSERT INTO clients VALUES('NULL','$a', '$b', '$c', '$d', '$e', '$f','$g')")or die(print_r($bdd->errorInfo()));
   $reponse->execute();
   $reponse->closeCursor();
   
   include("pagecommande.php");

 
?>
        <header>
            <img src="image/image1,1.jpg" alt=""/>
        </header>
        <nav>
            <input type=button onclick=window.location.href="http://localhost/DMPHP/page1.php"; value=Menu />
        </nav>
        <h1 align="center">
            Merci pour votre commande, voici un récapitulatif de votre commande :
        </h1>


        <div class="b1">
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
                </font>
            </ul>
        </div>
    </body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>
            Homme
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
            margin-bottom: 20px;
        }
        .b1{
        	text-align: center;
        }
        .b2{
        	margin-top: 100px;
        }
        .b3{
        	margin-top: 30px;
        	margin-left: 200px;
        }
        .b4{
        	margin-top: 30px;
        	margin-left: 400px;
        }
        .b5{
        	margin-top: 30px;
        	margin-left: 600px;
        }
        .b6{
        	margin-top: 30px;
        	margin-left: 600px;
        }
        .b7{
        	margin-top: 30px;
        	margin-left: 400px;
        }
        .b8{
        	margin-top: 30px;
        	margin-left: 200px;
        }
        .b9{
        	margin-top: 30px;
        }
        .b10{
        	margin-top: 30px;
        	text-align: center;
        }
      </style>
            
    </head>


    <body>
        <header>
            <img src="image/image1,1.jpg" alt=""/>
            <h1>Death Shop</h1>
        </header>
        <nav>
            <input type=button onclick=window.location.href="http://localhost/DMPHP/page1.php"; value=Menu />
        </nav>
		<main>
			<form method="post" action="recap.php">
				<div id="bloc">
					<div class="b1"><p>Merci de répondre à ce formulaire pour finaliser votre commande :</p></div>
					<div class="b2">
							- Veuillez indiquez votre civilité
							<input type="radio" name="cciv" id="Madame" checked value="Madame"/><label for"Madame"> Mme </label>
							<input type="radio" name="cciv" id="Mademoiselle" value="Mademoiselle"/><label for "Mademoiselle"> Mlle </label>
							<input type="radio" name="cciv" id="Monsieur" value="Monsieur"/><label for"Monsieur"> Mr </label>
					</div>
					<div class="b3">
						<label for "nom">- Tapez votre nom :</label>
						<input type="texte" name="cnom" id="nom" placeholder="Dupont" size="30"/>
					</div>
					<div class="b4">
						<label for "prenom">- Tapez votre prénom :</label>
						<input type="texte" name="cprenom" id="prenom" placeholder="Jean" size="30"/>
					</div>
					<div class="b5">
						<label for "ctelephone">- Indiquez votre numéro de téléphone :</label>
						<input type="tel" name="ctelephone" id="telephone"/>
					</div>
					<div class="b6">
						<label for "mail">- Tapez votre E-mail :</label>
						<input type="email" name="cmail" id="mail" required/>
					</div>
					<div class="b7">
						<label for "adresse">- Tapez votre adresse :</label>
						<input type="texte" name="cadresse" id="adresse" required />
					</div>
					<div class="b8">
						<label for "code postal">- Tapez votre code postal :</label>
						<input type="number" name="ccp" id="code postal" required />						
					</div>
					<div class="b9">
						<label for "ville">- Votre ville :</label>
						<input type="texte" name="cville" id="ville" required/>
					</div>
					<div class="b10">
						<input type="submit" value="Envoyez le formulaire" onClick="alert('Merci pour votre location!')"/>
					</div>
				</div>
			</form>
		</main>
	</body>
</html>


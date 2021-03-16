<!DOCTYPE html>
    <!-- Pour signifier que l'on ecrit en html5-->

<html>
    <head>
        <meta charset="utf-8"/>
        <title>
            Menu
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
        header img{
            width: 100%;
            max-height: 500px;
        }
        body{
            font-family:"Times New Roman",sans-serif;
            margin: auto;
            width: 1500px;
        }
        #boutton{
            margin-left: 680px;
        }
        div{
            color: #FFFFFF;
            font-size: 19px;
        }
        .b1{
            display: inline-block;
            width: 480px;
        }
        .b1 img{
            display: block;
            margin-top: 20px;
        }
        .b2{
            margin-left: 500px;
            margin-top: -300px;
        }
        .b3{
            margin-left: 500px;
            margin-top: -100px;
        }
        .b4{
            margin-left: 900px;
            margin-top: -40px;
        }
        .b5{
            margin-left: 870px;
            font-size: 15px;
        }
        .b6{
            margin-left: 740px;
            font-size: 15px;
        }
        .b7{
            margin-left: 500px;
            margin-top: 100px;
            color: #43A400;
        }
        .b8{
            background-color: #43A400;
            border: none;
            color: white;
            padding: 20px 80px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 20px;
            margin-left: 500px;
            cursor: pointer;
        }
    </style>

    </head>

    <body>
        <header>
            <img src="image/image1,1.jpg" alt=""/>
            <h1>Death Shop</h1>
        </header>
        <nav id="boutton">
            <input type=button onclick=window.location.href="http://localhost/DMPHP/page2fe.php"; value=Femme />
            <input type=button onclick=window.location.href="http://localhost/DMPHP/page3ho.php"; value=Homme />
        </nav>
        <main>
            <div id="bloc1">
                <div class="b1"><u>Veste en cuire clouté</u><img width="400" height="400" src="image/veste.jpg"/></div>
                <div class="b2">    
                    <select id="vetement" name="taille">
                        <optgroup label="taille">
                            <option value="G" selected>XS</option>
                            <option vaue="P">S</option>
                            <option value="V">M</option>
                            <option value="B">L</option>
                            <option value="Bat">XL</option>
                        </optgroup>

                    </select></div>
                <div class="b3"><p>Ce produit est disponible.</p></div>
                <div class="b4"><p>249,99 €</p></div>
                <div class="b5"><u>Prix TVA incluse</u></div>
                <div class="b6"><u>Frais d'envoi et d'emballage non inclus</u></div>
                <div class="b7"><p>Livraison sous 48h</p></div>
                <div class="b8"><a href="http://localhost/DMPHP/pagecommande.php" class="button">Passer commande</a></div>
            </div>
        </main>
    </body>
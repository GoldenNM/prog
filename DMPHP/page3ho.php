<!DOCTYPE html>
    <!-- Pour signifier que l'on ecrit en html5-->

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
            margin-left: 680px;
            margin-bottom: 20px;
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
            font-family: "fantasy",sans-serif;
            color: #FFFFFF;
            margin-left: 500px;
            margin-top: -250px;
        }
        .b3{
            color: #3AFF00;
            margin-top: 170px;
            margin-left: 1340px;
        }
        .b4{
            display: inline-block;
            width: 480px;
        }
        .b4 img{
            display: block;
            margin-top: 20px;
        }
        .b5{
            font-family: "fantasy",sans-serif;
            color: #FFFFFF;
            margin-left: 500px;
            margin-top: -250px;
        }
        .b6{
            color: #FF0000;
            margin-top: 170px;
            margin-left: 1310px;
        }
        .b7{
            display: inline-block;
            width: 480px;
        }
        .b7 img{
            display: block;
            margin-top: 20px;
        }
        .b8{
            font-family: "fantasy",sans-serif;
            color: #FFFFFF;
            margin-left: 500px;
            margin-top: -250px;
        }
        .b9{
            color: #FF7C00;
            margin-top: 170px;
            margin-left: 1280px;
        }

        
    </style>
            
    </head>


    <body>
        <header>
            <img src="image/image1,1.jpg" alt=""/>
            <h1>Death Shop</h1>
        </header>
        <nav>
            <input type=button onclick=window.location.href="http://localhost/DMPHP/page2fe.php"; value=Femme />
            <input type=button onclick=window.location.href="http://localhost/DMPHP/page1.php"; value=Menu />
        </nav>
        <main>
            <fieldset>
            <div id="bloc1">
                <div class="b1"><u>Veste en cuire clouté</u><a href="http://localhost/DMPHP/veste1ho.php"><img width="400" height="400" src="image/veste.jpg"/></a></div>
                <div class="b2"><p>🛒 Perfecto en cuire clouté.  A petit prix sur notre shop !</p></div>
                <div class="b3"><p>Disponible</p></div>
            </div>
            </fieldset>

            <fieldset>
            <div id="bloc2">
                <div class="b4"><u>Veste en cuire</u><a href="http://localhost/DMPHP/veste2ho.php"><img width="400" height="400" src="image/vesteclassique.jpg"/></a></div>
                <div class="b5"><p>🛒 Veste en cuire homme mode.  A petit prix sur notre shop !</p></div>
                <div class="b6"><p>Non disponible</p></div>
            </div>
            </fieldset>
            <fieldset>
            <div id="bloc2">
                <div class="b7"><u>Treillis militaire</u><a href="http://localhost/DMPHP/pantalon1ho.php"><img width="400" height="400" src="image/treillis.jpg"/></a></div>
                <div class="b8"><p>🛒 Pantalon treillis camouflage homme.  A petit prix sur notre shop !</p></div>
                <div class="b9"><p>Plus que 10 articles</p></div>
            </div>
            </fieldset>
            <fieldset>
            <div id="bloc1">
                <div class="b1"><u>Pantalon métalleux</u><a href="http://localhost/DMPHP/pantalon2ho.php"><img width="400" height="400" src="image/pantalon.jpg"/></a></div>
                <div class="b2"><p>🛒 Pantalon noir, avec chaine.  A petit prix sur notre shop !</p></div>
                <div class="b3"><p>Disponible</p></div>
            </div>
            </fieldset>
            <fieldset>
            <div id="bloc1">
                <div class="b1"><u>Bottes</u><a href="http://localhost/DMPHP/chaussures1ho.php"><img width="400" height="400" src="image/chaussures.jpg"/></a></div>
                <div class="b2"><p>🛒 Chaussure en cuir clouté avec chaines.  A petit prix sur notre shop !</p></div>
                <div class="b3"><p>Disponible</p></div>
            </div>
            </fieldset>
            <fieldset>
            <div id="bloc1">
                <div class="b1"><u>Bottes 2.0</u><a href="http://localhost/DMPHP/chaussures2ho.php"><img width="400" height="400" src="image/chaussures2.jpg"/></a></div>
                <div class="b2"><p>🛒 Chaussure en cuir avec chaines.  A petit prix sur notre shop !</p></div>
                <div class="b3"><p>Disponible</p></div>
            </div>
            </fieldset>
        </main>
    </body>
</html>




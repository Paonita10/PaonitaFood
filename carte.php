<?php                
    session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset = "utf-8"/>
		<title>CHEZ PE</title>
		<link rel = "stylesheet" href = "styleCarte.css"/>
	</head>
	
	<body>
        <header>
            <img id = "logo" src = "Images/logo.png"/>               
        </header>

        <nav id = "barreHaut">
                <a class = "menu" id = "menuHaut" href = "menu.php"><img id = "logoMenu" src = "Images/menu.png"/></a>
                    <?php    
                        if(!empty($_SESSION['identifiant'])) {
                            echo "<nav id = 'navBoutonCommander'>
                                    <a id = 'boutonCommander' href = 'commande.php' title = 'Commandez'><h2 id = 'lettreCommander'>Commander</h2></a>
                                </nav>";
                        } else {
                            echo "<nav id = 'navBoutonCommander'>
                                    <a id = 'boutonCommander' href = 'pageConnexion.php' title = 'Connectez-vous pour commander'><h2 id = 'lettreCommander'>Commander</h2></a>
                                </nav>";  
                        }
                        if(!empty($_SESSION['identifiant'])) {
                            echo "<a class = 'menu' id = 'connexionHaut' href = 'profil.php'><h2 id = userCon>Bienvenu ".$_SESSION['identifiant']." !</h2></a>";
                        } else {
                            echo "<a class = 'menu' id = 'connexionHaut' href = 'pageConnexion.php'><img id = 'logoConnexion' src = 'Images/user.png'/></a>";

                        }
                    ?>
            </nav>

        <div id = "principal">
            <nav id = "menuNav">
                <a class = "menuGauche" id = "presentation" href = "presentation.php"><h2>PRESENTATION</h2></a>
                <a class = "menuGauche" id = "carte" href = "carte.php"><h2>CARTE</h2></a>
                <?php    
                    if(!empty($_SESSION['identifiant'])) {
                        echo "<a class = 'menuGauche' id = 'connexionMenu' href = 'profil.php'><h2>MON COMPTE</h2></a>";
                    } else {
                        echo "<a class = 'menuGauche' id = 'connexionMenu' href = 'pageConnexion.php'><h2>SE CONNECTER</h2></a>";
                    }
                ?>
            </nav>

            <section id = "sectionRose">
                <table>
                    <caption>Voici nos 4 menus</caption>
                        <tr>
                            <td id="fondImg">
                                <a class="menuImg" href="menu1.php"><img id="img2" src="Images/menu1.png" /></a>
                                <a class="menuImg" id="lettreMenu" href="menu1.php">Le Coq Gourmet</a>
                            </td>
                            <td id="fondImg">
                                <a class="menuImg" href="menu2.php"><img id="img2" src="Images/menu2.png" /></a>
                                <a class="menuImg" id="lettreMenu" href="menu2.php">Curry Passion</a>
                            </td>
                        </tr>
                        <tr>
                            <td id="fondImg">
                                <a class="menuImg" href="menu3.php"><img id="img3" src="Images/menu3.png" /></a>
                                <a class="menuImg" id="lettreMenu" href="menu3.php">Le Bœuf du Chef</a>
                            </td>
                            <td id="fondImg">
                                <a class="menuImg" href="menu4.php"><img id="img4" src="Images/menu4.png" /></a>
                                <a class="menuImg" id="lettreMenu" href="menu4.php">Végé Délice</a>
                            </td>
                        </tr>
                </table>
            </section>

        </div>

        <div id = "barreBas">
            <div id = "maps">
                <h2 id = "aller" >S'Y RENDRE</h2>
                <a href = "https://www.bing.com/maps?q=lycee+paul+eluard&qs=n&form=QBRE&sp=-1&ghc=1&lq=0&pq=lycee+paul+eluar&sc=10-16&sk=&cvid=936866CF7EB143D18CB72B13A6394633&ghsh=0&ghacc=0&ghpl="><img id = "logoMaps" src = "Images/maps.png"/></a>
            </div>
            <div id = "reseaux">
                <h2 id = "suivre">SUIVEZ-NOUS SUR</h2>
                <a href = "https://www.facebook.com/lpauleluardstdenis/"><img id = "logoFacebook" src = "Images/facebook.png"/></a>
            </div>
        </div>


        <footer>
            <a id = "lettreFoot" href = "">Mentions légales</a>
            <a id = "lettreFoot" href = "">Conditions générales d'utilisation</a>
        </footer>
    </body>	
</html>
<!DOCTYPE html>
<html>
	<head>
		<meta charset = "utf-8"/>
		<title>CHEZ PE</title>
		<link rel = "stylesheet" href = "stylePageCreerCompte.css"/>
	</head>
	
	<body>
        <header>
            <img id = "logo" src = "Images/logo.png"/>               
        </header>

        <nav id = "barreHaut">
            <a class = "menu" id = "menuHaut" href = "menu.php"><img id = "logoMenu" src = "Images/menu.png"/></a>
            <nav id = "navBoutonCommander">
                <a id = "boutonCommander" href = ".php"><h2 id = "lettreCommander">Commander</h2></a>
            </nav>
            <a class = "menu" id = "connexionHaut" href = "pageConnexion.php"><img id = "logoConnexion" src = "Images/user.png"/></a>
        </nav>

        <div id = "principal">
            <nav id = "menuNav">
                <a class = "menuGauche" id = "presentation" href = "presentation.php"><h2>PRESENTATION</h2></a>
                <a class = "menuGauche" id = "carte" href = "carte.php"><h2>CARTE</h2></a>
                <a class = "menuGauche" id = "connexionMenu" href = "pageConnexion.php"><h2>SE CONNECTER</h2></a>
            </nav>

            <section id = "sectionRose">
                <form id = "formulaire" action = "./validationCreerCompte.php" method = "post">
                    <h2 id = "formulaireTexte">Créez votre compte :<br></h2>
                        <input id = "nom" type="text" name="nom" placeholder = "Nom"><br>
                        <input id = "prenom" type="text" name="prenom" placeholder = "Prénom"><br>
                        <input id = "identifiant" type="text" name="identifiant" placeholder="Identifiant"><br>
                        <input id = "mail" type="text" name="mail" placeholder = "Adresse mail"><br>
                        <input id = "telephone" type="text" name="telephone" placeholder = "N° de téléphone"><br>
                        <input id = "mdp" type="password" name="mdp" placeholder = "Mot de passe"><br>
                        <input id = "go"type="submit" value="Valider">
                </form>
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
            <a href = "">Mentions légales</a>
            <a href = "">Conditions générales d'utilisation</a>
        </footer>
    </body>	
</html>

<!--

<div >
                            <h2>S'Y RENDRE</h2><input id = "nom" type="text" name="nom" ><br>
                        </div>
                        <div>
                            <h2>S'Y RENDRE</h2><input id = "prenom" type="text" name="prenom" ><br>
                        </div>
                        <div>
                            <h2>S'Y RENDRE</h2><input id = "mail" type="text" name="mail" ><br>
                        </div>
                        <div>
                            <h2>S'Y RENDRE</h2><input id = "telephone" type="text" name="telephone" ><br>
                        </div>
                        <div>
                            <h2>S'Y RENDRE</h2><input id = "mdp" type="password" name="mdp" ><br>
                        </div>

-->
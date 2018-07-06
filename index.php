<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700,900|Roboto:300,400,700,900" rel="stylesheet"> 
    <link rel="stylesheet" href="style/stylesheets/style.css">
    <title>Document</title>
    <style>

</style>
</head>
<body>
    <header>
        <div class="header">
            <h1>Le format SVG</h1>
            <p>Création et animation d'une image SVG.</p>
        </div>
        <!-- NAV TOP -->
        <div id="navbar">
            <a class="active" href="javascript:void(0)">Home</a>
            <a href="javascript:void(0)">News</a>
            <a href="javascript:void(0)">Contact</a>
        </div>
    </header>
    <!-- CONTAINER PAGE -->
    <section class="cont-page">
        <div class="cont-article">
            <h2>Comment ca marche?</h2>
            <hr>
            <h2>Inkscape, (d'apres moi) le meilleur logiciel libre de dessin vectoriel.</h2>
            <h3>Installation:</h3>
            <ul>
                <li>via <span class="bold">linux</span> il suffit de cliquer<a href="apt://inkscape"> ici</a> et de suivre les instructions.</li>
                <li>Pour <span class="bold">Windows</span> cliquez<a href="https://inkscape.org/fr/release/0.92.3/windows/64-bit/exe/dl/" target="_blank"> ici</a> pour télécharger l'executable.</li>
                <li>Pour Ludo (pour ceux qui ne connaitraient pas Ludo, je parle des utilisateurs d'<span class="bold">Apple</span>) c est <a href="" target="_blank">ici</a> que ca se passe ;-)</li>
            </ul>
            <hr>
            <h2>C'est maintenant qu'on va commencer à dessiner.</h2>
            <h3>Interface:</h3>
            <div class="cont-flex">
                <div class="flex-un">
                    <p>Voici les outils dont vous aurrez besoin pour éffectuer ce tuto:</p>
                    <img class="img-article" src="img/interface-inkscape.png" alt="Interface Inkscape">
                </div>
                <div class="flex-deux">
                    <ul class="interface">
                        <li>1. Selectionner et transformer des objets.</li>
                        <li>2. Créer des rectangles et des carrés.</li>
                        <li>3. Créer des cercles.</li>
                        <li>4. Créer des polygones.</li>
                        <li>5. Editer les couleurs et les contours des objets.</li>
                    </ul>
                </div>
            </div>
            <hr class="hr-light">
            <h3>Passons aux choses sérieuses:</h3>
            <div class="cont-flex">
                <div class="flex-un">
                    <ul class="interface">
                        <li>Dessine un cercle, ajoute lui une couleur de fond et une bordure.</li><br/>
                        <li>Dessine un carré avec les memes propriétés mais avec des valeurs différentes.</li><br/>
                        <li>Maintenant un rectangle.</li><br/>
                        <li>Et un triangle.</li><br/>
                        <li>Enfin enregistre le fichier au format .svg.</li><br/>
                    </ul>
                    <p>TIPS:_____________</p>
                </div>
                <div class="flex-deux">
                    <img class="img-article" src="img/inkscape-formes.png" alt="print scrn inkscape">
                    <p>Voila plus ou moins le genre de résultat que tu devrais obtenir:</p>
                    <h3>Le coeur du sujet:</h3>
                    <p>Voyons ce qu'il se passe si vous ouvrez ce fichier dans votre éditeur de code préféré. (Visual, atome, ...) </p>
                    <img src="img/dessintest.svg" alt="">
                </div>
            </div>
        </div>
    </section>
        <script>
            window.onscroll = function() {myFunction()};

            var navbar = document.getElementById("navbar");
            var sticky = navbar.offsetTop;

            function myFunction() {
                if (window.pageYOffset >= sticky) {
                    navbar.classList.add("sticky")
                } else {
                navbar.classList.remove("sticky");
                }
            }
        </script>
</body>
</html>
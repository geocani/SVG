<img src="logosvg.png" style="width: 700px;"/>

# Le format SVG


## Le format SGV c'est quoi?

Le **S**calable  **V**ector  **G**raphics « graphique vectoriel adaptable », est un format de **dessin vectoriel** capable d’etre traduit en **XML** (langage balisé). Il est approuvé par par le World Wide Web Consortium.

[<img src="https://upload.wikimedia.org/wikipedia/commons/c/c6/Bezier_forth_anim.gif" style="width: 700px;"/>]

## Pourquoi utiliser SVG? ##

* La **taille** du fichier est considérablement **réduite**. (bonne compression) (PNG = 35,5 ko (35.499 octets) -- SVG = 576 octets)
* Infiniment grand et infiniment petite. (**dessin vectoriel**)
* Le format est directement reconu en langage balisé via n'importe quel traitement de texte.
* Compatible avec tout les navigateurs. (sauf avec IE 8 et antérieurs, et Android 2.3 et antérieurs)

## Comment ca marche?

Télécharger un fichier SVG sur le net, [vive google](www.google.fr), ou encore mieux en créer une avec un logociel de dessin vectoriel comme [Illustrator](www.adobe.com) (coute une fortune) ou [Inskape](www.inskape.com) qui est plutot sympa et surtout open source.

[<img src="p1.png" style="width: 700px;"/>](p1.png)

## L'interface Inskape:

Voici les outils dont vous aurrez besoin pour éffectuer ce tuto:

[<img src="interface-inkscape.png" style="width: 700px;"/>](interface-inkscape.png)

1. Selectionner et transformer des objets.
2. Créer des rectangles et des carrés.
3. Créer des cercles.
4. Créer des polygones.
5. Editer les couleurs et les contours des objets.

#### DEUX : Amusez-vous:

* Dessine un cercle, ajoute lui une couleur de fond et une bordure.
* Dessine un carré.
* Un rectangle.
* t un triangle.


[<img src="p2.png" style="width: 700px;"/>](p2.png)

(Il est aussi possible aussi d'inclure le fichier avec PHP):

```<?php echo include("fichier.svg"); ?>``` 

**Si on regarde le code de plus pret on remarque qu'il est composée d'une grande partie de métadonnée et quelque balise qui n'existe pas en HTML mais j'y reviendrais plus tard.*

#### TROIS (optionel) : Optimiser le code:

Meme si le code SVG est deja tres bien optimisé à la base, il est possible de l'optimiser encore plus.
En fonction du logiciel utilisé pour generer le fichier il y a généralement un **DOCTYPE** , des **annotations** et d'autre chose qui sont inutile. Il existe des outils comme [SVGO](https://github.com/svg/svgo) de Node JS. 

[<img src="p3.png" style="width: 700px;"/>](https://www.youtube.com/watch?v=iVzW3XuOm7E&feature=youtu.be)

#### QUATRE : Prendre le controle avec CSS:

Pour l'exemple j'ai créé un fichier SVG tres simple, deux élément: une ellipse bleu sous un rectangle vert, les deux ont un contoure de 5 pixel noir.

<img src="p6.png" style="width: 700px;"/>

Si on devait refaire plus ou moins la meme chose avec du html et du css voila comment on s y prendrait:

<img src="p4.png" style="width: 700px;"/>

C est maintenant qu'on va parler du code SVG et de ses balise native.
dans mon exemple on retrouve ces balise: 

* **< xml >** : parametre xml (version, UTF-8, etc..)
* **< svg >** : parametre svg ( une sorte de HTML)
* **< g >** : représente la div qui contiens tout les elements.
* **< ellipse >** : contient lles formes de type ellipse.
* **< rect >** : contient les rectangle carrés etc. *logique* :-)
* **< path >** : Pour les formes complexe la div s'appel path.

<img src="p5.png" style="width: 700px;"/>

 *On reviendra sur les propriétés dans un instant.* 

Pour pouvoir modifier le css de chaque éléments il suffit de lui attribuer une class comme pour n'importe quel balise HTML traditionnel.

Comme ca il ne reste plus qu'a ajouter ces class dans le css et s'amuser à modifier le style de chque element du dessin. (Biensur ca marche aussi avec du JS).

## (petite) complication:

Pour modifier un éléments il suffit d'ajouter des propriété css à sa class oui mais il faut tenire compte des propriété réservés à SVG.

Exemple: 

* *"**background-color**"* deviendra *"**fill**"*.
* *"**border**"* deviendra *"**stroke**"*.
* *"**border-radius**"* deviendra *"**rx, ry**"*.

```
.rectangle{
    fill:#5e55f0;
    fill-opacity:1;
    stroke:#000000;
    stroke-width:5;
    stroke-dasharray:0.5, 0.5;
    stroke-opacity:1" 
```

 

## l'animation SVG :
C est la que ca devient intérésent! 

comme il est tres simple d'inclure un fichier SVG et d acceder aux porpriété de chaque éléments du dessin, il est possible de coder des animations assez complexe.


Il existe plusieur facons pour animer une image **SVG**, Pour des animations sofistiqué il sera preferable de passer par JavaScript ou l'une de ses bibliothèques comme [Snap.svg](https://http://snapsvg.io/) ou [SVG.js](https://http://svgjs.com/) ou meme simplement **Jquery**.
La méthode la moins lourde est appelé **SVG inline** , elle consiste à animer l'image avec du css (@keyframes, transform, animation) ou directement dans HTML (animate)

Exemple:

<img src="pipe.png" style="width: 700px;"/>


#### .HTML:
```
<div>
  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 200 200">
<g>
	<g>
		<path d="M188.6,98.8c-4.4,0-16.4,3.1-18.9,6.7c-13.6-0.8-46.4,1.4-70.3,20.3C76.4,144,66.4,147.6,63,148.5
			c0.3-11.4,0.6-31.7-2.5-38.3c-2.2-7.5-14.7-10.8-26.7-10.8s-24.7,3.3-26.7,10.8v0.3c-0.6,1.7-12.5,42.5,6.9,65.3
			c5.6,6.4,15.6,13.6,32.5,13.6c2.2,0,4.7,0,7.5-0.6c13.1-1.4,27.2-6.9,36.7-13.9c9.4-7.2,15.3-13.1,21.1-18.9
			c3.9-3.9,7.5-7.5,11.9-11.4c10.6-8.9,23.6-20,46.4-18.9c2.5,3.1,14.7,5,18.6,5c7.5,0,8.1-7.2,8.1-16.1
			C196.9,106,196.4,98.8,188.6,98.8z M34.2,108.2c10.3,0,17.8,4.7,17.8,6.9c0,2.2-7.8,6.9-17.8,6.9c-10.3,0-17.8-4.7-17.8-6.9
			C16.1,112.9,23.9,108.2,34.2,108.2z"/>
	</g>
	
	<ellipse cx="34.5" cy="101.3" rx="4.7" ry="4.4">
		
		<animate
			attributeName="cy" 
			dur="3s" 
			from="101.3" 
			to="0"
			begin="0"
			repeatCount="indefinite"
		/>

		<animate
			attributeName="ry" 
			dur="3s" 
			from="0" 
			to="18"
			begin="0"
			repeatCount="indefinite" 
		/>

		<animate
			attributeName="rx" 
			dur="3s" 
			from="0" 
			to="25"
			begin="0"
			repeatCount="indefinite"
		/>

	</ellipse>

	<ellipse cx="33.5" cy="101.3" rx="0" ry="0">
		
		<animate
			attributeName="cy" 
			dur="3s" 
			from="101.3" 
			to="0" 
			begin="1.5s"
			repeatCount="indefinite"
		/>

		<animate
			attributeName="ry" 
			dur="3s" 
			from="0" 
			to="18"
			begin="1.5s"
			repeatCount="indefinite" 
		/>

		<animate
			attributeName="rx" 
			dur="3s" 
			from="0" 
			to="25"
			begin="1.5s"
			repeatCount="indefinite"
		/>

	</ellipse>
</g>
</svg>
</div>
```
#### .CSS:
```
body {
  background: #6f5848;
  margin: 0;
  padding: 0;
}

div {
  margin: 0 auto;
  text-align: center;
  width: 80%;  
}

svg {
  display: block;
  margin: 0 auto;
  width: 60%;
  
  path {
    fill: #9f8f33; 
  }
  ellipse {
    fill: rgba(255,255,255,0.9); 
  }
}
```


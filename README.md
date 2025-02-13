# chifoumi

Jeu du Chifoumi

Vous disposez d’une maquette du jeu du Chifoumi (aussi appelé Pierre-Feuille-Ciseau-Puits).

Dans un premier temps, pour simplifier, on ne joue qu’avec Ciseau et Feuille.

Règles du jeu : 
-	Les deux joueurs choisissent leur « arme »
-	Le Ciseau l’emporte sur la Feuille
-	Si ex-aequo on recommence.

 

Travail à faire :

1.	Extraire les fichiers du modèle zippé, les placer dans le répertoire de travail de Laragon.

2.	Compléter la page « traitement.php » pour afficher le joueur gagnant, ou « ex-aequo »
	Vaut-il mieux utiliser « if » ou « switch » ?

3.	Ajouter « Pierre » comme choix possible dans le formulaire ; modifier la page traitement en fonction de ce nouveau choix.
Règle : 
La pierre gagne contre les ciseaux, mais perd contre la feuille (qui enveloppe la pierre).

4.	Ajouter « Puits »
Règle : 
Pierre et ciseaux perdent contre « Puits » car ils tombent dedans ; Feuille gagne contre Puits car elle couvre le puits.

5.	Question bonus :
Comment pourrait-on compter les points des joueurs, c’est-à-dire faire retourner à la page de jeu après chaque résultat, et cumuler les points des joueurs ?

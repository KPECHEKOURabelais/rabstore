<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Algorithme </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php require_once('header.html') ?>
    <section>
        <article class="algo">
            <div class="Exo">
            <h1> Initiation à l’algorithmique </h1>
            <h3> Exercice 1 : </h3>
            <p>
            Ecrire un algorithme qui permet d’afficher le résultat d’un étudiant (accepté ou rejeté) à un module, sachant que ce module est évalué par une note d’oral de coefficient 1, et une note d’écrit de coefficient 2. La moyenne obtenue doit-être supérieure ou égale à 10 pour valider le module. Comme entrées, on a la note d’oral et la note d’écrit, ensuite on calcule la moyenne, et on affiche le résultat.
            </p>
            <span class="puce"> ► </span> <a href="#exo1" style="color : #deffea; text-decoration : underline;"> Corrigé Exo 1 </a>
            <pre>
            
            </pre>  
            <p>
                Le corrigé de cet exercice se trouve ci-joint un peu après à l'énoncé. Découvrons d'abord les énoncés de ces exercices de l'examen de la session de Mai de l'ENEAM IG 1.
            </p>
            <h3> Exercice 2 : </h3>
            <p>
			Ecrire un algorithme qui calcule et affiche le ticket de caisse de la façon suivante : 
            <ul>
                <li> Saisir le prix HT du produit </li>
                <li> Saisir la quantité </li>
                <li> Et ceci jusqu’à ce que la caissière termine en tapant 0 comme prix unitaire </li>
                <li> Saisir alors le pourcentage de remise auquel le client à droit. </li>
            </ul>

            Afficher le prix total à payer en ajoutant la TVA à 18% en déduisant la remise.

            </p>
            <p>
                <h3> Exercice 3 : </h3>
            
		On considère des candidats inscrits à une formation diplômante. Chaque candidat va obtenir une note pour cette formation. 
        Ecrire l’algorithme permettant d’afficher la liste des candidats dont la note est supérieure ou égale à la moyenne des notes de
        <span  id="exo1"> tous les <span> candidats (les noms des candidats et les notes étant lus à partir du clavier, et stockés dans des tableaux).

            </p>
            </div>
            <div class="corrige">
                    <div id="exo1">
                        <h3> Corrigé 1 : </h3>
                    </div>
                    <div class="tab-corrige">
                   <pre>
                   Algorithme 			Résultat d’un étudiant ;
		Variable 
		note_ecrit, note_orale, moy : réel ;
		Début 
		Ecrireln(‘’Entrer la note d’oral de l’étudiant : ‘’) ;
		Lire(note_oral) ;
		Ecrireln(‘’Entrer la note d’écrit de l’ étudiant : ‘’) ;
		Lire(note_ecrit) ;
		moy ← ( 2*note_ecrit + note_oral ) / 3 ;
		SI moy >= 10 ALORS 
			Ecrireln(‘’Accepté’’) ;
		SINON 
			Ecrireln(‘’Rejeté’’) ;
		Fin.

                   </pre>

                    </div>
            </div>
        </article>
    </section>
    <?php require_once('footer.html') ?>
</body>
</html>
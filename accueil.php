<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Accueil </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include('header.html'); ?>

        <section id="accueil">
            <article>
            <h2> Rab Store, la bibliothèque des mathématiques et de la littérature </h2>
                <div class="baniere-image">
                    <img src="etudiants1.jpg" alt="Des étudiants" onclick="this.src='etudiants2.jpeg'">
                </div>

                <div class="discours">
                    <p >
                        L'<span class="education">Education</span> a toujours été l'un des piliers de la rigidité de notre société.
                        Du latin educatio, l'éducation désigne l'action d'élever , de former un enfant, un jeune homme, une jeune fille de développer
                        ses facultés intéllectuelles et morales. Ainsi, ce site vient pour aider ses visiteurs dans leur formation universitaire, leur étude scolaire et tout autre formation.
                        <span class="rab"> Rab Store </span> vous fera voir comprendre des éléments nécessaires pour votre épanouissement intellectuelle.  
                        <br>
                        Et même, la littérature et les mathématiques ont depuis toujours cohabité pour conduire le monde vers sa réussite.
                    Les grands matheux que vous voyez peu après ne vous feront pas comprendre le contraire. Et bien, débutons par ce cadre afin que vous découvriez 
                    <a href="plan_du_site.php" style=" color: red; "> les bienfaits de ce site </a> 
                    </p>
                    <p>
                        Je vous laisse de vous même découvrir les contenus du site, dont l'accès a été rendu possible seulement pour les étudiants en IG 1 à l'ENEAM.
                    </p>
                    
                </div>
                <h3> Mathématiciens , Littéraires sont-ils ? Découvrez-les !</h3>
            <div class="auteur">
                <img src="voltaire.jpg" alt=" voltaire">
                <div class="description">
                        <p>
                        Célèbre écrivain, poète et philosophe français, François Marie Arouet, dit Voltaire, est né à Paris le 21 novembre 1694 et meurt le 30 mai 1978.
                        </p>
                        <div class="citation">
                        <h3>  Citation de Voltaire  </h3>
                        <p> << Un esprit cultivé ne nuit point au courage. >> <br>
                        Voltaire ; Charlot ou la comtesse de Givry, I, V (1767) </p>
                        </div>
                </div>    
            </div>
            <div class="auteur1">
                    <img src="lagrange.png" alt="Lagrange">
                    <div class="description1">
                        <p>
                            Né en 1736 et mort à Paris en 1813, Joseph Louis de Lagrange fut un mathématicien, mécanicien etc. 
                        </p>
                        <div class="oeuvre1">
                        <h3>  Son oeuvre  </h3>
                        <p>
                            Il est le fondateur du calcul des variations, avec Euler, et de la théorie des formes quadratiques. <br>
                            En physique, en précisant le principe de moindre action, avec le calcul des variations, vers 1756, il invente la fonction de Lagrange, qui vérifie les équations de Lagrange.
                        </p>
                        </div>
                    </div>  
                    
            </div>
            <div class="auteur2">
                    <img src="Blaise-Pascal.jpg" alt="Blaise-Pascal">
                    
                    <div class="description2">
                        <p>
                            Né le 19 juin 1623 à Clermont et mort le 19 août 1662 à Paris, Blaise Pascal est un mathématicien, 
                            physicien, philosophe, moraliste et théologien français. 
                        </p>
                        <div class="oeuvre2">
                        <h3> Oeuvre et Citation   </h3>
                        <p>
                            A l'âge de 19 ans, il invente la première machine à calculer.
                            <br>
                            <strong> Citation populaire : </strong><br>
                            << Le coeur a ses raisons que la raison elle-même ignore. >>
                            
                        </p>
                        </div>
                    </div>    
            </div>
            </article>
            
        </section>
    <?php include('footer.html'); ?>
</body>
</html>
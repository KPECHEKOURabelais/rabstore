<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Plan du site </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php require('header.html'); ?>
    <section id="planduSite">
        <h4> Retrouvez sur cette page, les liens qui vous sont utiles pour une bonne navigation sur notre site.</h4>
        <ul>
            <li><span>► </span><a href="algorithme.php">Algorithme</a>  </li>
            <li><span>► </span><a href="programmation.php">Programmation en C++</a></li>
            <li><span>► </span><a href="linux.php">Initiation aux systèmes d’exploitation : Linux</a></li>
            <li><span>► </span><a href="#" onclick="patience()" title="Et bien, patientez un peu ! Cette matière n'est pas encore disponible.">Algèbre linéaire</a></li>
            <li><span>► </span><a href="#" onclick="patience()" title="Et bien, patientez un peu ! Cette matière n'est pas encore disponible.">Architecture et Technologie des Ordinateurs</a></li>
            <li><span>► </span><a href="#" onclick="patience()" title="Et bien, patientez un peu ! Cette matière n'est pas encore disponible."> Introduction au droit </a></li>
        </ul>
    </section>
    <?php require('footer.html'); ?>
    <script>
        function patience(){
            alert('Et bien, patientez un peu ! Cette matière n\'est pas encore disponible.');
        }
    </script>
</body>
</html>
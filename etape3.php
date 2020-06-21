<?php

session_start();

$q1 = $_POST['q1'];
$q2 = $_POST['q2'];
$q3 = $_POST['q3'];
$q4 = $_POST['q4'];
$note_environnement = 0;
$_SESSION["note"] = 0;

switch($q1) {
    case "tres_fort":
        $note_environnement += 2.5;
    break;
    case "fort":
        $note_environnement += 2;
    break;
    case "moyen":
        $note_environnement += 1.5;
    break;
    case "faible":
        $note_environnement += 1;
    break;
    case "tres_faible":
        $note_environnement += 0;
    break;
}

switch($q2) {
    case "mondial":
        $note_environnement += 2.5;
    break;
    case "national":
        $note_environnement += 1.5;
    break;
    case "regional":
        $note_environnement += 0.5;
    break;
}

switch($q3) {
    case "oui":
        $note_environnement += 2.5;
    break;
    case "non":
        $note_environnement += 1;
    break;
}

switch($q4) {
    case "tres_peu":
        $note_environnement += 2.5;
    break;
    case "peu":
        $note_environnement += 1.5;
    break;
    case "beaucoup":
        $note_environnement += 0.5;
    break;
    case "enormement":
        $note_environnement += 0;
    break;
}

$_SESSION["note"] += $note_environnement;
$_SESSION["environnement"] = $note_environnement;

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_etape3.css">
    <title>Impact Cube</title>
</head>
<body>
    <header>
        <figure>
            <img src="asset/logo.jpg" alt="Logo de l'entreprise">
        </figure>
        <div>
            <hr>
            <h3>Porteur de projet</h3>
            <hr>
        </div>
    </header>
    <main>
        <section>
            <div>
                <h5>Etape 1</h5>
                <h4>Fondamentaux</h4>
            </div>
            <div>
                <h5>Etape 2</h5>
                <h4>Environnement</h4>
            </div>
            <div>
                <h5>Etape 3</h5>
                <h4>Social</h4>
            </div>
            <div>
                <h5>Etape 4</h5>
                <h4>Economique</h4>
            </div>
            <div>
                <h5>Etape 5</h5>
                <h4>Validation</h4>
            </div>
        </section>
        <br>
        <br>
    <!-- Formulaire de notation -->
        <form action="etape4.php" method="post">
            <div>
                <h2>Quelle fourchette de prix correspond aux besoins de votre projet ?<h2>
                <hr class="separation">
                <br>
                <div class="flex">
                    <label for="q5">1k-50k €</label><input type="radio" name="q5" value="tres_peu">
                    <label for="q5">50k-100k €</label><input type="radio" name="q5" value="peu">
                    <label for="q5">Plus de 100k €</label><input type="radio" name="q5" value="beaucoup">
                </div>
            </div>
            <br>
            <div>
                <h2>Combien de part de la société êtes-vous prêt à céder ?<h2>
                <hr class="separation">
                <br> 
                <div class="flex">
                    <label for="q6">1 à 10%</label><input type="radio" name="q6" value="tres_peu">
                    <label for="q6">10 à 30%</label><input type="radio" name="q6" value="peu">
                    <label for="q6">Plus de 30%</label><input type="radio" name="q6" value="beaucoup">
                </div>
            </div>
            <br>
            <div>
                <h2>Quelle part du PIB sectoriel visez-vous ?<h2>
                <hr class="separation">
                <br>
                <div class="flex">
                    <label for="q7">1 à 10%</label><input type="radio" name="q7" value="tres_peu"> 
                    <label for="q7">10 à 20%</label><input type="radio" name="q7" value="peu">
                    <label for="q7">Plus de 20%</label><input type="radio" name="q7" value="beaucoup">
                </div>
            </div>
            <br>
            <div>
                <h2>Arrivez-vous à respecter votre trésorerie prévisionnelle ?<h2>
                <hr class="separation">
                <br>
                <div class="flex">
                    <label for="q8">Oui</label><input type="radio" name="q8" value="oui">
                    <label for="q8">Non</label><input type="radio" name="q8" value="non">
                </div>   
            </div>
            <br>
            <input type="submit" value="Suivant">
        </form>
    </main>
</body>
</html>
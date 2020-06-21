<?php

session_start();

$q9 = $_POST["q9"];
$q10 = $_POST["q10"];
$q11 = $_POST["q11"];
$q12 = $_POST["q12"];
$note_economique = 0;
$_SESSION["economique"] = $note_economique;
$_SESSION["environnement"] = $_SESSION["environnement"];
$_SESSION["social"] = $_SESSION["social"];

switch($q9) {
    case "tres_fort":
        $note_economique += 2.5;
    break;
    case "fort":
        $note_economique += 2;
    break;
    case "moyen":
        $note_economique += 1.5;
    break;
    case "faible":
        $note_economique += 1;
    break;
    case "tres_faible":
        $note_economique += 0.5;
    break;
}

switch($q10) {
    case "oui":
        $note_economique += 2.5;
    break;
    case "non":
        $note_economique += 0;
    break;
}

switch($q11) {
    case "pme":
        $note_economique += 0.5;
    break;
    case "tpe":
        $note_economique += 1;
    break;
    case "eti":
        $note_economique += 2;
    break;
    case "ge":
        $note_economique += 2.5;
    break;
}

switch($q12) {
    case "tres_peu":
        $note_economique += 0;
    break;
    case "peu":
        $note_economique += 1;
    break;
    case "beaucoup":
        $note_economique += 2;
    break;
    case "enormement":
        $note_economique += 2.5;
    break;
}

$_SESSION["note"] += $note_economique + 10;

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_etape5.css">
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
            <div class="border">
                <h5>Etape 1</h5>
                <h4>Fondamentaux</h4>
            </div>
            <div class="border">
                <h5>Etape 2</h5>
                <h4>Environnement</h4>
            </div>
            <div class="border">
                <h5>Etape 3</h5>
                <h4>Social</h4>
            </div>
            <div class="border">
                <h5>Etape 4</h5>
                <h4>Economique</h4>
            </div>
            <div class="border">
                <h5>Etape 5</h5>
                <h4>Validation</h4>
            </div>
        </section>
        <br>
        <br>
        <section class="resultat">
            <div>
                <p id="environnement">8/10</p>
                <h1>Environnement</h1>
            </div>
            <div>
                <p id="economique">10/10</p>
                <h1>Economique</h1>
            </div>
            <div>
                <p id="social">6/10</p>
                <h1>Social</h1>
            </div>
        </section>
    </main>
</body>
</html>
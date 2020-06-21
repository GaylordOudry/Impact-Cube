<?php

session_start();

$q5 = $_POST['q5'];
$q6 = $_POST['q6'];
$q7 = $_POST['q7'];
$q8 = $_POST['q8'];
$note_social = 0;

switch($q5) {
    case "tres_peu":
        $note_social += 2.5;
    break;
    case "peu":
        $note_social += 1.5;
    break;
    case "beaucoup":
        $note_social += 0.5;
    break;
}

switch($q6) {
    case "tres_peu":
        $note_social += 0.5;
    break;
    case "peu":
        $note_social += 1.5;
    break;
    case "beaucoup":
        $note_social += 2.5;
    break;
}

switch($q7) {
    case "tres_peu":
        $note_social += 0.5;
    break;
    case "peu":
        $note_social += 1.5;
    break;
    case "beaucoup":
        $note_social += 2.5;
    break;
}

switch($q8) {
    case "oui":
        $note_social += 2.5;
    break;
    case "non":
        $note_social += 0;
    break;
}

$_SESSION["note"] += $note_social;
$_SESSION["social"] = $note_social;

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_etape4.css">
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
        <form action="etape5.php" method="post">
            <div>
                <h2>Quel sera votre impact social ?<h2>
                <hr class="separation">
                <br>
                <div class="flex">
                    <label for="q9">Très fort</label><input type="radio" name="q9" value="tres_fort">
                    <label for="q9">Fort</label><input type="radio" name="q9" value="fort">
                    <label for="q9">Moyen</label><input type="radio" name="q9" value="moyen">
                    <label for="q9">Faible</label><input type="radio" name="q9" value="faible">
                    <label for="q9">Très faible</label><input type="radio" name="q9" value="tres_faible">
                </div>
            </div>
            <br>
            <div>
                <h2>Votre projet visera-t-il, quelque soit le moment, à améliorer les conditions de vie de la population ?<h2>
                <hr class="separation">
                <br> 
                <div class="flex">
                    <label for="q10">Oui</label><input type="radio" name="q10" value="oui">
                    <label for="q10">Non</label><input type="radio" name="q10" value="non">
                </div>
            </div>
            <br>
            <div>
                <h2>Combien d'emplois pensez-vous créer ?<h2>
                <hr class="separation">
                <br>
                <div class="flex">
                    <label for="q11">Moins de 10 emplois</label><input type="radio" name="q11" value="pme"> 
                    <label for="q11">10 à 249 emplois</label><input type="radio" name="q11" value="tpe"> 
                    <label for="q11">250 à 4 999 emplois</label><input type="radio" name="q11" value="eti"> 
                    <label for="q11">Plus de 5 000 emplois</label><input type="radio" name="q11" value="ge">
                </div>
            </div>
            <br>
            <div>
                <h2>Combien de personnes en situation de handicap comptez-vous employer ?<h2>
                <hr class="separation">
                <br>
                <div class="flex">
                    <label for="q12">0 à 1%</label><input type="radio" name="q12" value="tres_peu">
                    <label for="q12">1 à 3%</label><input type="radio" name="q12" value="peu">
                    <label for="q12">3 à 6%</label><input type="radio" name="q12" value="beaucoup">
                    <label for="q12">Plus de 6%</label><input type="radio" name="q12" value="enormement">
                </div>   
            </div>
            <br>
            <input type="submit" value="Suivant">
        </form>
    </main>
</body>
</html>
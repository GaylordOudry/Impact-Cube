<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_etape2.css">
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
        <form action="etape3.php" method="post">
            <div>
                <h2>Votre projet aura t-il un impact environnemental ?<h2>
                <hr class="separation">
                <br>
                <div class="flex">
                    <label for="q1">Très fort</label><input type="radio" name="q1" value="tres_fort">
                    <label for="q1">Fort</label><input type="radio" name="q1" value="fort">
                    <label for="q1">Moyen</label><input type="radio" name="q1" value="moyen">
                    <label for="q1">Faible</label><input type="radio" name="q1" value="faible">
                    <label for="q1">Très faible</label><input type="radio" name="q1" value="tres_faible">
                </div>
            </div>
            <br>
            <div>
                <h2>Comment aura t-il un impact sur l’environnement ?<h2>
                <hr class="separation">
                <br> 
                <div class="flex">
                    <label for="q2">Mondial</label><input type="radio" name="q2" value="mondial">
                    <label for="q2">National</label><input type="radio" name="q2" value="national">
                    <label for="q2">Régional</label><input type="radio" name="q2" value="regional">
                </div>
            </div>
            <br>
            <div>
                <h2>Votre projet sera-t-il favorable à la création de ressources naturelles ?<h2>
                <hr class="separation">
                <br>
                <div class="flex">
                    <label for="q3">Oui</label><input type="radio" name="q3" value="oui"> 
                    <label for="q3">Non</label><input type="radio" name="q3" value="non">
                </div>
            </div>
            <br>
            <div>
                <h2>A quelle ampleur votre projet produira-t-il des gaz à effet de serre ?<h2>
                <hr class="separation">
                <br>
                <div class="flex">
                    <label for="q4">0-100kg équivalent CO2</label><input type="radio" name="q4" value="tres_peu">
                    <label for="q4">100-1000kg équivalent CO2</label><input type="radio" name="q4" value="peu">
                    <label for="q4">1000-10000kg équivalent CO2</label><input type="radio" name="q4" value="beaucoup">
                    <label for="q4">Plus de 10000kg équivalent CO2</label><input type="radio" name="q4" value="enormement">
                </div>   
            </div>
            <br>
            <input type="submit" value="Suivant">
        </form>
    </main>
</body>
</html>
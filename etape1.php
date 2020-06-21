<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_etape1.css">
    <title>Impact Cube</title>
</head>
<body>
    <header>
        <figure>
            <img src="asset/logo.jpg" alt="Logo de l'entreprise">
        </figure>
        <article>
            <hr>
            <h3>Porteur de projet</h3>
            <hr>
        </article>
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
        <form action="etape2.php" method="post">
            <div>
                <h2>Nom du projet :</h2>
                <hr class="separation">
                <br>
                <input type="text" name="nom" id="nom_projet" placeholder="Nom du projet" required>
            </div>
            <br>
            <div>
                <h2>Secteur d'activité :</h2>
                <hr class="separation">
                <br>
                <input type="text" name="secteur" id="secteur" placeholder="Secteur d'activité" required>
            </div>
            <br>
            <div>
                <h2>Présentation du projet :</h2>
                <hr class="separation">
                <br>
                <textarea name="presentation" id="presentation" cols="120" rows="5" placeholder="Présentation du projet" required></textarea>
            </div>
            <br>
            <div>
                <h2>Les produits/services offerts :</h2>
                <hr class="separation">
                <br>
                <input type="text" name="produits" id="produits" placeholder="Les produits/services offerts" required>
            </div>
            <br>
            <div>
                <h2>Taille de l'équipe :</h2>
                <hr class="separation">
                <br>
                <input type="number" name="equipe" id="equipe" placeholder="Taille de l'équipe" required>
            </div>
            <br>
            <div>
                <h2>Où êtes-vous situer ?</h2>
                <hr class="separation">
                <br>
                <input type="text" name="localisation" id="localisation" placeholder="Où êtes-vous situer ?" required>
            </div>
            <br>
            <div>
                <h2>Structure de revenus :</h2>
                <hr class="separation">
                <br>
                <input type="text" name="revenu" id="revenu" placeholder="Structure de revenus" required>
            </div>
            <br>
            <div>
                <h2>ODD visés :</h2>
                <hr class="separation">
                <br>
                <input type="text" name="odd" id="odd" placeholder="ODD visés" required>
            </div>
            <br>
            <input type="submit" value="Suivant">
        </form>
    </main>
</body>
</html>
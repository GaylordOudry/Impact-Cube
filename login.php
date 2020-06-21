<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_login.css">
    <title>Impact Cube</title>
</head>
<body>
    <header>
        <figure>
            <img src="asset/logo.jpg" alt="Logo de l'entreprise" height="100%" width="auto">
        </figure>
    </header>
    <main>
        <section>
            <p>Porteurs de projets innovant a la recherche de financement ?
            <br>
                Cette plateforme vous permet d’entrer en relation avec
                des investisseurs responsables.<br>
                Nous ne vous proposerons uniquement des projets
                soucieux de l’environnement, garantissant une
                bonne qualité de vie aux collaborateurs et à fort potentiel.
                <br>
                <br>
                Donnez de la perspective a vos projets !
            </p>
        </section>
        <section>
            <h1>Espace Connexion</h1>
            <article id="active">
                <div>
                    <h3>Porteur de projet</h3>
                </div>
                <div>
                    <h3>Investisseur</h3>
                </div>
            </article>
            <form action="etape1.php" method="post">
                <div>
                    <label for="id">E-mail :</label>
                    <input type="mail" name="id" id="id">
                </div>
                <div>
                    <label for="password">Mot de passe :</label>
                    <input type="password" name="password" id="password">
                </div>
                <input type="submit">
                <article>
                    <p>Première connexion ?</p>
                    <a href="#">Inscrivez-vous</a>
                </article>
            </form>
        </section>
    </main>
</body>
</html>
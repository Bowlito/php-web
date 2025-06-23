<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>

<body>
    <h1>Page d'inscription</h1>
    <form action="utilisateur.php" method="get">
        <fieldset>
            <legend>Données de connexion</legend>
        <div>
            <label for="username">Nom d'utilisateur</label>
            <input type="text" id=username autocomplete="off">
        </div>
        <div>
            <label for="password">Mot de passe</label>
            <input type="password" id=password>
        </div>
        </fieldset>
        <div>
            <label for="age">Âge</label>
            <input type="number" id=age min=0 max=150>
        </div>
        <div>
            <label for="ville">Ville</label>
            <select id="ville">
                <option selected disabled>Merci de choisir votre ville de résidence</option>
                <option value="Marseille">Marseille</option>
                <option value="Lyon">Lyon</option>
                <option value="Paris">Paris</option>
            </select>
        </div>
        <div>
            <label for="remarque">Remarque</label>
            <textarea  id="remarque" cols="50" rows="5"></textarea>
        </div>
        <div>
            Genre
            <input type="radio" name=genre>Homme 
            <input type="radio" name=genre>Femme 

        </div>
        <div>
            Sport préféré
            <input type="checkbox" name=sport>Football 
            <input type="checkbox" name=sport>Handball 
            <input type="checkbox" name=sport>Tennis 

        </div>
        <div>
            <button>
                S'inscrire
            </button>
        </div>
        <!-- <div>
            <input type="text" placeholder="Votre nom d'utilisateur">
        </div> -->
    </form>
</body>

</html>
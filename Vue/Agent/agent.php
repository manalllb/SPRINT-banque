<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil Agent</title>
    <link rel="stylesheet" href="/Vue/Agent/agent.css">
</head>
<>

    <header>
        <h1>Bienvenue, Agent !</h1>
    </header>

    <section>
    <div class="form-container">
        <form class="form-agent" id="modifClient" action="banque.php" method="post">
            <fieldset class="fieldset-agent">
                <h2 class="form-title">Modifier Client</h2>
                <label class="enfonc-id">ID :</label> <input type="text" name="id">
                <label>Adresse :</label> <input type="text" name="adresse">
                <label>Numéro de téléphone :</label> <input type="text" name="numTel">
                <label>Mail :</label> <input type="text" name="mail">
                <label>Profession :</label> <input type="text" name="profession">
                <label>Situation familiale :</label> <input type="text" name="situation">
                <input type="submit" value="Modifier" name="modifierClient">
            </fieldset>
        </form>

        <form class="form-agent" id="consulterSC" action="banque.php" method="post">
            <fieldset class="fieldset-agent">
                <h2 class="form-title">Consulter Synthèse Client</h2>
                <label class="enfonc">ID :</label> <input type="text" name="id">
                <input type="submit" value="Voir Synthèse" name="consulterSynthese">
            </fieldset>
        </form>

        <form class="form-agent" id="effectuerDep" action="banque.php" method="post">
            <fieldset class="fieldset-agent">
                <h2 class="form-title">Effectuer un Dépôt</h2>
                <label class="enfonc">ID :</label> <input type="text" name="id">
                <input type="submit" value="Déposer" name="effectuerDepot">
            </fieldset>
        </form>

        <form class="form-agent" id="effectuerRet" action="banque.php" method="post">
            <fieldset class="fieldset-agent">
                <h2 class="form-title">Effectuer un Retrait</h2>
                <label class="enfonc">ID :</label> <input type="text" name="id">
                <input type="submit" value="Retirer" name="effectuerRetrait">
            </fieldset>
        </form>

        <form class="form-agent" id="prendreRdv" action="banque.php" method="post">
            <fieldset class="fieldset-agent">
                <h2 class="form-title">Prendre Rendez-vous</h2>
                <label class="enfonc">ID :</label> <input type="text" name="id">
                <input type="submit" value="Prendre RDV" name="prendreRendezvous">
            </fieldset>
        </form>
        </div>
    </section>
</body>
</body>
</html>

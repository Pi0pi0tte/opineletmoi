<!DOCTYPE html>
<html>
    <head>
        <title>Ajout d'un nouveau modèle</title>
    </head>
    <body>
        <?php echo '<p>Formulaire pour l\'ajout d\'un nouveau modèle</p>'; ?>
        <form action="action.php" method="post">
            <label>Désignation :</label>
            <input name="designation" id="designation" type="text" />

            <label>Taille du modèle :</label>
            <input name="taille" id="taille" type="number" /></p>

            <label>Série du modèle :</label>
            <input name="serie" id="serie" type="number" /></p>

            <label>Année du modèle :</label>
            <input name="annee" id="annee" type="number" /></p>

            <label>Nombre d'exemplaires du modèle :</label>
            <input name="nbexemplaire" id="nbexemplaire" type="number" /></p>

            <label>Exemplaire numéroté ? :</label>
            <input name="numerote" id="numerote" type="boolean" /></p>

            <label>Texte descriptif du modèle :</label>
            <input name="texte" id="texte" type="texte" /></p>

            <button type="submit" name="add_modele" class="button" value="add_modele">Valider</button>
        </form>
    </body>

    <?php




    ?>
</html>
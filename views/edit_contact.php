<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier un Contact</title>
    <!-- Ajoutez ici vos liens CSS ou styles pour la mise en forme -->
</head>
<body>
    <h1>Modifier un Contact</h1>
    <a href="index.php">Retour � la liste des contacts</a>


        <form action="edit_contact.php?id    ?>" method="post">

            <label for="nom">Nom :</label>
            <input type="text" id="id" name="nom" value="<?php echo echo???; ?>" required><br>


            <label for="prenom">Pr�nom :</label>
            <input type="text" id="prenom" name="prenom" value="<?php echo echo ???; ?>" required><br>

            <label for="email">Email :</label>
            <input type="email" id="email" name="email" value="<?php echo echo ???; ?>"><br>

            <label for="telephone">T�l�phone :</label>
            <input type="text" id="telephone" name="telephone" value="<?php echo echo ???; ?>"><br>

            <input type="submit" value="Modifier">
        </form>

        <p>Le contact n'a pas �t� trouv�.</p>


</body>
</html>


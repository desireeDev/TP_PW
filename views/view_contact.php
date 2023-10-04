<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>D�tails du Contact</title>
    <!-- Ajoutez ici vos liens CSS ou styles pour la mise en forme -->
</head>
<body>
    <h1>D�tails du Contact</h1>
    <a href="index.php">Retour � la liste des contacts</a>


        <p><strong>Nom :</strong> <?php echo $contact['nom']; ?></p>
        <p><strong>Prénom :</strong> <?php echo $contact['prenom']; ?></p>
            <p><strong>Email :</strong> <?php echo $contact['email']; ?></p>
            <p><strong>Téléphone :</strong> <?php echo $contact['telephone']; ?></p>

            <p>Le contact n'a pas été trouvé.</p>

        </body>
        </html>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des Contacts</title>
    <!-- Ajoutez ici vos liens CSS ou styles pour la mise en forme -->
</head>
<body>
    <h1>Liste des Contacts</h1>
    <a href="ajouter_contact.php">Ajouter un contact</a>

        <table>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
                    <th>Téléphone</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                    <tr>
                        <td><?php echo isset($variable) ? $variable : ''; ?></td>
                                                <td><?php echo isset($nom) ? $nom : ''; ?></td>
                                                <td><?php echo isset($prenom) ? $prenom : ''; ?></td>
                                                <td><?php echo isset($email) ? $email : ''; ?></td>
                                                <td>
                                                    <a href="voir_contact.php?id=<?php echo isset($id) ? $id : ''; ?>">Voir</a>
                                                    <a href="modifier_contact.php?id=<?php echo isset($id) ? $id : ''; ?>">Modifier</a>
                                                    <a href="supprimer_contact.php?id=<?php echo isset($id) ? $id : ''; ?>">Supprimer</a>
                                                </td>
                                            </tr>
                                    
                                    </tbody>
                                </table>

                                <p>Aucun contact trouv�.</p>

                        </body>
                        </html>


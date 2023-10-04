<?php
class ViewContactController {
    private $contactDAO;

    public function __construct(ContactDAO $contactDAO) {
        $this->contactDAO = $contactDAO;
    }

    public function viewContact($contactId) {
        // R�cup�rer le contact � afficher en utilisant son ID

        $contacts = $this->contactDAO->getContact($contactId);
        // V�rifier que le contact existe

        if (empty($contacts)) {
            // Si le contact n'existe pas, afficher un message d'erreur et arr�ter l'ex�cution du script
            echo "Le contact n'existe pas";
            exit;
        }
        else {
            // Si le contact existe, afficher ses d�tails
            include 'views/view_contact.php';
        }

        // Inclure la vue pour afficher les d�tails du contact
       
    }
}
?>


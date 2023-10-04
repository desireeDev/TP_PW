<?php
class HomeController {
  
    private $contactDAO;

    public function __construct(ContactDAO $contactDAO) {
        $this->contactDAO = $contactDAO;
    }

    public function index() {
        // Récupérer la liste de tous les contacts depuis le modèle
        $contacts = $this->ContactModel->getContacts();
       

        // Inclure la vue pour afficher la liste des contacts
    
       
    }

}

include_once ("../views/home.php");
?>

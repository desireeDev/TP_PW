<?php
class AddContactController {
    private $contactDAO;

    public function __construct(ContactDAO $contactDAO) {
        $this->contactDAO = $contactDAO;
    }
  
    public function addContact($id,$nom, $prenom, $email, $telephone) {
       
        // Ajouter le contact dans la base de données
        // $contact = new ContactModel($id,$nom, $prenom, $email, $telephone);

        $this->contactDAO->addContact($contact);


        }

        // Inclure la vue pour afficher le formulaire d'ajout de contact
    
       
      

    }
    include_once ("../views/add_contact.php");
?>
<?php







?>


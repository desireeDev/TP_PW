<?php


        // Inclure la vue pour afficher le formulaire de modification du contact
    
        
        class EditContactController {
            private $contactDAO;

            public function __construct(ContactDAO $contactDAO) {
                $this->contactDAO = $contactDAO;
            }

            public function editContact($contactId) {
                // TODO: Implement editContact() method
                include('views/edit_contact.php');
            }
        }
           
      
     
        
    
?>


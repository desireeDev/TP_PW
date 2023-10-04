<?php
class ContactDAO {
    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }
  // Méthode pour insérer un nouveau contact dans la base de données
    public function create(ContactModel $contact) {
        $query = ('INSERT INTO contacts (nom, prenom, email, telephone) VALUES (:nom, :prenom, :email, :telephone)');
       return $this->pdo->prepare($query,$contact)->execute();
   
    
    }

    // Méthode pour récupérer un contact par son ID
    public function getById($id) {
        $query=('SELECT * FROM contacts WHERE id = :id');
 
        $contact = $this->pdo->prepare($query)->execute();
        $query->bindParam(':id', $id);
        $query->execute();
        $query->fetchAll(PDO::FETCH_ASSOC);
        return $query;
       
    }

    // Méthode pour récupérer la liste de tous les contacts
    public function getAll() {
        $query=('SELECT * FROM contacts');
        $contacts = $this->pdo->prepare($query)->execute();
      
        $query->bindParam(':id', $id);
        $query->execute();
        $query->fetchAll(PDO::FETCH_ASSOC);
        return $query;
       
    }

    // Méthode pour mettre à jour un contact
    public function update(ContactModel $contact) {
        $query=('UPDATE contacts SET nom = :nom, prenom = :prenom, email = :email, telephone = :telephone WHERE id = :id');
        $code = $this->queryPrepare($query);
        $contact = $this->pdo->prepare($query)->execute();
        $query->bindParam(':id', $id);
        $query->execute();
        $query->fetchAll(PDO::FETCH_ASSOC);
        return $query;

       
    }

    // Méthode pour supprimer un contact par son ID
    public function deleteById($id) {
        $query=('DELETE FROM contacts WHERE id = :id');
        $contact = $this->pdo->prepare($query)->execute();
        $query->bindParam(':id', $id);
        $query->execute();
        $query->fetchAll(PDO::FETCH_ASSOC);
        return $query;
        return $contact;
       
    }
}
?>

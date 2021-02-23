<?php
class Patient extends DataBase
{
    /**
     * Methode permettant de rajouter un patient dans notre base de donnée.
     *
     * @param array $patientDetails contient toutes les informations du patient
     * @return boolean Permet de savoir si la requête est bien passé
     */
    public function insertPatient($lastname, $firstname, $birthdate, $phone, $mail)
    {
        $query = "INSERT INTO patients(lastname, firstname, birthdate, phone, mail) VALUES(:lastname,:firstname,:birthdate,:phone,:mail)";
        // Nous preparons notre requete à l'aide de la methode prepare
        $insertPatientQuery = $this->dataBase->prepare($query);
        $insertPatientQuery->bindValue(':lastname', $lastname, PDO::PARAM_STR);
        $insertPatientQuery->bindValue(':firstname', $firstname, PDO::PARAM_STR);
        $insertPatientQuery->bindValue(':birthdate', $birthdate, PDO::PARAM_STR);
        $insertPatientQuery->bindValue(':phone', $phone, PDO::PARAM_STR);
        $insertPatientQuery->bindValue(':mail', $mail, PDO::PARAM_STR);

        // test et execution de la requête pour afficher message erreur
        if ($insertPatientQuery->execute()) {
            return true;
        } else {
            return false;
        }
    }
    /**
     * méthode permettant d'afficher un patient de notre base de donnée
     */
    public function showPatient()
    {
        $query = "SELECT * FROM `patients` ORDER BY `id` DESC";
        $queryObj = $this->dataBase->query($query);
        $resultQuery = $queryObj->fetchall();
        return $resultQuery;
    }
    /**
     * méthode permettant d'afficher un patient en détails de notre base de donnée
     */
    public function detailPatient(string $id)
    {
        $query = "SELECT * FROM hospitale2n.patients WHERE id =:id";
        $queryObj = $this->dataBase->prepare($query);
        $queryObj->bindValue(':id', $id, PDO::PARAM_STR);
        if ($queryObj->execute()) {
            // je retourne le resultat sous forme de tableau via la methode fetch car une seule ligne comme résultat
            return $queryObj->fetch();
        } else {
            return false;
        }
    }
    /**
     * méthode permettant de modifier les données de notre patient
     */
    public function updatePatient($lastname, $firstname, $birthdate, $phone, $mail, $id)
    {
        $query = "UPDATE patients SET lastname = :lastname ,firstname = :firstname ,birthdate =  :birthdate ,phone = :phone ,mail= :mail WHERE id =:id";
         // Nous preparons notre requete à l'aide de la methode prepare
         $updatePatientQuery = $this->dataBase->prepare($query);

         // je bind mes valeurs à l'aide de la methode bindvalue()
         $updatePatientQuery->bindValue(':lastname', $lastname, PDO::PARAM_STR);
         $updatePatientQuery->bindValue(':firstname', $firstname, PDO::PARAM_STR);
         $updatePatientQuery->bindValue(':birthdate', $birthdate, PDO::PARAM_STR);
         $updatePatientQuery->bindValue(':phone', $phone, PDO::PARAM_STR);
         $updatePatientQuery->bindValue(':mail', $mail, PDO::PARAM_STR);
         $updatePatientQuery->bindValue(':id', $id, PDO::PARAM_STR);
 
         // test et execution de la requête pour afficher message erreur
         if ($updatePatientQuery->execute()) {
             return true;
         } else {
             return false;
         }
    }
    public function deletePatient($id){
        $query = "DELETE FROM patients WHERE id = $id";
        $queryObj = $this->dataBase->prepare($query);
        $queryObj->bindValue(':id', $id, PDO::PARAM_STR);
        if ($queryObj->execute()) {
            // je retourne le resultat sous forme de tableau via la methode fetch car une seule ligne comme résultat
            return $queryObj->fetchall();
        } else {
            return false;
        }
    }
}

<?php 
class Clients extends DataBase{
    public function getClient(){
        $queryClient = 'SELECT `id` , `lastname` , `firstname` FROM `clients`';
        $queryObjClient = $this->dataBase->query($queryClient);
        $resultClient = $queryObjClient->fetchAll();
        return $resultClient;
    }
    public function get20CLient(){
        $query20Client = 'SELECT `id` , `lastname` , `firstname` FROM `clients` LIMIT 20';
        $queryObj20Client = $this->dataBase->query($query20Client);
        $result20Client = $queryObj20Client->fetchAll();
        return $result20Client;
    }
    public function getCardCLient($type){
        $queryCardClient = 'SELECT `clients`.`id` , `lastname` , `firstname`, `cards`.`cardNumber`,`cardtypes`.`type` FROM `clients` INNER JOIN `cards` ON `clients`.`cardNumber`=`cards`.`cardNumber` INNER JOIN `cardtypes` ON `cards`.`cardTypesId`=`cardtypes`.`id` WHERE `cards`.`cardTypesID`='.$type;
        $queryObjCardClient = $this->dataBase->query($queryCardClient);
        $resultCardClient = $queryObjCardClient->fetchAll();
        return $resultCardClient;
    }
    public function getMCLient(){
        $queryMClient = "SELECT `id` , `lastname` , `firstname` FROM `clients` WHERE `clients`.`lastName`LIKE 'm%' ORDER BY `clients`.`firstName`";
        $queryObjMClient = $this->dataBase->query($queryMClient);
        $resultMClient = $queryObjMClient->fetchAll();
        return $resultMClient;
    }
    public function getAllCLient(){
        $queryAllClient = "SELECT clients.id , lastname , firstname, birthdate, clients.card , clients.cardNumber FROM `clients`";
        $queryObjAllClient = $this->dataBase->query($queryAllClient);
        $resultAllClient = $queryObjAllClient->fetchAll();
        return $resultAllClient;
    }
}
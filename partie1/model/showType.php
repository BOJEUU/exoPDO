<?php 
class ShowType extends DataBase{
    public function getShowType(){
        $queryShowType = 'SELECT `id`,`type` FROM colyseum.showtypes';

        $queryObjType = $this->dataBase->query($queryShowType);
        $resultType = $queryObjType->fetchAll();
        return $resultType;
    }
}
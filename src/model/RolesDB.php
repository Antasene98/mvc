<?php
namespace src\model;
use libs\system\Model;

class RolesDB extends Model{
    public function findAll(){
        //array("ROLE_COMPTA", "ROLE_FINANCE");
        return $this->entityManager
            ->createQuery("SELECT r from Roles r")
            ->getResult();
    }
}
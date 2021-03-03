<?php
namespace libs\system;

class Model {

    protected $entityManager;
    public function __construct()
    {
        define('CWD', getcwd());

        require_once CWD."/bootstrap.php";
        $this->entityManager = $entityManager;
    }
}
<?php

namespace WilliamTome\Db;

use WilliamTome\MyException;

class ORM {

    private $db;

    public function setDb(Db $db){
        $this->db = $db;
    }

    public function select(bool $data)
    {
        if ($data) {
            return [];
        }
        throw new MyException("Data deveria ser positivo.", 1);
        
    }
}
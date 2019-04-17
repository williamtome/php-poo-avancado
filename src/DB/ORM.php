<?php

namespace WilliamTome\Db;

class ORM {

    private $db;

    public function setDb(Db $db){
        $this->db = $db;
    }
}
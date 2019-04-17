<?php
namespace WilliamTome\DB;

class MySQL implements Db{
    public function connect() :string
    {
        return 'connected to MySQL';
    }
}
<?php
namespace WilliamTome\DB;

class Postgres implements Db{
    public function connect() :string
    {
        return 'connected to Postgres';
    }
}
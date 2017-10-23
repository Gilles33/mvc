<?php

class PdoQuest
{
    private $_db;

    public function __construct()
    {
        $this->_db = new PDO("mysql:host=localhost;dbname=quest_manager", "", "");
    }

    public function getAllData() {
        $query = "SELECT * FROM quest";
        $res = $this->_db->query($query);
        $resAll = $res->fetchAll(PDO::FETCH_OBJ);
        return $resAll;
    }

}
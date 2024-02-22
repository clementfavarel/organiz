<?php
require_once(__DIR__ . '/Db.php');

class User
{
    private $db;

    public function __construct()
    {
        $this->db = new Db();
    }

    public function getUserByEmail($email)
    {
    }

    public function create()
    {
    }
}

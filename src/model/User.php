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
        $sql = 'SELECT * FROM users WHERE email = :email';
        $this->db->query($sql);
        $this->db->bind(':email', $email);
        $user = $this->db->single();

        return $user;
    }

    public function create($pseudo, $email, $pwd, $created)
    {
        $sql = 'INSERT INTO users (pseudo, email, pwd, created) VALUES (:pseudo, :email, :pwd, :created)';
        $this->db->query($sql);
        $this->db->bind(':pseudo', $pseudo);
        $this->db->bind(':email', $email);
        $this->db->bind(':pwd', $pwd);
        $this->db->bind(':created', $created);
        $this->db->execute();

        $user = $this->getUserByEmail($email);

        return $user;
    }
}

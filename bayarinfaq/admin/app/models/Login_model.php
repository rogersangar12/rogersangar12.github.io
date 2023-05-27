<?php
class Login_model
{
    private $table = 'admin';
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    public function checkingLoginUser($data)
    {

        $username = strtolower(stripslashes($data["username"]));
        $query = "SELECT username FROM " . $this->table . " WHERE username =:username";
        $this->db->query($query);
        $this->db->bind('username', $username);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function checkingPasswordUser($data)
    {
        // var_dump($data);die;
        $conn = mysqli_connect("localhost", "root", "", "zakatfitrah");
        $password = mysqli_real_escape_string($conn, $data["password"]);
        $username = strtolower(stripslashes($data["username"]));

        $query = "SELECT password FROM " . $this->table . " WHERE username =:username";
        $this->db->query($query);
        $this->db->bind('username', $username);
        $this->db->execute();
        // var_dump($this->db->single());die;
        return $this->db->single();
    }
}

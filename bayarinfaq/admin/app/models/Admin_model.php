<?php
class Admin_model
{
    private $table = 'admin';
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    public function getAllDataAdmin()
    {
        $this->db->query('SELECT*FROM ' . $this->table);
        return $this->db->resultSet();
    }
    public function getAdminById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    public function checkingDataAdmin($data)
    {
        // var_dump($this->db);die;
        $conn = mysqli_connect("localhost", "root", "", "zakatfitrah");
        $password = mysqli_real_escape_string($conn, $data["password"]);
        $password2 = mysqli_real_escape_string($conn, $data["password2"]);
        $username = strtolower(stripslashes($data["username"]));

        $query = "SELECT username FROM admin WHERE username =:username";
        $this->db->query($query);
        $this->db->bind('username', $username);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function tambahDataAdmin($data)
    {
        $conn = mysqli_connect("localhost", "root", "", "zakatfitrah");
        $nama = htmlspecialchars($data['nama']);
        $username = strtolower(stripslashes($data["username"]));
        $password = mysqli_real_escape_string($conn, $data["password"]);
        $password = password_hash($password, PASSWORD_DEFAULT);

        $query = "INSERT INTO admin VALUES('',:nama, :username, :password)";
        $this->db->query($query);
        $this->db->bind('nama', $nama);
        $this->db->bind('username', $username);
        $this->db->bind('password', $password);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function hapusDataAdmin($id)
    {
        $query = "DELETE FROM admin WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function cariDataAdmin()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM admin WHERE nama LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }
    public function getDataSebelumById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    public function ubahDataAdmin($data)
    {
        // var_dump($data);die;
        $id = $data['id'];
        $nama = htmlspecialchars($data['nama']);

        $query = "UPDATE admin SET  nama=:nama WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->bind('nama', $nama);
        $this->db->execute();
        return $this->db->rowCount();
    }
}

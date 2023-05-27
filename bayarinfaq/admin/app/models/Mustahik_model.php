<?php
class Mustahik_model
{
    private $table = 'mustahik';
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    //DRIVER PDO (PHP DATA OBJEK)
    //AKAN LEBIH MUDAH JIGA AKAN MENGGANTI DB    
    public function getAllMustahik()
    {
        $this->db->query('SELECT*FROM ' . $this->table);
        return $this->db->resultSet();
    }
    public function getMustahikById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    public function tambahDataMustahik($data)
    {
        $kategori = htmlspecialchars($data['kategori']);
        $jumlah_hak = htmlspecialchars($data['jumlah_hak']);
        $query = "INSERT INTO " . $this->table . " values ('', :kategori, :jumlah_hak )";
        $this->db->query($query);
        $this->db->bind('kategori', $kategori);
        $this->db->bind('jumlah_hak', $jumlah_hak);
        $this->db->execute();

        return $this->db->rowCount();
    }


    public function hapusDataMustahik($id)
    {
        $query = "DELETE FROM " . $this->table . " WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function getDataSebelumById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    public function ubahDataMustahik($data)
    {
        // var_dump($data);
        // die;
        $id = $data['id'];
        $kategori = htmlspecialchars($data['kategori']);
        $jumlah_hak = htmlspecialchars($data['jumlah_hak']);

        $query = "UPDATE " . $this->table . " SET kategori=:kategori, jumlah_hak=:jumlah_hak WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->bind('kategori', $kategori);
        $this->db->bind('jumlah_hak', $jumlah_hak);
        $this->db->execute();

        return $this->db->rowCount();
    }
    public function cariDataMustahik()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM " . $this->table . " WHERE plat_nomor LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }
    public function getTotalMustahik()
    {
        $this->db->query('SELECT SUM(jumlah_hak) AS jumlah FROM ' . $this->table);
        return $this->db->resultSet();
    }
}

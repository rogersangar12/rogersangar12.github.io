<?php
class Kotak_amal_model
{
    private $table = 'kotak_amal';
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    //DRIVER PDO (PHP DATA OBJEK)
    //AKAN LEBIH MUDAH JIGA AKAN MENGGANTI DB    
    public function getAllKotak_amal()
    {
        $this->db->query('SELECT*FROM ' . $this->table);
        return $this->db->resultSet();
    }
    public function getKotak_amalById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    public function tambahDataKotak_amal($data)
    {
        $jumlah = htmlspecialchars($data['jumlah']);
        $tanggal = htmlspecialchars($data['tanggal']);


        $query = "INSERT INTO kotak_amal values ('', :jumlah, :tanggal)";
        $this->db->query($query);
        $this->db->bind('jumlah', $jumlah);
        $this->db->bind('tanggal', $tanggal);


        $this->db->execute();
        return $this->db->rowCount();
    }


    public function hapusDataKotak_amal($id)
    {
        $query = "DELETE FROM kotak_amal WHERE id=:id";
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
    public function ubahDataKotak_amal($data)
    {
        // var_dump($data);die;
        $id = $data['id'];

        $jumlah = htmlspecialchars($data['jumlah']);
        $tanggal = htmlspecialchars($data['tanggal']);

        $query = "UPDATE kotak_amal SET jumlah=:jumlah, tanggal=:tanggal WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->query($query);
        $this->db->bind('jumlah', $jumlah);
        $this->db->bind('tanggal', $tanggal);


        $this->db->execute();
        // var_dump($this->db->rowCount());die;
        return $this->db->rowCount();
    }
    public function cariDataKotak_amal()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM kotak_amal WHERE plat_nomor LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }
    public function getTotalKotak_amal()
    {
        $this->db->query('SELECT SUM(jumlah) AS jumlah FROM ' . $this->table);
        return $this->db->resultSet();
    }
}

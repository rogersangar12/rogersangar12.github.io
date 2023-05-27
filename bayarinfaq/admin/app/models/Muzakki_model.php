<?php
class Muzakki_model
{
    private $table = 'muzakki';
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    //DRIVER PDO (PHP DATA OBJEK)
    //AKAN LEBIH MUDAH JIGA AKAN MENGGANTI DB    
    public function getAllMuzakki()
    {
        $this->db->query('SELECT*FROM ' . $this->table);
        return $this->db->resultSet();
    }
    public function getMuzakkiById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    public function tambahDataMuzakki($data)
    {
        $no_kk = htmlspecialchars($data['no_kk']);
        $nama = htmlspecialchars($data['nama']);
        $jumlah_tanggungan = htmlspecialchars($data['jumlah_tanggungan']);
        $keterangan = htmlspecialchars($data['keterangan']);
        $query = "INSERT INTO " . $this->table . " values ('',:no_kk, :nama, :jumlah_tanggungan, :keterangan)";
        $this->db->query($query);
        $this->db->bind('no_kk', $no_kk);
        $this->db->bind('nama', $nama);
        $this->db->bind('jumlah_tanggungan', $jumlah_tanggungan);
        $this->db->bind('keterangan', $keterangan);
        $this->db->execute();
        return $this->db->rowCount();
    }


    public function hapusDataMuzakki($id)
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
    //untuk tabel bayarzakat
    public function getDataSebelumByNoKK($data)
    {
        $no_kk = htmlspecialchars($data['no_kk']);
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE no_kk=:no_kk');
        $this->db->bind('no_kk', $no_kk);
        return $this->db->single();
    }
    public function checkingubahdata($data)
    {
        $no_kk = htmlspecialchars($data['no_kk']);
        $id = $data['id'];
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE no_kk=:no_kk AND id!=:id');
        $this->db->bind('id', $id);
        $this->db->bind('no_kk', $no_kk);
        return $this->db->single();
    }
    public function ubahDataMuzakki($data)
    {

        $id = $data['id'];
        $no_kk = htmlspecialchars($data['no_kk']);
        $nama = htmlspecialchars($data['nama']);
        $jumlah_tanggungan = htmlspecialchars($data['jumlah_tanggungan']);
        $keterangan = htmlspecialchars($data['keterangan']);

        $query = "UPDATE " . $this->table . " SET no_kk=:no_kk, nama=:nama, jumlah_tanggungan=:jumlah_tanggungan, keterangan=:keterangan WHERE id=:id";
        // var_dump($this->db->query($query));
        // die;
        $this->db->query($query);
        $this->db->bind('no_kk', $no_kk);
        $this->db->bind('id', $id);
        $this->db->bind('nama', $nama);
        $this->db->bind('jumlah_tanggungan', $jumlah_tanggungan);
        $this->db->bind('keterangan', $keterangan);
        $this->db->execute();

        return $this->db->rowCount();
    }
    public function cariDataMuzakki()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM " . $this->table . " WHERE no_kk LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }
    public function getTotalMuzakki()
    {
        $this->db->query('SELECT SUM(jumlah_tanggungan) AS jumlah FROM ' . $this->table);
        return $this->db->resultSet();
    }
}

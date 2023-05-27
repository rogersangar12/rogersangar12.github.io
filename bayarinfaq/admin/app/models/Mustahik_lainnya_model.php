<?php
class Mustahik_lainnya_model
{
    private $table = 'mustahik_lainnya';
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    //DRIVER PDO (PHP DATA OBJEK)
    //AKAN LEBIH MUDAH JIGA AKAN MENGGANTI DB    
    public function getBelum_Mustahik_lainnya()
    {
        $status = "Belum Diberikan";
        $this->db->query('SELECT*FROM ' . $this->table . ' WHERE status=:status');
        $this->db->bind('status', $status);
        return $this->db->resultSet();
    }
    public function getSudah_Mustahik_lainnya()
    {
        $status = "Sudah Diberikan";
        $this->db->query('SELECT*FROM ' . $this->table . ' WHERE status=:status');
        $this->db->bind('status', $status);
        return $this->db->resultSet();
    }
    public function getMustahik_lainnyaById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    public function tambahDataMustahik_lainnya($data)
    {
        $no_kk = htmlspecialchars($data['no_kk']);
        $nama = htmlspecialchars($data['nama']);
        $kategori = htmlspecialchars($data['kategori']);
        $hak = htmlspecialchars($data['hak']);
        $status = htmlspecialchars($data['status']);
        $query = "INSERT INTO " . $this->table . " values ('',:no_kk, :nama, :kategori, :hak, :status )";
        $this->db->query($query);
        $this->db->bind('no_kk', $no_kk);
        $this->db->bind('nama', $nama);
        $this->db->bind('kategori', $kategori);
        $this->db->bind('hak', $hak);
        $this->db->bind('status', $status);
        $this->db->execute();
        return $this->db->rowCount();
    }


    public function hapusDataMustahik_lainnya($id)
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
    public function ubahDataMustahik_lainnya($data)
    {
        // var_dump($data);
        // die;
        $id = $data['id'];
        $no_kk = htmlspecialchars($data['no_kk']);
        $nama = htmlspecialchars($data['nama']);
        $kategori = htmlspecialchars($data['kategori']);
        $hak = htmlspecialchars($data['hak']);
        $status = htmlspecialchars($data['status']);

        $query = "UPDATE " . $this->table . " SET no_kk=:no_kk, nama=:nama, kategori=:kategori, hak=:hak, status=:status WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->bind('no_kk', $no_kk);
        $this->db->bind('nama', $nama);
        $this->db->bind('kategori', $kategori);
        $this->db->bind('hak', $hak);
        $this->db->bind('status', $status);
        $this->db->execute();

        return $this->db->rowCount();
    }
    public function berikanDataMustahik_lainnya($data)
    {
        // var_dump($data);
        // die;
        $id = $data['id'];
        $no_kk = htmlspecialchars($data['no_kk']);
        $nama = htmlspecialchars($data['nama']);
        $kategori = htmlspecialchars($data['kategori']);
        $hak = htmlspecialchars($data['hak']);
        $status = htmlspecialchars($data['status']);

        $query = "UPDATE " . $this->table . " SET no_kk=:no_kk, nama=:nama, kategori=:kategori, hak=:hak, status=:status WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->bind('no_kk', $no_kk);
        $this->db->bind('nama', $nama);
        $this->db->bind('kategori', $kategori);
        $this->db->bind('hak', $hak);
        $this->db->bind('status', $status);
        $this->db->execute();

        return $this->db->rowCount();
    }
    public function refreshDataMustahik_lainnya($data)
    {
        // var_dump($data);
        // die;
        $status = "Belum Diberikan";
        $query = "UPDATE " . $this->table . " SET status=:status";
        $this->db->query($query);
        $this->db->bind('status', $status);
        $this->db->execute();

        return $this->db->rowCount();
    }
    public function cariDataMustahik_lainnya()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM " . $this->table . " WHERE plat_nomor LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }
    public function getTotalMustahik_lainnya()
    {
        $this->db->query('SELECT SUM(jumlah_hak) AS jumlah FROM ' . $this->table);
        return $this->db->resultSet();
    }
    public function getTotalamilin()
    {
        $keyword = "Amilin";
        $query = "SELECT COUNT(kategori) AS total_amilin FROM " . $this->table . " WHERE kategori LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "$keyword");
        return $this->db->single();
    }
    public function getHak_amilin()
    {
        $keyword = "Amilin";
        $query = "SELECT sum(hak) AS hak_amilin FROM " . $this->table . " WHERE kategori LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "$keyword");
        return $this->db->single();
    }
    public function getTotalfisabilillah()
    {
        $keyword = "Fisabilillah";
        $query = "SELECT COUNT(kategori) AS total_fisabilillah FROM " . $this->table . " WHERE kategori LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "$keyword");
        return $this->db->single();
    }
    public function getHak_fisabilillah()
    {
        $keyword = "Fisabilillah";
        $query = "SELECT sum(hak) AS hak_fisabilillah FROM " . $this->table . " WHERE kategori LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "$keyword");
        return $this->db->single();
    }
    public function getTotalmualaf()
    {
        $keyword = "Mualaf";
        $query = "SELECT COUNT(kategori) AS total_mualaf FROM " . $this->table . " WHERE kategori LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "$keyword");
        return $this->db->single();
    }
    public function getHak_mualaf()
    {
        $keyword = "Mualaf";
        $query = "SELECT sum(hak) AS hak_mualaf FROM " . $this->table . " WHERE kategori LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "$keyword");
        return $this->db->single();
    }
    public function getTotalibnu_sabil()
    {
        $keyword = "Ibnu Sabil";
        $query = "SELECT COUNT(kategori) AS total_ibnu_sabil FROM " . $this->table . " WHERE kategori LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "$keyword");
        return $this->db->single();
    }
    public function getHak_ibnu_sabil()
    {
        $keyword = "Ibnu Sabil";
        $query = "SELECT sum(hak) AS hak_ibnu_sabil FROM " . $this->table . " WHERE kategori LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "$keyword");
        return $this->db->single();
    }
}

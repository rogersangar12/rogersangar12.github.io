<?php
class Bayar_infaq_model
{
    private $table = 'bayarinfaq';
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    //DRIVER PDO (PHP DATA OBJEK)
    //AKAN LEBIH MUDAH JIGA AKAN MENGGANTI DB    
    public function getAll_Bayar_infaq()
    {
        $this->db->query('SELECT*FROM ' . $this->table);
        return $this->db->resultSet();
    }
    public function getBayar_infaqById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    public function tambahDataBayar_infaq($data)
    {
        // var_dump($data);die;
        $no_kk = htmlspecialchars($data['bulan']);
        $jenis_bayar = htmlspecialchars($data['pemasukan']);
        $query = "INSERT INTO " . $this->table . " values ('',:bulan, :pemasukan)";
        $this->db->query($query);
        $this->db->bind('bulan', $no_kk);
        $this->db->bind('pemasukan', $jenis_bayar);
        $this->db->execute();
        return $this->db->rowCount();
    }


    public function hapusDataBayar_infaq($id)
    {
        $query = "DELETE FROM " . $this->table . " WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function hapusAllDataBayar_infaq()
    {
        $status = "Sudah Bayar";
        $query = "DELETE FROM " . $this->table . " WHERE status=:status";
        $this->db->query($query);
        $this->db->bind('status', $status);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function getDataSebelumById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    public function ubahDataBayar_infaq($data)
    {
        $id = $data['id'];
        $bulan = htmlspecialchars($data['bulan']);
        $pemasukan = htmlspecialchars($data['pemasukan']);
        $query = "UPDATE " . $this->table . " SET bulan=:bulan, pemasukan=:pemasukan WHERE id=:id ";
        $this->db->query($query);
        $this->db->bind('id', $id);
        // $this->db->bind('no_kk', $no_kk);
        $this->db->bind('bulan', $bulan);
        $this->db->bind('pemasukan', $pemasukan);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function cariDataBayar_infaq()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM " . $this->table . " WHERE no_kk LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }
    public function getTotalBayar_infaq()
    {
        $this->db->query('SELECT SUM(pemasukan) AS jumlah FROM ' . $this->table);
        return $this->db->resultSet();
    }
    public function getTotalbayarinfaq()
    {
        $this->db->query('SELECT COUNT(*) AS total_bayarinfaq FROM bayarinfaq');
        return $this->db->resultSet();
    }
    public function getJumlah_tanggungan()
    {
        $this->db->query('SELECT SUM(jumlah_tanggungan) AS total_jiwa FROM bayarinfaq');
        return $this->db->resultSet();
    }
    public function getTotal_uang()
    {
        $this->db->query('SELECT SUM(bayar_uang) AS total_uang FROM ' . $this->table);
        return $this->db->resultSet();
    }
    public function getTotal_beras()
    {
        $this->db->query('SELECT SUM(bayar_beras) AS total_beras FROM ' . $this->table);
        return $this->db->resultSet();
    }
    public function getDataSebelumByBulan($data)
    {
        $no_kk = htmlspecialchars($data['bulan']);
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE bulan=:bulan');
        $this->db->bind('bulan', $bulan);
        return $this->db->single();
    }
}

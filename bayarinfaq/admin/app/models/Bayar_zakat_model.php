<?php
class Bayar_zakat_model
{
    private $table = 'bayarzakat';
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    //DRIVER PDO (PHP DATA OBJEK)
    //AKAN LEBIH MUDAH JIGA AKAN MENGGANTI DB    
    public function getAllBayar_zakat()
    {
        $this->db->query('SELECT  muzakki.nama, muzakki.no_kk, muzakki.jumlah_tanggungan, bayarzakat.id, bayarzakat.bayar_tanggungan,bayarzakat.jenis_bayar,bayarzakat.bayar_uang,bayarzakat.bayar_beras, bayarzakat.status FROM muzakki,bayarzakat WHERE muzakki.no_kk=bayarzakat.no_kk');
        return $this->db->resultSet();
    }
    public function getAllBelum_Bayar_zakat()
    {
        $this->db->query('SELECT muzakki.id, muzakki.nama, muzakki.no_kk, muzakki.jumlah_tanggungan ,bayarzakat.status FROM muzakki LEFT JOIN bayarzakat USING (no_kk) WHERE status IS NULL');
        return $this->db->resultSet();
    }
    public function getBayar_zakatById($id)
    {
        $this->db->query('SELECT muzakki.no_kk,muzakki.nama, muzakki.jumlah_tanggungan,muzakki.keterangan, bayarzakat.id, bayarzakat.jenis_bayar,bayarzakat.jenis_bayar, bayarzakat.bayar_tanggungan, bayarzakat.bayar_beras, bayarzakat.bayar_uang, bayarzakat.status FROM muzakki LEFT JOIN  bayarzakat USING (no_kk) WHERE bayarzakat.id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    public function tambahDataBayar_zakat($data)
    {
        $no_kk = htmlspecialchars($data['no_kk']);
        $jenis_bayar = htmlspecialchars($data['jenis_bayar']);
        $bayar_tanggungan = htmlspecialchars($data['bayar_tanggungan']);
        $bayar_beras = htmlspecialchars($data['bayar_beras']);
        $bayar_uang = htmlspecialchars($data['bayar_uang']);
        $status = htmlspecialchars($data['status']);
        $query = "INSERT INTO " . $this->table . " values ('',:no_kk, :jenis_bayar, :bayar_tanggungan, :bayar_beras, :bayar_uang, :status)";
        $this->db->query($query);
        $this->db->bind('no_kk', $no_kk);
        $this->db->bind('jenis_bayar', $jenis_bayar);
        $this->db->bind('bayar_tanggungan', $bayar_tanggungan);
        $this->db->bind('bayar_beras', $bayar_beras);
        $this->db->bind('bayar_uang', $bayar_uang);
        $this->db->bind('status', $status);
        $this->db->execute();
        return $this->db->rowCount();
    }


    public function hapusDataBayar_zakat($id)
    {
        $query = "DELETE FROM " . $this->table . " WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function hapusAllDataBayar_zakat()
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
    public function ubahDataBayar_zakat($data)
    {

        $id = $data['id'];
        $no_kk = htmlspecialchars($data['no_kk']);
        $jenis_bayar = htmlspecialchars($data['jenis_bayar']);
        $bayar_tanggungan =  htmlspecialchars($data['bayar_tanggungan']);
        $bayar_beras =  htmlspecialchars($data['bayar_beras']);
        $bayar_uang =  htmlspecialchars($data['bayar_uang']);
        $status =  htmlspecialchars($data['status']);


        $query = "UPDATE " . $this->table . " SET jenis_bayar=:jenis_bayar, bayar_tanggungan=:bayar_tanggungan, bayar_beras=:bayar_beras, bayar_uang=:bayar_uang, status=:status  WHERE id=:id ";
        $this->db->query($query);
        $this->db->bind('id', $id);
        // $this->db->bind('no_kk', $no_kk);
        $this->db->bind('jenis_bayar', $jenis_bayar);
        $this->db->bind('bayar_tanggungan', $bayar_tanggungan);
        $this->db->bind('bayar_beras', $bayar_beras);
        $this->db->bind('bayar_uang', $bayar_uang);
        $this->db->bind('status', $status);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function cariDataBayar_zakat()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM " . $this->table . " WHERE no_kk LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }
    public function getTotalBayar_zakat()
    {
        $this->db->query('SELECT SUM(jumlah_tanggungan) AS jumlah FROM ' . $this->table);
        return $this->db->resultSet();
    }
    public function getTotalMuzakki()
    {
        $this->db->query('SELECT COUNT(*) AS total_muzakki FROM muzakki');
        return $this->db->resultSet();
    }
    public function getJumlah_tanggungan()
    {
        $this->db->query('SELECT SUM(jumlah_tanggungan) AS total_jiwa FROM muzakki');
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
}

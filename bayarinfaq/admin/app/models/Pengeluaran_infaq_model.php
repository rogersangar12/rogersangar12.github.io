<?php
class Pengeluaran_infaq_model
{
    private $table = 'pengeluaraninfaq';
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    //DRIVER PDO (PHP DATA OBJEK)
    //AKAN LEBIH MUDAH JIGA AKAN MENGGANTI DB    
    public function getAll_Pengeluaran_infaq()
    {
        $this->db->query('SELECT*FROM ' . $this->table);
        return $this->db->resultSet();
    }
    public function get_infaqById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    public function tambahDataPengeluaran_infaq($data)
    {
        // var_dump($data);die;
        $no_kk = htmlspecialchars($data['bulan']);
        $jenis_Pengeluaran = htmlspecialchars($data['pengeluaran']);
        $query = "INSERT INTO " . $this->table . " values ('',:bulan, :pengeluaran)";
        $this->db->query($query);
        $this->db->bind('bulan', $no_kk);
        $this->db->bind('pengeluaran', $jenis_Pengeluaran);
        $this->db->execute();
        return $this->db->rowCount();
    }


    public function hapusDataPengeluaran_infaq($id)
    {
        $query = "DELETE FROM " . $this->table . " WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function hapusAllDataPengeluaran_infaq()
    {
        $status = "Sudah Pengeluaran";
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
    public function ubahDataPengeluaran_infaq($data)
    {

        $id = $data['id'];
        $bulan = htmlspecialchars($data['bulan']);
        $pengeluaran = htmlspecialchars($data['pengeluaran']);
        $query = "UPDATE " . $this->table . " SET bulan=:bulan, pengeluaran=:pengeluaran WHERE id=:id ";
        $this->db->query($query);
        $this->db->bind('id', $id);
        // $this->db->bind('no_kk', $no_kk);
        $this->db->bind('bulan', $bulan);
        $this->db->bind('pengeluaran', $pengeluaran);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function cariDataPengeluaran_infaq()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM " . $this->table . " WHERE no_kk LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }
    public function getTotalPengeluaran_infaq()
    {
        $this->db->query('SELECT SUM(pengeluaran) AS jumlah FROM ' . $this->table);
        return $this->db->resultSet();
    }
    public function getTotalPengeluaraninfaq()
    {
        $this->db->query('SELECT COUNT(*) AS total_Pengeluaraninfaq FROM Pengeluaraninfaq');
        return $this->db->resultSet();
    }
    public function getJumlah_tanggungan()
    {
        $this->db->query('SELECT SUM(jumlah_tanggungan) AS total_jiwa FROM Pengeluaraninfaq');
        return $this->db->resultSet();
    }
    public function getTotal_uang()
    {
        $this->db->query('SELECT SUM(Pengeluaran_uang) AS total_uang FROM ' . $this->table);
        return $this->db->resultSet();
    }
    public function getTotal_beras()
    {
        $this->db->query('SELECT SUM(Pengeluaran_beras) AS total_beras FROM ' . $this->table);
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

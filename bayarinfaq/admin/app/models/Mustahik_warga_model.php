<?php
class Mustahik_warga_model
{
    private $table = 'mustahik_warga';
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    //DRIVER PDO (PHP DATA OBJEK)
    //AKAN LEBIH MUDAH JIGA AKAN MENGGANTI DB    
    public function getAllMustahik_warga()
    {
        $this->db->query('SELECT  muzakki.nama, muzakki.no_kk, muzakki.jumlah_tanggungan, mustahik_warga.id, mustahik_warga.kategori, mustahik_warga.hak, mustahik_warga.status FROM muzakki,mustahik_warga WHERE muzakki.no_kk=mustahik_warga.no_kk');
        return $this->db->resultSet();
    }
    public function getAllBelum_Mustahik_warga()
    {
        $this->db->query('SELECT muzakki.id, muzakki.nama, muzakki.no_kk, muzakki.jumlah_tanggungan ,mustahik_warga.status FROM muzakki LEFT JOIN mustahik_warga USING (no_kk) WHERE status IS NULL');
        return $this->db->resultSet();
    }
    public function getMustahik_wargaById($id)
    {
        $this->db->query('SELECT muzakki.no_kk,muzakki.nama, muzakki.jumlah_tanggungan,muzakki.keterangan, mustahik_warga.id, mustahik_warga.kategori,mustahik_warga.hak, mustahik_warga.status FROM muzakki LEFT JOIN  mustahik_warga USING (no_kk) WHERE mustahik_warga.id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    public function tambahDataMustahik_warga($data)
    {
        $no_kk = htmlspecialchars($data['no_kk']);
        $kategori = htmlspecialchars($data['kategori']);
        $hak = htmlspecialchars($data['hak']);
        $status = htmlspecialchars($data['status']);
        $query = "INSERT INTO " . $this->table . " values ('',:no_kk, :kategori, :hak, :status)";
        $this->db->query($query);
        $this->db->bind('no_kk', $no_kk);
        $this->db->bind('kategori', $kategori);
        $this->db->bind('hak', $hak);
        $this->db->bind('status', $status);
        $this->db->execute();
        return $this->db->rowCount();
    }


    public function hapusDataMustahik_warga($id)
    {
        $query = "DELETE FROM " . $this->table . " WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function hapusAllDataMustahik_warga()
    {
        $status = "Sudah Diberikan";
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
    public function ubahDataMustahik_warga($data)
    {

        $id = $data['id'];
        $no_kk = htmlspecialchars($data['no_kk']);
        $kategori = htmlspecialchars($data['kategori']);
        $hak =  htmlspecialchars($data['hak']);
        $status =  htmlspecialchars($data['status']);
        $query = "UPDATE " . $this->table . " SET kategori=:kategori, hak=:hak,status=:status  WHERE id=:id ";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->bind('kategori', $kategori);
        $this->db->bind('hak', $hak);
        $this->db->bind('status', $status);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function cariDataMustahik_warga()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM " . $this->table . " WHERE no_kk LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }
    public function getTotalMustahik_warga()
    {
        $this->db->query('SELECT SUM(jumlah_tanggungan) AS jumlah FROM ' . $this->table);
        return $this->db->resultSet();
    }
    public function getTotalFakir()
    {
        $keyword = "Fakir";
        $query = "SELECT COUNT(kategori) AS total_fakir FROM " . $this->table . " WHERE kategori LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "$keyword");
        return $this->db->single();
    }
    public function getHak_fakir()
    {
        $keyword = "Fakir";
        $query = "SELECT sum(hak) AS hak_fakir FROM " . $this->table . " WHERE kategori LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "$keyword");
        return $this->db->single();
    }
    public function getTotalmiskin()
    {
        $keyword = "Miskin";
        $query = "SELECT COUNT(kategori) AS total_miskin FROM " . $this->table . " WHERE kategori LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "$keyword");
        return $this->db->single();
    }
    public function getHak_miskin()
    {
        $keyword = "Miskin";
        $query = "SELECT sum(hak) AS hak_miskin FROM " . $this->table . " WHERE kategori LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "$keyword");
        return $this->db->single();
    }
    public function getTotalmampu()
    {
        $keyword = "Mampu";
        $query = "SELECT COUNT(kategori) AS total_mampu FROM " . $this->table . " WHERE kategori LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "$keyword");
        return $this->db->single();
    }
    public function getHak_mampu()
    {
        $keyword = "Mampu";
        $query = "SELECT sum(hak) AS hak_mampu FROM " . $this->table . " WHERE kategori LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "$keyword");
        return $this->db->single();
    }
}

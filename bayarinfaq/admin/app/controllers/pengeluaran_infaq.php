<?php
class Pengeluaran_infaq extends Controller
{
    public function index()
    {
        if ($_SESSION["login"] == false) {
            $data['judul'] = 'Login';
            $this->view('templates/header-awal', $data);
            $this->view('login/index', $data);
            $this->view('templates/footer-dashboard');
        } else {
            $data['judul'] = 'Pengeluaran infaq';
            $data['pengeluaran_infaq'] = $this->model('Pengeluaran_infaq_model')->getAll_Pengeluaran_infaq();

            $this->view('templates/header-dashboard', $data);
            $this->view('Pengeluaran_infaq/index', $data);
            $this->view('templates/footer-dashboard');
        }
    }
    public function detailmuzakki($id)
    {

        if ($_SESSION["login"] == false) {
            $data['judul'] = 'Login';
            $this->view('templates/header-awal', $data);
            $this->view('login/index', $data);
            $this->view('templates/footer-dashboard');
        } else {
            $data['judul'] = 'Detail Muzzaki';
            $data['Pengeluaran_infaq'] = $this->model('Muzakki_model')->getMuzakkiById($id);
            // var_dump($data['Pengeluaran_infaq']['no_kk']);
            // die;
            $this->view('templates/header-dashboard', $data);
            $this->view('Pengeluaran_infaq/detail-muzakki', $data);
            $this->view('templates/footer-dashboard');
        }
    }
    public function detail($id)
    {
        if ($_SESSION["login"] == false) {
            $data['judul'] = 'Login';
            $this->view('templates/header-awal', $data);
            $this->view('login/index', $data);
            $this->view('templates/footer-dashboard');
        } else {
            $data['judul'] = 'Detail Muzzaki';
            $data['Pengeluaran_infaq'] = $this->model('Pengeluaran_infaq_model')->getPengeluaran_infaqById($id);

            $this->view('templates/header-dashboard', $data);
            $this->view('Pengeluaran_infaq/detail-Pengeluaraninfaq', $data);
            $this->view('templates/footer-dashboard');
        }
    }
    public function tambah()
    {
        if ($_SESSION["login"] == false) {
            $data['judul'] = 'Login';
            $this->view('templates/header-awal', $data);
            $this->view('login/index', $data);
            $this->view('templates/footer-dashboard');
        } else {
            if ($this->model('Pengeluaran_infaq_model')->tambahDataPengeluaran_infaq($_POST) > 0) {
                Flasher::setFlash('Berhasil', 'ditambahkan', 'success');
                header('Location:' . BASEURL . '/Pengeluaran_infaq');
                exit;
            } else {
                Flasher::setFlash('Gagal', 'ditambahkan', 'danger');
                header('Location:' . BASEURL . '/Pengeluaran_infaq');
                exit;
            }
        }
    }
    public function hapus($id)
    {
        if (!isset($_SESSION["login"])) {
            $data['judul'] = 'Login';
            $this->view('templates/header-awal', $data);
            $this->view('login/index', $data);
            $this->view('templates/footer-dashboard');
        } else {
            if ($this->model('Pengeluaran_infaq_model')->hapusDataPengeluaran_infaq($id) > 0) {
                Flasher::setFlash('Berhasil', 'dihapus', 'success');
                header('Location:' . BASEURL . '/Pengeluaran_infaq/sudah_pengeluaran');
                exit;
            } else {
                Flasher::setFlash('Gagal', 'dihapus', 'danger');
                header('Location:' . BASEURL . '/pengeluaran_infaq/sudah_pengeluaran');
                exit;
            }
        }
    }
    public function hapuspengeluaraninfaq()
    {
        if (!isset($_SESSION["login"])) {
            $data['judul'] = 'Login';
            $this->view('templates/header-awal', $data);
            $this->view('login/index', $data);
            $this->view('templates/footer-dashboard');
        } else {
            if ($this->model('pengeluaran_infaq_model')->hapusAllDatapengeluaran_infaq() > 0) {
                Flasher::setFlash('Berhasil', 'dihapus', 'success');
                header('Location:' . BASEURL . '/pengeluaran_infaq/sudah_pengeluaran');
                exit;
            } else {
                Flasher::setFlash('Gagal', 'dihapus', 'danger');
                header('Location:' . BASEURL . '/pengeluaran_infaq/sudah_pengeluaran');
                exit;
            }
        }
    }
    public function hapusmuzakki($id)
    {
        if (!isset($_SESSION["login"])) {
            $data['judul'] = 'Login';
            $this->view('templates/header-awal', $data);
            $this->view('login/index', $data);
            $this->view('templates/footer-dashboard');
        } else {

            if ($this->model('Muzakki_model')->hapusDataMuzakki($id) > 0) {
                Flasher::setFlash('Berhasil', 'dihapus', 'success');
                header('Location:' . BASEURL . '/pengeluaran_infaq/index');
                exit;
            } else {
                Flasher::setFlash('Gagal', 'dihapus', 'danger');
                header('Location:' . BASEURL . '/pengeluaran_infaq/index');
                exit;
            }
        }
    }
    public function upload($id)
    {
        if ($_SESSION["login"] == false) {
            $data['judul'] = 'Login';
            $this->view('templates/header-awal', $data);
            $this->view('login/index', $data);
            $this->view('templates/footer-dashboard');
        } else {
            $data['judul'] = 'Ubah Data Infaq';
            $data['pengeluaran_infaq'] = $this->model('pengeluaran_infaq_model')->getDataSebelumById($id);
            $this->view('templates/header-dashboard', $data);
            $this->view('pengeluaran_infaq/upload', $data);
            $this->view('templates/footer-dashboard');
        }
    }
    public function ubahpengeluaran_infaq()
    {
        if ($_SESSION["login"] == false) {
            $data['judul'] = 'Login';
            $this->view('templates/header-awal', $data);
            $this->view('login/index', $data);
            $this->view('templates/footer-dashboard');
        } else {
                if ($this->model('pengeluaran_infaq_model')->ubahDatapengeluaran_infaq($_POST) > 0) {
                    Flasher::setFlash('Berhasil', 'diubah', 'success');
                    header('Location:' . BASEURL . '/pengeluaran_infaq/index');
                    exit;
                } else {
                    Flasher::setFlash('Tidak ada ', 'yang diubah', 'warning');
                    header('Location:' . BASEURL . '/pengeluaran_infaq/index');
                    exit;
                }
            }
        }
    
    public function ubah()
    {
        if ($this->model('pengeluaran_infaq_model')->ubahDatapengeluaran_infaq($_POST) > 0) {
            Flasher::setFlash('Berhasil', 'diubah', 'success');
            header('Location:' . BASEURL . '/pengeluaran_infaq/sudah_pengeluaran');
            exit;
        } else {
            Flasher::setFlash('Tidak ada ', 'yang diubah', 'warning');
            header('Location:' . BASEURL . '/pengeluaran_infaq/sudah_pengeluaran');
            exit;
        }
    }
    public function cari()
    {
        if ($_SESSION["login"] == false) {
            $data['judul'] = 'Login';
            $this->view('templates/header-awal', $data);
            $this->view('login/index', $data);
            $this->view('templates/footer-dashboard');
        } else {
            $data['judul'] = 'Daftar pengeluaran_infaq';
            $data['pengeluaran_infaq'] = $this->model('pengeluaran_infaq_model')->cariDatapengeluaran_infaq();
            $this->view('templates/header', $data);
            $this->view('pengeluaran_infaq/index', $data);
            $this->view('templates/footer');
        }
    }

    public function print()
    {
        if (!isset($_SESSION["login"])) {
            $data['judul'] = 'Login';
            $this->view('templates/header-awal', $data);
            $this->view('login/index', $data);
            $this->view('templates/footer-dashboard');
        } else {
            $a = $this->model('pengeluaran_infaq_model')->getTotalMuzakki();
            $total_muzakki = $this->model('pengeluaran_infaq_model')->getTotalMuzakki();
            $total_jiwa = $this->model('pengeluaran_infaq_model')->getJumlah_tanggungan();
            $total_beras = $this->model('pengeluaran_infaq_model')->getTotal_beras();
            $total_uang = $this->model('pengeluaran_infaq_model')->getTotal_uang();
            //total
            $total_muzakki = $total_muzakki[0]["total_muzakki"];
            $total_jiwa = $total_jiwa[0]["total_jiwa"];
            $total_beras = $total_beras[0]["total_beras"];
            $total_uang = $total_uang[0]["total_uang"];
            // var_dump($total_muzakki, $total_jiwa, $total_beras, $total_uang);
            // die;
            Printer::Print1($total_muzakki, $total_jiwa, $total_beras, $total_uang);
        }
    }
}

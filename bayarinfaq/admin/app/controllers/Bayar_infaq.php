<?php
class Bayar_infaq extends Controller
{
    public function index()
    {
        if ($_SESSION["login"] == false) {
            $data['judul'] = 'Login';
            $this->view('templates/header-awal', $data);
            $this->view('login/index', $data);
            $this->view('templates/footer-dashboard');
        } else {
            $data['judul'] = 'Pemasukan infaq';
            $data['bayar_infaq'] = $this->model('Bayar_infaq_model')->getAll_Bayar_infaq();

            $this->view('templates/header-dashboard', $data);
            $this->view('Bayar_infaq/index', $data);
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
            $data['bayar_infaq'] = $this->model('Muzakki_model')->getMuzakkiById($id);
            // var_dump($data['bayar_infaq']['no_kk']);
            // die;
            $this->view('templates/header-dashboard', $data);
            $this->view('bayar_infaq/detail-muzakki', $data);
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
            $data['bayar_infaq'] = $this->model('Bayar_infaq_model')->getBayar_infaqById($id);

            $this->view('templates/header-dashboard', $data);
            $this->view('Bayar_infaq/detail-bayarinfaq', $data);
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
            if ($this->model('Bayar_infaq_model')->tambahDataBayar_infaq($_POST) > 0) {
                Flasher::setFlash('Berhasil', 'ditambahkan', 'success');
                header('Location:' . BASEURL . '/bayar_infaq');
                exit;
            } else {
                Flasher::setFlash('Gagal', 'ditambahkan', 'danger');
                header('Location:' . BASEURL . '/bayar_infaq');
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
            if ($this->model('Bayar_infaq_model')->hapusDataBayar_infaq($id) > 0) {
                Flasher::setFlash('Berhasil', 'dihapus', 'success');
                header('Location:' . BASEURL . '/Bayar_infaq/sudah_bayar');
                exit;
            } else {
                Flasher::setFlash('Gagal', 'dihapus', 'danger');
                header('Location:' . BASEURL . '/Bayar_infaq/sudah_bayar');
                exit;
            }
        }
    }
    public function hapusbayarinfaq()
    {
        if (!isset($_SESSION["login"])) {
            $data['judul'] = 'Login';
            $this->view('templates/header-awal', $data);
            $this->view('login/index', $data);
            $this->view('templates/footer-dashboard');
        } else {
            if ($this->model('Bayar_infaq_model')->hapusAllDataBayar_infaq() > 0) {
                Flasher::setFlash('Berhasil', 'dihapus', 'success');
                header('Location:' . BASEURL . '/Bayar_infaq/sudah_bayar');
                exit;
            } else {
                Flasher::setFlash('Gagal', 'dihapus', 'danger');
                header('Location:' . BASEURL . '/Bayar_infaq/sudah_bayar');
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
                header('Location:' . BASEURL . '/Bayar_infaq/index');
                exit;
            } else {
                Flasher::setFlash('Gagal', 'dihapus', 'danger');
                header('Location:' . BASEURL . '/Bayar_infaq/index');
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
            $data['bayar_infaq'] = $this->model('Bayar_infaq_model')->getDataSebelumById($id);
            $this->view('templates/header-dashboard', $data);
            $this->view('Bayar_infaq/upload', $data);
            $this->view('templates/footer-dashboard');
        }
    }
    public function ubahbayar_infaq()
    {
        if ($_SESSION["login"] == false) {
            $data['judul'] = 'Login';
            $this->view('templates/header-awal', $data);
            $this->view('login/index', $data);
            $this->view('templates/footer-dashboard');
        } else {
            if ($this->model('Bayar_infaq_model')->ubahDataBayar_infaq($_POST) > 0) {
                Flasher::setFlash('Berhasil', 'diubah', 'success');
                header('Location:' . BASEURL . '/Bayar_infaq/index');
                exit;
            } else {
                Flasher::setFlash('Tidak ada ', 'yang diubah', 'warning');
                header('Location:' . BASEURL . '/Bayar_infaq/index');
                exit;
            }
        }
    }

    public function ubah()
    {
        if ($this->model('Bayar_infaq_model')->ubahDataBayar_infaq($_POST) > 0) {
            Flasher::setFlash('Berhasil', 'diubah', 'success');
            header('Location:' . BASEURL . '/Bayar_infaq/sudah_bayar');
            exit;
        } else {
            Flasher::setFlash('Tidak ada ', 'yang diubah', 'warning');
            header('Location:' . BASEURL . '/Bayar_infaq/sudah_bayar');
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
            $data['judul'] = 'Daftar Bayar_infaq';
            $data['bayar_infaq'] = $this->model('Bayar_infaq_model')->cariDataBayar_infaq();
            $this->view('templates/header', $data);
            $this->view('Bayar_infaq/index', $data);
            $this->view('templates/footer');
        }
    }

    public function print()
    {
        if (!isset($_SESSION["login"])) {
            $data['judul'] = 'Login';
            $this->view('templates/header-awal', $data);
            $this->view('login/index', $data);
            $this->view('templates/footer-awal');
        } else {
            $data['bayar_infaq'] = $this->model('Bayar_infaq_model')->getAll_Bayar_infaq();
            $data['pengeluaran_infaq'] = $this->model('Pengeluaran_infaq_model')->getAll_Pengeluaran_infaq();
            $data['total_infaq'] = $this->model('Bayar_infaq_model')->getTotalBayar_infaq();
            $data['total_pengeluaran'] = $this->model('Pengeluaran_infaq_model')->getTotalPengeluaran_infaq();
            // $a = $this->model('Bayar_infaq_model')->getTotalMuzakki();
            // $total_muzakki = $this->model('Bayar_infaq_model')->getTotalMuzakki();
            // $total_jiwa = $this->model('Bayar_infaq_model')->getJumlah_tanggungan();
            // $total_beras = $this->model('Bayar_infaq_model')->getTotal_beras();
            // $total_uang = $this->model('Bayar_infaq_model')->getTotal_uang();
            // //total
            // $total_muzakki = $total_muzakki[0]["total_muzakki"];
            // $total_jiwa = $total_jiwa[0]["total_jiwa"];
            // $total_beras = $total_beras[0]["total_beras"];
            // $total_uang = $total_uang[0]["total_uang"];
            // var_dump($total_muzakki, $total_jiwa, $total_beras, $total_uang);
            // die;
            Printer1::Print1($data);
        }
    }
}

<?php
class Bayar_zakat extends Controller
{
    public function index()
    {
        if ($_SESSION["login"] == false) {
            $data['judul'] = 'Login';
            $this->view('templates/header-awal', $data);
            $this->view('login/index', $data);
            $this->view('templates/footer-dashboard');
        } else {
            $data['judul'] = 'Belum Bayar Zakat';
            $data['bayar_zakat'] = $this->model('Bayar_zakat_model')->getAllBelum_Bayar_zakat();
            $this->view('templates/header-dashboard', $data);
            $this->view('Bayar_zakat/index', $data);
            $this->view('templates/footer-dashboard');
        }
    }
    public function sudah_bayar()
    {
        if ($_SESSION["login"] == false) {
            $data['judul'] = 'Login';
            $this->view('templates/header-awal', $data);
            $this->view('login/index', $data);
            $this->view('templates/footer-dashboard');
        } else {
            $data['judul'] = 'Sudah Bayar Zakat';
            $data['bayar_zakat'] = $this->model('Bayar_zakat_model')->getAllBayar_zakat();
            // var_dump($data['bayar_zakat']);
            // die;
            $this->view('templates/header-dashboard', $data);
            $this->view('Bayar_zakat/sudah-bayar', $data);
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
            $data['bayar_zakat'] = $this->model('Muzakki_model')->getMuzakkiById($id);
            // var_dump($data['bayar_zakat']['no_kk']);
            // die;
            $this->view('templates/header-dashboard', $data);
            $this->view('bayar_zakat/detail-muzakki', $data);
            $this->view('templates/footer-dashboard');
        }
    }
    public function tambahmuzakki()
    {
        if ($_SESSION["login"] == false) {
            $data['judul'] = 'Login';
            $this->view('templates/header-awal', $data);
            $this->view('login/index', $data);
            $this->view('templates/footer-dashboard');
        } else {
            if ($this->model('Muzakki_model')->getDataSebelumByNoKK($_POST) > 0) {
                Flasher::setFlash('Gagal', 'No. KK Sudah Terdaftar', 'danger');
                header('Location:' . BASEURL . '/bayar_zakat');
                exit;
            } else {
                $this->model('Muzakki_model')->tambahDataMuzakki($_POST);
                Flasher::setFlash('Berhasil', 'ditambahkan', 'success');
                header('Location:' . BASEURL . '/bayar_zakat');
                exit;
            }
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
            $data['bayar_zakat'] = $this->model('Bayar_zakat_model')->getBayar_zakatById($id);

            $this->view('templates/header-dashboard', $data);
            $this->view('Bayar_zakat/detail-bayarzakat', $data);
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
            if ($this->model('Bayar_zakat_model')->tambahDataBayar_zakat($_POST) > 0) {
                Flasher::setFlash('Berhasil', 'ditambahkan', 'success');
                header('Location:' . BASEURL . '/bayar_zakat');
                exit;
            } else {
                Flasher::setFlash('Gagal', 'ditambahkan', 'danger');
                header('Location:' . BASEURL . '/bayar_zakat');
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
            if ($this->model('Bayar_zakat_model')->hapusDataBayar_zakat($id) > 0) {
                Flasher::setFlash('Berhasil', 'dihapus', 'success');
                header('Location:' . BASEURL . '/Bayar_zakat/sudah_bayar');
                exit;
            } else {
                Flasher::setFlash('Gagal', 'dihapus', 'danger');
                header('Location:' . BASEURL . '/Bayar_zakat/sudah_bayar');
                exit;
            }
        }
    }
    public function hapusbayarzakat()
    {
        if (!isset($_SESSION["login"])) {
            $data['judul'] = 'Login';
            $this->view('templates/header-awal', $data);
            $this->view('login/index', $data);
            $this->view('templates/footer-dashboard');
        } else {
            if ($this->model('Bayar_zakat_model')->hapusAllDataBayar_zakat() > 0) {
                Flasher::setFlash('Berhasil', 'dihapus', 'success');
                header('Location:' . BASEURL . '/Bayar_zakat/sudah_bayar');
                exit;
            } else {
                Flasher::setFlash('Gagal', 'dihapus', 'danger');
                header('Location:' . BASEURL . '/Bayar_zakat/sudah_bayar');
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
                header('Location:' . BASEURL . '/Bayar_zakat/index');
                exit;
            } else {
                Flasher::setFlash('Gagal', 'dihapus', 'danger');
                header('Location:' . BASEURL . '/Bayar_zakat/index');
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
            $data['judul'] = 'Ubah Data Muzakki';
            $data['bayar_zakat'] = $this->model('Muzakki_model')->getDataSebelumById($id);
            $this->view('templates/header-dashboard', $data);
            $this->view('Bayar_zakat/upload', $data);
            $this->view('templates/footer-dashboard');
        }
    }
    public function ubahmuzakki()
    {
        if ($_SESSION["login"] == false) {
            $data['judul'] = 'Login';
            $this->view('templates/header-awal', $data);
            $this->view('login/index', $data);
            $this->view('templates/footer-dashboard');
        } else {
            if ($this->model('Muzakki_model')->checkingubahdata($_POST) > 0) {
                Flasher::setFlash('Gagal', 'No. KK Sudah Terdaftar', 'danger');
                header('Location:' . BASEURL . '/bayar_zakat');
                exit;
            } else {
                if ($this->model('Muzakki_model')->ubahDataMuzakki($_POST) > 0) {
                    Flasher::setFlash('Berhasil', 'diubah', 'success');
                    header('Location:' . BASEURL . '/Bayar_zakat/index');
                    exit;
                } else {
                    Flasher::setFlash('Tidak ada ', 'yang diubah', 'warning');
                    header('Location:' . BASEURL . '/Bayar_zakat/index');
                    exit;
                }
            }
        }
    }
    public function ubah()
    {
        if ($this->model('Bayar_zakat_model')->ubahDataBayar_zakat($_POST) > 0) {
            Flasher::setFlash('Berhasil', 'diubah', 'success');
            header('Location:' . BASEURL . '/Bayar_zakat/sudah_bayar');
            exit;
        } else {
            Flasher::setFlash('Tidak ada ', 'yang diubah', 'warning');
            header('Location:' . BASEURL . '/Bayar_zakat/sudah_bayar');
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
            $data['judul'] = 'Daftar Bayar_zakat';
            $data['bayar_zakat'] = $this->model('Bayar_zakat_model')->cariDataBayar_zakat();
            $this->view('templates/header', $data);
            $this->view('Bayar_zakat/index', $data);
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
            $a = $this->model('Bayar_zakat_model')->getTotalMuzakki();
            $total_muzakki = $this->model('Bayar_zakat_model')->getTotalMuzakki();
            $total_jiwa = $this->model('Bayar_zakat_model')->getJumlah_tanggungan();
            $total_beras = $this->model('Bayar_zakat_model')->getTotal_beras();
            $total_uang = $this->model('Bayar_zakat_model')->getTotal_uang();
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

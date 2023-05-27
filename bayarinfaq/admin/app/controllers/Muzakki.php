<?php
class Muzakki extends Controller
{
    public function index()
    {
        if ($_SESSION["login"] == false) {
            $data['judul'] = 'Login';
            $this->view('templates/header-awal', $data);
            $this->view('login/index', $data);
            $this->view('templates/footer-dashboard');
        } else {
            $data['judul'] = ' Muzakki';
            $data['muzakki'] = $this->model('Muzakki_model')->getAllMuzakki();
            $this->view('templates/header-dashboard', $data);
            $this->view('Muzakki/index', $data);
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
            $data['judul'] = 'More Detail Muzzaki';
            $data['muzakki'] = $this->model('Muzakki_model')->getMuzakkiById($id);

            $this->view('templates/header-dashboard', $data);
            $this->view('muzakki/detail', $data);
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
            if ($this->model('Muzakki_model')->getDataSebelumByNoKK($_POST) > 0) {
                Flasher::setFlash('Gagal', 'No. KK Sudah Terdaftar', 'danger');
                header('Location:' . BASEURL . '/Muzakki');
                exit;
            } else {
                $this->model('Muzakki_model')->tambahDataMuzakki($_POST);
                Flasher::setFlash('Berhasil', 'ditambahkan', 'success');
                header('Location:' . BASEURL . '/Muzakki');
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
            if ($this->model('Muzakki_model')->hapusDataMuzakki($id) > 0) {
                Flasher::setFlash('Berhasil', 'dihapus', 'success');
                header('Location:' . BASEURL . '/muzakki/index');
                exit;
            } else {
                Flasher::setFlash('Gagal', 'dihapus', 'danger');
                header('Location:' . BASEURL . 'muzakki/index');
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
            $data['muzakki'] = $this->model('Muzakki_model')->getDataSebelumById($id);
            $this->view('templates/header-dashboard', $data);
            $this->view('Muzakki/upload', $data);
            $this->view('templates/footer-dashboard');
        }
    }
    public function ubah()
    {
        if ($_SESSION["login"] == false) {
            $data['judul'] = 'Login';
            $this->view('templates/header-awal', $data);
            $this->view('login/index', $data);
            $this->view('templates/footer-dashboard');
        } else {
            if ($this->model('Muzakki_model')->ubahDataMuzakki($_POST) > 0) {
                Flasher::setFlash('Berhasil', 'diubah', 'success');
                header('Location:' . BASEURL . '/Muzakki/index');
                exit;
            } else {
                Flasher::setFlash('Tidak ada ', 'yang diubah', 'warning');
                header('Location:' . BASEURL . '/Muzakki/index');
                exit;
            }
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
            $data['judul'] = 'Daftar Muzakki';
            $data['kdn'] = $this->model('Muzakki_model')->cariDataMuzakki();
            $this->view('templates/header', $data);
            $this->view('Muzakki/index', $data);
            $this->view('templates/footer');
        }
    }
}

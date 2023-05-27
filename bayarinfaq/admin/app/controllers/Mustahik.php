<?php
class Mustahik extends Controller
{
    public function index()
    {
        if (!isset($_SESSION["login"])) {
            $data['judul'] = 'Login';
            $this->view('templates/header-awal', $data);
            $this->view('login/index', $data);
            $this->view('templates/footer-dashboard');
        } else {
            $data['judul'] = 'Detail Mustahik';
            $data['mustahik'] = $this->model('Mustahik_model')->getAllMustahik();
            $this->view('templates/header-dashboard', $data);
            $this->view('Mustahik/index', $data);
            $this->view('templates/footer-dashboard');
        }
    }
    public function detail($id)
    {
        if (!isset($_SESSION["login"])) {
            $data['judul'] = 'Login';
            $this->view('templates/header-awal', $data);
            $this->view('login/index', $data);
            $this->view('templates/footer-dashboard');
        } else {
            $data['judul'] = 'More Detail Muzzaki';
            $data['mustahik'] = $this->model('Mustahik_model')->getMustahikById($id);

            $this->view('templates/header-dashboard', $data);
            $this->view('Mustahik/detail', $data);
            $this->view('templates/footer-dashboard');
        }
    }
    public function tambah()
    {
        if (!isset($_SESSION["login"])) {
            $data['judul'] = 'Login';
            $this->view('templates/header-awal', $data);
            $this->view('login/index', $data);
            $this->view('templates/footer-dashboard');
        } else {
            if ($this->model('Mustahik_model')->tambahDataMustahik($_POST) > 0) {
                Flasher::setFlash('Berhasil', 'ditambahkan', 'success');
                header('Location:' . BASEURL . '/Mustahik');
                exit;
            } else {
                Flasher::setFlash('Gagal', 'ditambahkan', 'danger');
                header('Location:' . BASEURL . '/Mustahik');
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
            if ($this->model('Mustahik_model')->hapusDataMustahik($id) > 0) {
                Flasher::setFlash('Berhasil', 'dihapus', 'success');
                header('Location:' . BASEURL . '/Mustahik/index');
                exit;
            } else {
                Flasher::setFlash('Gagal', 'dihapus', 'danger');
                header('Location:' . BASEURL . 'Mustahik/index');
                exit;
            }
        }
    }
    public function upload($id)
    {
        if (!isset($_SESSION["login"])) {
            $data['judul'] = 'Login';
            $this->view('templates/header-awal', $data);
            $this->view('login/index', $data);
            $this->view('templates/footer-dashboard');
        } else {
            $data['judul'] = 'Ubah Data Mustahik';
            $data['mustahik'] = $this->model('Mustahik_model')->getDataSebelumById($id);
            $this->view('templates/header-dashboard', $data);
            $this->view('Mustahik/upload', $data);
            $this->view('templates/footer-dashboard');
        }
    }
    public function ubah()
    {
        if (!isset($_SESSION["login"])) {
            $data['judul'] = 'Login';
            $this->view('templates/header-awal', $data);
            $this->view('login/index', $data);
            $this->view('templates/footer-dashboard');
        } else {
            if ($this->model('Mustahik_model')->ubahDataMustahik($_POST) > 0) {
                Flasher::setFlash('Berhasil', 'diubah', 'success');
                header('Location:' . BASEURL . '/Mustahik/index');
                exit;
            } else {
                Flasher::setFlash('Tidak ada ', 'yang diubah', 'warning');
                header('Location:' . BASEURL . '/Mustahik/index');
                exit;
            }
        }
    }
    public function cari()
    {
        if (!isset($_SESSION["login"])) {
            $data['judul'] = 'Login';
            $this->view('templates/header-awal', $data);
            $this->view('login/index', $data);
            $this->view('templates/footer-dashboard');
        } else {
            $data['judul'] = 'Daftar Mustahik';
            $data['mustahik'] = $this->model('Mustahik_model')->cariDataMustahik();
            $this->view('templates/header-dashboard', $data);
            $this->view('Mustahik/index', $data);
            $this->view('templates/footer-dashboard');
        }
    }
}

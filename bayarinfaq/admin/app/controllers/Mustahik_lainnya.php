<?php
class Mustahik_lainnya extends Controller
{
    public function index()
    {
        if (!isset($_SESSION["login"])) {
            $data['judul'] = 'Login';
            $this->view('templates/header-awal', $data);
            $this->view('login/index', $data);
            $this->view('templates/footer-dashboard');
        } else {
            $data['judul'] = ' Mustahik Lainnya';
            $data['mustahik_lainnya'] = $this->model('Mustahik_lainnya_model')->getBelum_Mustahik_lainnya();
            $this->view('templates/header-dashboard', $data);
            $this->view('Mustahik_lainnya/index', $data);
            $this->view('templates/footer-dashboard');
        }
    }
    public function sudah_diberikan()
    {
        if (!isset($_SESSION["login"])) {
            $data['judul'] = 'Login';
            $this->view('templates/header-awal', $data);
            $this->view('login/index', $data);
            $this->view('templates/footer-dashboard');
        } else {
            $data['judul'] = ' Mustahik Lainnya';
            $data['mustahik_lainnya'] = $this->model('Mustahik_lainnya_model')->getSudah_Mustahik_lainnya();
            $this->view('templates/header-dashboard', $data);
            $this->view('Mustahik_lainnya/sudah-diberikan', $data);
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
            $data['judul'] = 'Detail Mustahik Lainnya';
            $data['mustahik_lainnya'] = $this->model('Mustahik_lainnya_model')->getMustahik_lainnyaById($id);

            $this->view('templates/header-dashboard', $data);
            $this->view('Mustahik_lainnya/detail-mustahik-lainnya', $data);
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
            if ($this->model('Mustahik_lainnya_model')->tambahDataMustahik_lainnya($_POST) > 0) {
                Flasher::setFlash('Berhasil', 'ditambahkan', 'success');
                header('Location:' . BASEURL . '/Mustahik_lainnya');
                exit;
            } else {
                Flasher::setFlash('Gagal', 'ditambahkan', 'danger');
                header('Location:' . BASEURL . '/Mustahik_lainnya');
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
            if ($this->model('Mustahik_lainnya_model')->hapusDataMustahik_lainnya($id) > 0) {
                Flasher::setFlash('Berhasil', 'dihapus', 'success');
                header('Location:' . BASEURL . '/Mustahik_lainnya/index');
                exit;
            } else {
                Flasher::setFlash('Gagal', 'dihapus', 'danger');
                header('Location:' . BASEURL . 'Mustahik_lainnya/index');
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
            $data['judul'] = 'Ubah Data Mustahik_lainnya';
            $data['mustahik_lainnya'] = $this->model('Mustahik_lainnya_model')->getDataSebelumById($id);
            $this->view('templates/header-dashboard', $data);
            $this->view('Mustahik_lainnya/upload', $data);
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
            if ($this->model('Mustahik_lainnya_model')->ubahDataMustahik_lainnya($_POST) > 0) {
                Flasher::setFlash('Berhasil', 'diubah', 'success');
                header('Location:' . BASEURL . '/Mustahik_lainnya/index');
                exit;
            } else {
                Flasher::setFlash('Tidak ada ', 'yang diubah', 'warning');
                header('Location:' . BASEURL . '/Mustahik_lainnya/index');
                exit;
            }
        }
    }
    public function berikan()
    {
        if (!isset($_SESSION["login"])) {
            $data['judul'] = 'Login';
            $this->view('templates/header-awal', $data);
            $this->view('login/index', $data);
            $this->view('templates/footer-dashboard');
        } else {
            if ($this->model('Mustahik_lainnya_model')->ubahDataMustahik_lainnya($_POST) > 0) {
                Flasher::setFlash('Berhasil', 'diberikan', 'success');
                header('Location:' . BASEURL . '/Mustahik_lainnya/index');
                exit;
            } else {
                Flasher::setFlash('Gagal ', 'Diberikan', 'danger');
                header('Location:' . BASEURL . '/Mustahik_lainnya/index');
                exit;
            }
        }
    }
    public function hapussudah()
    {
        if (!isset($_SESSION["login"])) {
            $data['judul'] = 'Login';
            $this->view('templates/header-awal', $data);
            $this->view('login/index', $data);
            $this->view('templates/footer-dashboard');
        } else {
            if ($this->model('Mustahik_lainnya_model')->ubahDataMustahik_lainnya($_POST) > 0) {
                Flasher::setFlash('Berhasil', 'dihapus', 'success');
                header('Location:' . BASEURL . '/Mustahik_lainnya/sudah_diberikan');
                exit;
            } else {
                Flasher::setFlash('Gagal ', 'Diberikan', 'danger');
                header('Location:' . BASEURL . '/Mustahik_lainnya/sudah_diberikan');
                exit;
            }
        }
    }
    public function refresh()
    {
        if (!isset($_SESSION["login"])) {
            $data['judul'] = 'Login';
            $this->view('templates/header-awal', $data);
            $this->view('login/index', $data);
            $this->view('templates/footer-dashboard');
        } else {
            if ($this->model('Mustahik_lainnya_model')->refreshDataMustahik_lainnya($_POST) > 0) {
                Flasher::setFlash('Berhasil', 'dihapus', 'success');
                header('Location:' . BASEURL . '/Mustahik_lainnya/sudah_diberikan');
                exit;
            } else {
                Flasher::setFlash('Gagal ', 'Diberikan', 'danger');
                header('Location:' . BASEURL . '/Mustahik_lainnya/sudah_diberikan');
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
            $data['judul'] = 'Daftar Mustahik_lainnya';
            $data['mustahik_lainnya'] = $this->model('Mustahik_lainnya_model')->cariDataMustahik_lainnya();
            $this->view('templates/header-dashboard', $data);
            $this->view('Mustahik_lainnya/index', $data);
            $this->view('templates/footer-dashboard');
        }
    }
}

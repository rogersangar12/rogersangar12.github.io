<?php
class Mustahik_warga extends Controller
{
    public function index()
    {
        if ($_SESSION["login"] == false) {
            $data['judul'] = 'Login';
            $this->view('templates/header-awal', $data);
            $this->view('login/index', $data);
            $this->view('templates/footer-dashboard');
        } else {
            $data['judul'] = 'Zakat Belum Diberikan';
            $data['mustahik_warga'] = $this->model('Mustahik_warga_model')->getAllBelum_Mustahik_warga();
            // var_dump($data['mustahik_warga']);
            // die;
            $this->view('templates/header-dashboard', $data);
            $this->view('Mustahik_warga/index', $data);
            $this->view('templates/footer-dashboard');
        }
    }
    public function sudah_diberikan()
    {
        if ($_SESSION["login"] == false) {
            $data['judul'] = 'Login';
            $this->view('templates/header-awal', $data);
            $this->view('login/index', $data);
            $this->view('templates/footer-dashboard');
        } else {
            $data['judul'] = 'Sudah Diberikan';
            $data['mustahik_warga'] = $this->model('Mustahik_warga_model')->getAllMustahik_warga();
            // var_dump($data['mustahik_warga']);
            // die;
            $this->view('templates/header-dashboard', $data);
            $this->view('Mustahik_warga/sudah-diberikan', $data);
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
            $data['mustahik_warga'] = $this->model('Muzakki_model')->getMuzakkiById($id);
            // var_dump($data['mustahik_warga']['no_kk']);
            // die;
            $this->view('templates/header-dashboard', $data);
            $this->view('Mustahik_warga/detail-muzakki', $data);
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
                header('Location:' . BASEURL . '/Mustahik_warga');
                exit;
            } else {
                $this->model('Muzakki_model')->tambahDataMuzakki($_POST);
                Flasher::setFlash('Berhasil', 'ditambahkan', 'success');
                header('Location:' . BASEURL . '/Mustahik_warga');
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
            $data['judul'] = 'Detail Mustahik';
            $data['mustahik_warga'] = $this->model('Mustahik_warga_model')->getMustahik_wargaById($id);
            $this->view('templates/header-dashboard', $data);
            $this->view('Mustahik_warga/detail-mustahik-warga', $data);
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
            if ($this->model('Mustahik_warga_model')->tambahDataMustahik_warga($_POST) > 0) {
                Flasher::setFlash('Berhasil', 'ditambahkan', 'success');
                header('Location:' . BASEURL . '/Mustahik_warga');
                exit;
            } else {
                Flasher::setFlash('Gagal', 'ditambahkan', 'danger');
                header('Location:' . BASEURL . '/Mustahik_warga');
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
            if ($this->model('Mustahik_warga_model')->hapusDataMustahik_warga($id) > 0) {
                Flasher::setFlash('Berhasil', 'dihapus', 'success');
                header('Location:' . BASEURL . '/Mustahik_warga/sudah_diberikan');
                exit;
            } else {
                Flasher::setFlash('Gagal', 'dihapus', 'danger');
                header('Location:' . BASEURL . '/Mustahik_warga/sudah_diberikan');
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
            if ($this->model('Mustahik_warga_model')->hapusAllDataMustahik_warga() > 0) {
                Flasher::setFlash('Berhasil', 'dihapus', 'success');
                header('Location:' . BASEURL . '/Mustahik_warga/sudah_diberikan');
                exit;
            } else {
                Flasher::setFlash('Gagal', 'dihapus', 'danger');
                header('Location:' . BASEURL . '/Mustahik_warga/sudah_diberikan');
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
                header('Location:' . BASEURL . '/Mustahik_warga/index');
                exit;
            } else {
                Flasher::setFlash('Gagal', 'dihapus', 'danger');
                header('Location:' . BASEURL . '/Mustahik_warga/index');
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
            $data['mustahik_warga'] = $this->model('Muzakki_model')->getDataSebelumById($id);
            $this->view('templates/header-dashboard', $data);
            $this->view('Mustahik_warga/upload', $data);
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
                header('Location:' . BASEURL . '/Mustahik_warga');
                exit;
            } else {
                if ($this->model('Muzakki_model')->ubahDataMuzakki($_POST) > 0) {
                    Flasher::setFlash('Berhasil', 'diubah', 'success');
                    header('Location:' . BASEURL . '/Mustahik_warga/index');
                    exit;
                } else {
                    Flasher::setFlash('Tidak ada ', 'yang diubah', 'warning');
                    header('Location:' . BASEURL . '/Mustahik_warga/index');
                    exit;
                }
            }
        }
    }
    public function ubah()
    {
        if ($this->model('Mustahik_warga_model')->ubahDataMustahik_warga($_POST) > 0) {
            Flasher::setFlash('Berhasil', 'diubah', 'success');
            header('Location:' . BASEURL . '/Mustahik_warga/sudah_diberikan');
            exit;
        } else {
            Flasher::setFlash('Tidak ada ', 'yang diubah', 'warning');
            header('Location:' . BASEURL . '/Mustahik_warga/sudah_diberikan');
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
            $data['judul'] = 'Daftar Mustahik_warga';
            $data['mustahik_warga'] = $this->model('Mustahik_warga_model')->cariDataMustahik_warga();
            $this->view('templates/header', $data);
            $this->view('Mustahik_warga/index', $data);
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
            //fakir
            $data['mustahik_warga']['fakir'] = [
                'kategori' => 'Fakir',
                'total_fakir' => $this->model('Mustahik_warga_model')->getTotalfakir(),
                'hak_fakir' => $this->model('Mustahik_warga_model')->getHak_fakir(),
            ];
            $data['mustahik_warga']['miskin'] = [
                'kategori' => 'Miskin',
                'total_miskin' => $this->model('Mustahik_warga_model')->getTotalmiskin(),
                'hak_miskin' => $this->model('Mustahik_warga_model')->getHak_miskin(),
            ];
            $data['mustahik_warga']['mampu'] = [
                'kategori' => 'Mampu',
                'total_mampu' => $this->model('Mustahik_warga_model')->getTotalmampu(),
                'hak_mampu' => $this->model('Mustahik_warga_model')->getHak_mampu(),
            ];
            $data['mustahik_lainnya']['amilin'] = [
                'kategori' => 'Amilin',
                'total_amilin' => $this->model('Mustahik_lainnya_model')->getTotalamilin(),
                'hak_amilin' => $this->model('Mustahik_lainnya_model')->getHak_amilin(),
            ];
            $data['mustahik_lainnya']['fisabilillah'] = [
                'kategori' => 'Fisabilillah',
                'total_fisabilillah' => $this->model('Mustahik_lainnya_model')->getTotalfisabilillah(),
                'hak_fisabilillah' => $this->model('Mustahik_lainnya_model')->getHak_fisabilillah(),
            ];
            $data['mustahik_lainnya']['mualaf'] = [
                'kategori' => 'Mualaf',
                'total_mualaf' => $this->model('Mustahik_lainnya_model')->getTotalmualaf(),
                'hak_mualaf' => $this->model('Mustahik_lainnya_model')->getHak_mualaf(),
            ];
            $data['mustahik_lainnya']['ibnu_sabil'] = [
                'kategori' => 'Ibnu Sabil',
                'total_ibnu_sabil' => $this->model('Mustahik_lainnya_model')->getTotalibnu_sabil(),
                'hak_ibnu_sabil' => $this->model('Mustahik_lainnya_model')->getHak_ibnu_sabil(),
            ];

            // var_dump($data["mustahik_lainnya"]['amilin']['hak_amilin']['hak_amilin']);
            // die;
            Printer::Print2($data);
        }
    }
}

<?php
class Register extends Controller
{
    public function index()
    {
        $data['judul'] = 'Register';
        // $data['user'] = $this->model('Registrasi_model')->getAllDataUser();
        $this->view('templates/header-awal', $data);
        $this->view('register/index', $data);
        $this->view('templates/footer-dashboard');
    }
    public function tambah()
    {
        // var_dump($_POST);die;
        if ($_POST['password'] !== $_POST['password2']) {
            Flasher::setFlash('Gagal', 'ditambahkan konfirmasi password tidak sesuai', 'danger');
            header('Location:' . BASEURL . '/register');
            exit;
        }
        if ($this->model('Admin_model')->checkingDataAdmin($_POST) > 0) {
            Flasher::setFlash('Gagal', 'ditambahkan username sudah terdaptar', 'danger');
            header('Location:' . BASEURL . '/register');
            exit;
        }
        if ($this->model('Admin_model')->tambahDataAdmin($_POST) > 0) {
            header('Location:' . BASEURL . '/login');
            Flasher::setFlash('Berhasil ', 'di tambahkan silahkan Log in', 'success');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'ditambahkan silahkan registrasi', 'danger');
            header('Location:' . BASEURL . '/registrasi');
            exit;
        }
    }
}

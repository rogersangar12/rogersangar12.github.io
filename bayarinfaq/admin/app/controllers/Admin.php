<?php
class Admin extends Controller{
    public function index(){
        $data['judul'] = 'Admin';
        $data['admin'] = $this->model('Admin_model')->getAllDataAdmin();
        $this->view('templates/header', $data);
        $this->view('admin/index', $data);
        $this->view('templates/footer');
    }
    public function detail($id){
        $data['judul'] = 'Detail Admin';
        $data['admin'] = $this->model('Admin_model')->getAdminById($id);
        $this->view('templates/header', $data);
        $this->view('admin/detail', $data);
        $this->view('templates/footer');
    }
    public function tambah(){
 
        if ($_POST['password']!== $_POST['password2']){
            Flasher::setFlash('Gagal','konfirmasi password tidak sesuai','danger');
            header('Location:'. BASEURL. '/admin');
            exit;
        }
        if($this->model('Admin_model')->checkingDataAdmin($_POST) > 0){
            Flasher::setFlash('Gagal','ditambahkan username sudah terdaptar','danger');
            header('Location:'. BASEURL. '/admin');
            exit;
        }
        if($this->model('Admin_model')->tambahDataAdmin($_POST) > 0){
            Flasher::setFlash('Berhasil','berhasil registrasi Silahkan login','success');
            header('Location:'. BASEURL. '/admin');
            exit;
        }else{
            Flasher::setFlash('Gagal','ditambahkan','danger');
            header('Location:'. BASEURL. '/admin');
            exit;
        }
    }
    public function hapus($id){
        if($this->model('Admin_model')->hapusDataAdmin($id) > 0){
            Flasher::setFlash('Berhasil','dihapus','success');
            header('Location:'. BASEURL. '/admin');
            exit;
        }else{
            Flasher::setFlash('Gagal','dihapus','danger');
            header('Location:'. BASEURL. '/admin');
            exit;
        }
    }
    public function cari(){
        $data['judul'] = 'Daftar Admin';
        $data['admin'] = $this->model('Admin_model')->cariDataAdmin();
        $this->view('templates/header', $data);
        $this->view('admin/index', $data);
        $this->view('templates/footer');
    }
    public function upload($id){
        $data['judul'] = 'Ubah Data Admin';
        $data['admin'] = $this->model('Admin_model')->getDataSebelumById($id);
        $this->view('templates/header', $data);
        $this->view('admin/upload', $data);
        $this->view('templates/footer');
    }
    public function ubah(){
    if($this->model('Admin_model')->UbahDataAdmin($_POST) > 0){
        Flasher::setFlash('Berhasil','diubah','success');
        header('Location:'. BASEURL. '/admin');
        exit;
    }else{
        Flasher::setFlash('Tidak ada ','yang diubah','warning');
        header('Location:'. BASEURL. '/admin');
        exit;
        }
    }
}
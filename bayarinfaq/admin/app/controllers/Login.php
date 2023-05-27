<?php
class Login extends Controller
{
    public $session;
    public function session()
    {
        $this->session = session_start();
    }

    public function index()
    {
        // die;
        if (!isset($_SESSION["login"])) {
            $data['judul'] = 'Login';
            $this->view('templates/header', $data);
            $this->view('login/index', $data);
            $this->view('templates/footer');
        } else {
            $data['judul'] = 'Dashboard';
            $data['jml'] = $this->model('Bayar_infaq_model')->getTotalBayar_infaq();
            $data['jml1'] = $this->model('Pengeluaran_infaq_model')->getTotalPengeluaran_infaq();
            $data['pemasukan'] = $data['jml'][0]['jumlah'];
            $data['pengeluaran'] = $data['jml1'][0]['jumlah'];
            $this->view('templates/header-dashboard', $data);
            $this->view('dashboard/index', $data);
            $this->view('templates/footer-dashboard');
        }
    }
    public function logout()
    {
        session_unset();
        session_destroy();
        $data['judul'] = 'Login';
        $this->view('templates/header-awal', $data);
        $this->view('login/index', $data);
        $this->view('templates/footer-dashboard');
    }

    public function checking()
    {

        if ($this->model('Login_model')->checkingLoginUser($_POST) === 1) {
            $_POST['validasi'] = ($this->model('Login_model')->checkingPasswordUser($_POST));
            if (password_verify($_POST['password'], $_POST['validasi']['password'])) {
                $_SESSION['login'] = true;
                header('Location:' . BASEURL . '/dashboard');
                Flasher::setFlash('login berhasil', ' Selamat Datang', 'success');
                exit;
            } else {
                header('Location:' . BASEURL . '/login');
                Flasher::setFlash('Gagal', 'password yang dimasukan salah', 'danger');
                exit;
            }
        } else {
            Flasher::setFlash('Gagal', 'login username yang dimasukan salah', 'danger');
            header('Location:' . BASEURL . '/login');
            exit;
        }
    }
}

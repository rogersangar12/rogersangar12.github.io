<?php
class Home extends Controller
{
    public function index()
    {
        if (!isset($_SESSION["login"])) {
            $data['judul'] = 'Home';
            $this->view('templates/header-awal', $data);
            $this->view('home/index', $data);
            $this->view('templates/footer-awal', $data);
        } else {
            $data['judul'] = 'Dashboard';
            $data['jml'] = $this->model('Bayar_infaq_model')->getTotalBayar_infaq();
            $data['jml1'] = $this->model('Pengeluaran_infaq_model')->getTotalPengeluaran_infaq();
            $data['pemasukan'] = $data['jml'][0]['jumlah'];
            $data['pengeluaran'] = $data['jml1'][0]['jumlah'];
            $this->view('templates/header-dashboard', $data);
            $this->view('dashboard/index', $data);
            $this->view('templates/footer-dashboard', $data);
        }
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MahasiswaController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('NewsModel'));
        $this->load->helper(array('DataStructure', 'Validation'));
    }

    public function index()
    {
        $this->SecurityModel->rolesOnlyGuard(array('admin', 'mahasiswa'));
        // var_dump($this->session->userdata());
        $pageData = array(
            'title' => 'Beranda',
            'content' => 'mahasiswa/DashboardPage',
            'breadcrumb' => array(
                'Home' => base_url(),
            ),
        );
        $this->load->view('Page', $pageData);
    }

    public function data_skripsi()
    {
        $this->SecurityModel->rolesOnlyGuard(array('admin', 'mahasiswa', 'kemahasiswaan'));
        // var_dump($this->session->userdata());
        $pageData = array(
            'title' => 'Data Skripsi',
            'content' => 'mahasiswa/DataSkripsi',
            'breadcrumb' => array(
                'Home' => base_url(),
            ),
        );
        $this->load->view('Page', $pageData);
    }
    public function data_jurnal()
    {
        $this->SecurityModel->rolesOnlyGuard(array('admin', 'mahasiswa', 'kemahasiswaan'));
        // var_dump($this->session->userdata());
        $pageData = array(
            'title' => 'Data Jurnal',
            'content' => 'mahasiswa/DataJurnal',
            'breadcrumb' => array(
                'Home' => base_url(),
            ),
        );
        $this->load->view('Page', $pageData);
    }

}

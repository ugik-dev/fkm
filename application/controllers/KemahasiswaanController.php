<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KemahasiswaanController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('NewsModel'));
        $this->load->helper(array('DataStructure', 'Validation'));
    }

    public function index()
    {
        $this->SecurityModel->rolesOnlyGuard(array('admin', 'kemahasiswaan'));
        $pageData = array(
            'title' => 'Beranda',
            'content' => 'admin/KelolahMahasiswaAlumni',
            'breadcrumb' => array(
                'Home' => base_url(),
            ),
        );
        $this->load->view('Page', $pageData);
    }
}

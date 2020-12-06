<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminController extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model(array('NewsModel','GaleryModel','UserModel'));
    $this->load->helper(array('DataStructure', 'Validation'));
  }

  public function index()
  {
    $this->SecurityModel->rolesOnlyGuard(array('admin', 'kpb'));
    $pageData = array(
      'title' => 'Beranda',
      'content' => 'admin/KelolaUserPage',
      'breadcrumb' => array(
        'Home' => base_url(),
      ),
    );
    $this->load->view('Page', $pageData);
  }

  public function  DetailMahasiswa()
  {
    $this->SecurityModel->rolesOnlyGuard(array('admin','kemahasiswaan'));
    $this->input->get()['nim'];
    $pageData = array(
      'title' => 'Data Skripsi',
      'content' => 'admin/DataSkripsi',
      'breadcrumb' => array(
        'Home' => base_url(),
      ),
      "contentData" => ['nim' => $this->input->get()['nim']]
    );
    $this->load->view('Page', $pageData);
  }

  public function  DetailJurnalMahasiswa()
  {
    $this->SecurityModel->rolesOnlyGuard(array('admin','kemahasiswaan'));
    $id = $this->UserModel->getUserByUsername($this->input->get()['nim'])['id_user'];
    // var_dump($id);
    // $this->input->get()['id'];
    $pageData = array(
      'title' => 'Data Jurnal',
      'content' => 'admin/DataJurnal',
      'breadcrumb' => array(
        'Home' => base_url(),
      ),
      "contentData" => ['id_mahasiswaalumni' => $id]
    );
    $this->load->view('Page', $pageData);
  }

  // public function  request_seller()
  // {
  //   $this->SecurityModel->rolesOnlyGuard(array('admin', 'kpb'));
  //   $pageData = array(
  //     'title' => 'Request Seller',
  //     'content' => 'admin/RequestSellerPage',
  //     'breadcrumb' => array(
  //       'Home' => base_url(),
  //     ),
  //   );
  //   $this->load->view('Page', $pageData);
  // }


  public function news_post()
  {
    $this->SecurityModel->roleOnlyGuard('admin');

    $kode = $this->uri->segment(3);
    $x['data'] = $this->NewsModel->get_berita_by_kode($kode);
    $pageData = array(
      'title' => 'Semua Post',
      'content' => 'admin/NewsPost',
      'breadcrumb' => array(
        'Home' => base_url(),
      ),
    );
    $pageData['data'] = $x;
    $this->load->view('Page', $pageData);
  }

  public function page_content()
  {
    $this->SecurityModel->roleOnlyGuard('admin');

    // $kode = $this->uri->segment(3);
    // $x['data'] = $this->NewsModel->get_berita_by_kode($kode);
    $pageData = array(
      'title' => 'Page Content',
      'content' => 'admin/PageContent',
      'breadcrumb' => array(
        'Home' => base_url(),
      ),
    );
    // $pageData['data'] = $x;
    $this->load->view('Page', $pageData);
  }

  public function new_news_post()
  {
    $this->SecurityModel->roleOnlyGuard('admin');
    $pageData = array(
      'title' => 'Post Postingan Baru',
      'content' => 'admin/NewNewsPost',
      'breadcrumb' => array(
        'Home' => base_url(),
      ),
    );
    $this->load->view('Page', $pageData);
  }


  public function papan_pengumuman()
  {
    $this->SecurityModel->roleOnlyGuard('admin');
    $pageData = array(
      'title' => 'Papan Pengumuman',
      'content' => 'admin/PapanPengumuman',
      'breadcrumb' => array(
        'Home' => base_url(),
      ),
    );
    $this->load->view('Page', $pageData);
  }

  public function header_page()
  {
    $this->SecurityModel->roleOnlyGuard('admin');
    $pageData = array(
      'title' => 'Header Page',
      'content' => 'admin/HeaderPage',
      'breadcrumb' => array(
        'Home' => base_url(),
      ),
    );
    $this->load->view('Page', $pageData);
  }

  public function struktur_pimpinan()
  {
    $this->SecurityModel->rolesOnlyGuard(array('admin', 'humas'));
    $pageData = array(
      'title' => 'Struktur Pimpinan',
      'content' => 'admin/KelolahStrukturPimpinan',
      'breadcrumb' => array(
        'Home' => base_url(),
      ),
    );
    $this->load->view('Page', $pageData);
  }

  public function galery()
  {
    $this->SecurityModel->roleOnlyGuard('admin');
    $pageData = array(
      'title' => 'Galery',
      'content' => 'admin/Galery',
      'breadcrumb' => array(
        'Home' => base_url(),
      ),
    );
    $this->load->view('Page', $pageData);
  }

  public function mahasiswaalumni()
  {
    $this->SecurityModel->rolesOnlyGuard(array('admin', 'kemahasiswaan'));
    $pageData = array(
      'title' => 'Mahasiswa dan Alumni',
      'content' => 'admin/KelolahMahasiswaAlumni',
      'breadcrumb' => array(
        'Home' => base_url(),
      ),
    );
    $this->load->view('Page', $pageData);
  }


  public function tenaga_kependidikan()
  {
    $this->SecurityModel->rolesOnlyGuard(array('admin', 'humas'));
    $pageData = array(
      'title' => 'Tenaga Kependidikan',
      'content' => 'admin/KelolahTenagaKependidikan',
      'breadcrumb' => array(
        'Home' => base_url(),
      ),
    );
    $this->load->view('Page', $pageData);
  }

  public function dosen_dan_tenaga_pendidik()
  {
    $this->SecurityModel->rolesOnlyGuard(array('admin', 'humas'));
    $pageData = array(
      'title' => 'Dosen dan Tenaga Pendidikan',
      'content' => 'admin/KelolahDosenDanTenagaPendidik',
      'breadcrumb' => array(
        'Home' => base_url(),
      ),
    );
    $this->load->view('Page', $pageData);
  }

  public function upload_image_ckeditor()
  {
    if (isset($_FILES['upload']['name'])) {
      $file = $_FILES['upload']['tmp_name'];
      $file_name = $_FILES['upload']['name'];
      $file_name_array = explode(".", $file_name);
      $extension = end($file_name_array);
      $new_image_name = rand() . '.' . $extension;
      // chmod('upload', 0777);
      $allowed_extension = array("jpg", "gif", "png");
      if (in_array($extension, $allowed_extension)) {
        move_uploaded_file($file, 'uploads/' . $new_image_name);
        $function_number = $_GET['CKEditorFuncNum'];
        $url = 'upload/' . $new_image_name;
        $message = '';
        echo "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction($function_number, '$url', '$message');</script>";
      }
    }
  }

  public function set_act_header()
  {
    try {
      $this->SecurityModel->rolesOnlyGuard(array('admin', 'humas'));
      $data = $this->input->post();
      $data = $this->GaleryModel->set_act_header($data);
      // $galery = $this->GaleryModel->getGalery($idGalery);

      // if ($galery['id_galery'] == $this->session->galerydata('id_galery')) {
      // 	$this->session->set_galerydata(array_merge($this->session->galerydata(), $galery));
      // }
      // if ($galery['id_role'] == '2') {
      // 	$id = $this->PerusahaanModel->getAll(array('is_galery' => '1', 'id_galery' => $galery['id_galery']));
      // 	$this->PerusahaanModel->updateModifedDate($id);
      // }

      echo json_encode(array("data" => $data));
    } catch (Exception $e) {
      ExceptionHandler::handle($e);
    }
  }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PublicController extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model(array('NewsModel', 'PimpinanModel', 'GaleryModel', 'DosenDanTenagaPendidikModel', 'TenagaKependidikanModel', 'MenuModel', 'MahasiswaAlumniModel'));
    $this->load->helper(array('DataStructure', 'Validation'));
    $this->db->db_debug = TRUE;
  }

  public function index()
  {

    $head = $this->GaleryModel->getPublicHeader();
    // var_dump($head);
    $this->load->view('PublicPage', [
      'title' => "Home",
      'content' => 'public/LandingPage',
      'head' => $head
    ]);
  }

  public function products()
  {
    $this->load->view('PublicPage', [
      'title' => "Home",
      'content' => 'public/ProductPage',
    ]);
  }

  public function product()
  {
    $input = $this->input->get();
    $data = $this->ProductModel->get($input['id_product']);
    $this->load->view('PublicPage', [
      'title' => "Product {$data['nama_product']}",
      'content' => 'public/DetailProductPage',
      "contentData" => ['id_product' => $input['id_product']]
    ]);
  }

  public function hot_news()
  {
    $this->load->view('PublicPage', [
      'title' => "Topik Utama",
      'content' => 'public/NewsPage',
    ]);
  }


  public function activities()
  {
    $this->load->view('PublicPage', [
      'title' => "Kegiatan",
      'content' => 'public/NewsPageActivities',
    ]);
  }

  public function announcement()
  {
    $this->load->view('PublicPage', [
      'title' => "Pengumuman",
      'content' => 'public/NewsPageAnnouncement',
    ]);
  }

  public function achievements()
  {
    $this->load->view('PublicPage', [
      'title' => "Pengumuman",
      'content' => 'public/NewsPageAchievements',
    ]);
  }

  public function facilities()
  {
    $this->load->view('PublicPage', [
      'title' => "Facilities",
      'content' => 'public/NewsPageFacilities',
    ]);
  }

  public function guide()
  {
    $this->load->view('PublicPage', [
      'menu' => "Pengumuman",
      'content' => 'public/NewsPageGuide',
    ]);
  }

  public function research()
  {
    $this->load->view('PublicPage', [
      'menu' => "Research",
      'content' => 'public/NewsPageResearch',
    ]);
  }

  public function calendar()
  {
    $this->load->view('PublicPage', [
      'title' => "Pengumuman",
      'content' => 'public/NewsPageCalendar',
    ]);
  }


  public function other_news()
  {
    $this->load->view('PublicPage', [
      'title' => "BeritaLainnya",
      'content' => 'public/NewsPageOtherNews',
    ]);
  }
  public function postx($slug)
  {
    $data = $this->NewsModel->getSlug($slug);
    $this->load->view('PublicPage', [
      'title' => "News " . $data['berita_judul'],
      'content' => 'public/DetailNewsPage',
      "contentData" => $data
    ]);
  }

  public function about($slug)
  {

    $slug = str_replace('_', '-', strtolower($slug));


    $slug = str_replace('_', '-', strtolower($slug));

    if ($slug == 'senate' || $slug == 'accreditation' || $slug == 'history' || $slug == 'logo' || $slug == 'vision-and-mission') {


      $data = $this->MenuModel->getSlug($slug);
      $this->load->view('PublicPage', [
        'title' => "About",
        'content' => 'public/about/Page',
        "contentData" => $data
      ]);
    } else {
      $this->load->view('PublicPage', [
        'title' => "About",
        'content' => 'public/about/' . $slug,
        // "contentData" => $data
      ]);
    }
  }
  public function college()
  {

    $this->load->view('PublicPage', [
      'title' => "Collage",
      'content' => 'public/college',
      // "contentData" => $data
    ]);
  }

  public function alumni()
  {

    $this->load->view('PublicPage', [
      'title' => "Alumni",
      'content' => 'public/alumni',
      // "contentData" => $data
    ]);
  }


  public function searchE()
  {
    try {
      $filter['clue'] = $this->input->get()['val'];
      if (!empty($this->input->get()['page'])) {
        $filter['page'] =  $this->input->get()['page'];
      }
      $data = $this->NewsModel->search($filter);
      echo json_encode(array("data" => $data));
    } catch (Exception $e) {
      ExceptionHandler::handle($e);
    }
  }

  public function search()
  {
    $filter['clue'] = $this->input->get()['val'];

    $this->load->view('PublicPage', [
      'title' => "Search",
      'content' => 'public/SearchPage',
      'contentData' => array('clue' => $this->input->get()['val'])
    ]);
    // var_dump($data);
    // echo $clue;
  }

  public function services($slug)
  {
    $slug = str_replace('_', '-', strtolower($slug));
    $data = $this->MenuModel->getSlug($slug);
    // var_dump($data);
    $this->load->view('PublicPage', [
      'title' => "Service",
      'content' => 'public/services/Page',
      "contentData" => $data
    ]);
  }

  public function galery()
  {
    $this->load->view('PublicPage', [
      'title' => 'Galery',
      'content' => 'public/GaleryPage'
    ]);
  }

  public function seminar($slug)
  {
    $slug = str_replace('_', '-', strtolower($slug));
    $data = $this->MenuModel->getSlug($slug);
    // var_dump($data);
    $this->load->view('PublicPage', [
      'title' => "Seminar",
      'content' => 'public/seminar/Page',
      "contentData" => $data
    ]);
  }

  public function academy($slug)
  {
    $slug = str_replace('_', '-', strtolower($slug));
    $data = $this->MenuModel->getSlug($slug);
    // var_dump($data);
    $this->load->view('PublicPage', [
      'title' => "Akademik",
      'content' => 'public/academic/Page',
      "contentData" => $data
    ]);

    // $slug = str_replace('_', '-', strtolower($slug));
    // // $data = $this->NewsModel->getSlug($slug);
    // $this->load->view('PublicPage', [
    //   'title' => "academy" ,
    //   'content' => 'public/academy/'.$slug,
    //   // "contentData" => $data
    // ]);
  }


  public function getAllPimpinan()
  {
    try {
      // var_dump($this->input->get()['id_berita']);
      $data = $this->PimpinanModel->getPublic();

      echo json_encode(array("data" => $data));
    } catch (Exception $e) {
      ExceptionHandler::handle($e);
    }
  }

  public function getAllTenagaKependidikan()
  {
    try {
      // var_dump($this->input->get()['id_berita']);
      $data = $this->TenagaKependidikanModel->getPublic();

      echo json_encode(array("data" => $data));
    } catch (Exception $e) {
      ExceptionHandler::handle($e);
    }
  }

  public function getAllMahasiswa()
  {
    try {
      // $this->SecurityModel->userOnlyGuard(TRUE);
      // var_dump($this->input->get()['id_berita']);
      $data = $this->MahasiswaAlumniModel->getPublic($this->input->post());

      echo json_encode(array("data" => $data));
    } catch (Exception $e) {
      ExceptionHandler::handle($e);
    }
  }

  public function getAllDosenDanTenagaPendidik()
  {
    try {
      // $this->SecurityModel->userOnlyGuard(TRUE);
      // var_dump($this->input->get()['id_berita']);
      $data = $this->DosenDanTenagaPendidikModel->getPublic();

      echo json_encode(array("data" => $data));
    } catch (Exception $e) {
      ExceptionHandler::handle($e);
    }
  }
}

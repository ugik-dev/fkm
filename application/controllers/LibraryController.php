<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LibraryController extends CI_Controller
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
    $this->load->view('LibraryPage', [
      'title' => "Library",
      'content' => 'library/LandingPage',
      'head' => $head
    ]);
  }

  public function skripsi()
  {

    $data = $this->MahasiswaAlumniModel->topSkripsi();
    // var_dump($data);
    $this->load->view('LibraryPage', [
      'title' => "Skripsi",
      'content' => 'library/Skripsi',
      'dataContent' => $data
    ]);
  }

  public function jurnal()
  {

    $data = $this->MahasiswaAlumniModel->topJurnal();
    // var_dump($data);
    $this->load->view('LibraryPage', [
      'title' => "Jurnal",
      'content' => 'library/Jurnal',
      'dataContent' => $data
    ]);
  }

  
  public function detailJurnal($nim)
  {
    // try {
      $data = $this->MahasiswaAlumniModel->getJurnal($nim);
      $this->load->view('LibraryPage', [
        'title' => "Search",
        'content' => 'library/DetailJurnal',
        // 'contentData' => array('clue' => $this->input->get()['s'], 'page' => $x, 'cuurent' => $current),
        'dataSkripsi' => $data[0], 
        // 'page' => $page
      ]);
      
    //     echo json_encode(array("data" => $data));
    // } catch (Exception $e) {
    //   ExceptionHandler::handle($e);
    // }
  }

  public function detail($nim)
  {
    // try {
      $data = $this->MahasiswaAlumniModel->getSkripsi($nim);
      $this->load->view('LibraryPage', [
        'title' => "Search",
        'content' => 'library/DetailSkripsi',
        'dataSkripsi' => $data[0], 
      ]);
  }

  public function search()
  {
    $filter['clue'] = $this->input->get()['s'];
    if (!empty($this->input->get()['page'])) {
      $filter['page'] = $this->input->get()['page'];
      $current = $this->input->get()['page'];
    }else{
      $current = 0;
    }
    $dataJurnal = $this->MahasiswaAlumniModel->searchJurnal($filter);
    $pageJurnal = $this->MahasiswaAlumniModel->searchPageJurnal($filter);
    
    $data = $this->MahasiswaAlumniModel->search($filter);
    $page = $this->MahasiswaAlumniModel->searchPage($filter);
    // echo json_encode($page);
    // echo json_encode($data);
    $x = ceil($page['page'] / 6);
    $y = ceil($pageJurnal['page'] / 3);

    $datamarge= array_merge($data,$dataJurnal);
    
    if($y > $x) $x=$y;
    $this->load->view('LibraryPage', [
      'title' => "Search",
      'content' => 'library/SearchPage',
      'contentData' => array('clue' => $this->input->get()['s'], 'page' => $x, 'cuurent' => $current),
      'dataSkripsi' => $datamarge, 
      // 'page' => $page
    ]);
    // var_dump($data);
    // echo $clue;
  }

}

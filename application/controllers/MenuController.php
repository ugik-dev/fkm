<?php
class MenuController extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('MenuModel');
    $this->load->library('upload');
  }
  function index()
  {
    $this->load->view('admin/NewNewPost');
  }

  function simpan_post()
  {
    // if (!empty($data['berita_imageFilename'])) {
    $data = $this->input->post();
    $gambar = FileIO::genericUpload('berita_image', array('png', 'jpeg', 'jpg'), NULL, $data);
    $this->MenuModel->simpan_berita($this->input->post(), $gambar);
    echo json_encode(array('asd' => 'asd'));
    return;
  }

  function save_edit_post()
  {
    // if (!empty($data['berita_imageFilename'])) {
    $data = $this->input->post();
    $this->MenuModel->save_edit_post($this->input->post());
    echo json_encode(array('asd' => 'asd'));
    return;
  }

  function lists()
  {
    $x['data'] = $this->MenuModel->get_all_berita();
    $this->load->view('v_post_list', $x);
  }

  function view()
  {
    $kode = $this->uri->segment(3);
    $x['data'] = $this->MenuModel->get_berita_by_kode($kode);
    $this->load->view('v_post_view', $x);
  }

  public function getAll()
  {
    try {
      // $this->SecurityModel->userOnlyGuard(TRUE);
      $data = $this->MenuModel->getAll($this->input->get());
      echo json_encode(array("data" => $data));
    } catch (Exception $e) {
      ExceptionHandler::handle($e);
    }
  }

  public function getAllPage()
  {
    try {
      // $this->SecurityModel->userOnlyGuard(TRUE);
      $data = $this->MenuModel->getAllPage($this->input->get());
      echo json_encode(array("data" => $data));
    } catch (Exception $e) {
      ExceptionHandler::handle($e);
    }
  }



  public function get()
  {
    try {
      // $this->SecurityModel->userOnlyGuard(TRUE);
      // var_dump($this->input->get()['id_berita']);
      $data = $this->MenuModel->get($this->input->get()['id_berita']);

      echo json_encode(array("data" => $data));
    } catch (Exception $e) {
      ExceptionHandler::handle($e);
    }
  }

  function add_new_menu()
  {
    try {
      $data = $this->input->post();
      $gambar = false;
      if (!empty($data['berita_imageFilename']))
        $gambar = FileIO::genericUpload('berita_image', array('png', 'jpeg', 'jpg'), NULL, $data);
      $this->MenuModel->add($this->input->post(), $gambar);
      echo json_encode(array("data" => $data));
    } catch (Exception $e) {
      ExceptionHandler::handle($e);
    }
  }

  public function edit_post()
  {
    try {
      $this->SecurityModel->userOnlyGuard(TRUE);
      // $data = $this->input->post();
      // $this->load->view('admin/EditMenuPost');

      $input = $this->input->get();
      $data = $this->MenuModel->get($input['id']);
      //   var_dump($data);
      $pageData = array(
        'title' => 'Edit Menu Post',
        'content' => 'admin/EditPage',
        'breadcrumb' => array(
          'Home' => base_url(),
        ),
        'id_menu' => $input['id'],
        'dataContent' => $data
      );
      $this->load->view('Page', $pageData);
    } catch (Exception $e) {
      ExceptionHandler::handle($e);
    }
  }

  public function delete()
  {
    try {
      $this->SecurityModel->userOnlyGuard('admin');
      $this->MenuModel->delete($this->input->post());
      echo json_encode([]);
    } catch (Exception $e) {
      ExceptionHandler::handle($e);
    }
  }
}

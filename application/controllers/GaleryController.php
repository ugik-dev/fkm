<?php
defined('BASEPATH') or exit('No direct script access allowed');

class GaleryController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('GaleryModel', ));
		$this->load->helper(array('DataStructure', 'Validation'));
		$this->db->db_debug = false;
	}


	public function getAllGalery()
	{
		try {
			// $this->SecurityModel->userOnlyGuard(TRUE);
			$data = $this->GaleryModel->getAllGalery($this->input->post());
			echo json_encode(array("data" => $data));
		} catch (Exception $e) {
			ExceptionHandler::handle($e);
		}
    }
	
	public function getAllHeader()
	{
		try {
			// $this->SecurityModel->userOnlyGuard(TRUE);
			$data = $this->GaleryModel->getAllHeader($this->input->post());
			echo json_encode(array("data" => $data));
		} catch (Exception $e) {
			ExceptionHandler::handle($e);
		}
	}
	
    public function getAllPage()
    {
      try {
        // $this->SecurityModel->userOnlyGuard(TRUE);
        $data = $this->GaleryModel->getAllPage($this->input->get());
        echo json_encode(array("data" => $data));
      } catch (Exception $e) {
        ExceptionHandler::handle($e);
      }
    }
  

	public function addGalery()
	{
		try {
            $this->SecurityModel->userOnlyGuard(TRUE);
            $data = $this->input->post();
            $data['media_galery'] = FileIO::genericUpload('media_galery', array('png', 'jpeg', 'jpg'), NULL, $data);
    
			$idGalery = $this->GaleryModel->addGalery($data);
			$galery = $this->GaleryModel->getGalery($idGalery);
			echo json_encode(array("data" => $galery));
		} catch (Exception $e) {
			ExceptionHandler::handle($e);
		}
	}

	public function addHeader()
	{
		try {
            $this->SecurityModel->userOnlyGuard(TRUE);
            $data = $this->input->post();
            $data['header_dir'] = FileIO::genericUpload3('header_dir', array('png', 'jpeg', 'jpg','mp4'), NULL, $data, '20000');
    
			$idGalery = $this->GaleryModel->addHeader($data);
			$galery = $this->GaleryModel->getHeader($idGalery);
			echo json_encode(array("data" => $galery));
		} catch (Exception $e) {
			ExceptionHandler::handle($e);
		}
	}


	public function editHeader()
	{
		try {
            $this->SecurityModel->userOnlyGuard(TRUE);
            $data = $this->input->post();
            if(!empty($data['header_dirFilename'])) {
				$data['header_dir'] = FileIO::genericUpload3('header_dir', array('png', 'jpeg', 'jpg','mp4'), NULL, $data, '20000');
				}
            $idGalery = $this->GaleryModel->editHeader($data);
			$galery = $this->GaleryModel->getHeader($idGalery);
    
			// if ($galery['id_galery'] == $this->session->galerydata('id_galery')) {
			// 	$this->session->set_galerydata(array_merge($this->session->galerydata(), $galery));
			// }
			// if ($galery['id_role'] == '2') {
			// 	$id = $this->PerusahaanModel->getAll(array('is_galery' => '1', 'id_galery' => $galery['id_galery']));
			// 	$this->PerusahaanModel->updateModifedDate($id);
			// }

			echo json_encode(array("data" => $galery));
		} catch (Exception $e) {
			ExceptionHandler::handle($e);
		}
	}


	public function editGalery()
	{
		try {
            $this->SecurityModel->userOnlyGuard(TRUE);
            $data = $this->input->post();
            if(!empty($data['media_galeryFilename'])) {
                $data['media_galery'] = FileIO::genericUpload('media_galery', array('png', 'jpeg', 'jpg'), NULL, $data);
            }
            $idGalery = $this->GaleryModel->editGalery($data);
			$galery = $this->GaleryModel->getGalery($idGalery);
    
			// if ($galery['id_galery'] == $this->session->galerydata('id_galery')) {
			// 	$this->session->set_galerydata(array_merge($this->session->galerydata(), $galery));
			// }
			// if ($galery['id_role'] == '2') {
			// 	$id = $this->PerusahaanModel->getAll(array('is_galery' => '1', 'id_galery' => $galery['id_galery']));
			// 	$this->PerusahaanModel->updateModifedDate($id);
			// }

			echo json_encode(array("data" => $galery));
		} catch (Exception $e) {
			ExceptionHandler::handle($e);
		}
	}

	public function deleteGalery()
	{
		try {
			$this->SecurityModel->userOnlyGuard(TRUE);
			$data = $this->input->post();
			$this->GaleryModel->deleteGalery($data);
			echo json_encode(array());
		} catch (Exception $e) {
			ExceptionHandler::handle($e);
		}
	}

	public function deleteHeader()
	{
		try {
			$this->SecurityModel->userOnlyGuard(TRUE);
			$data = $this->input->post();
			$this->GaleryModel->deleteHeader($data);
			echo json_encode(array());
		} catch (Exception $e) {
			ExceptionHandler::handle($e);
		}
	}

	public function logout()
	{
		// $this->SecurityModel->galeryOnlyGuard();
		$this->session->sess_destroy();
		echo json_encode(["error" => FALSE, 'data' => 'Logout berhasil.']);
	}
}

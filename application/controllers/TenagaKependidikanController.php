<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TenagaKependidikanController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('TenagaKependidikanModel', ));
		$this->load->helper(array('DataStructure', 'Validation'));
		$this->db->db_debug = false;
	}

	public function getAllTenagaKependidikan()
	{
		try {
			// $this->SecurityModel->userOnlyGuard(TRUE);
			$data = $this->TenagaKependidikanModel->getAllTenagaKependidikan($this->input->post());
			echo json_encode(array("data" => $data));
		} catch (Exception $e) {
			ExceptionHandler::handle($e);
		}
	}

	public function addTenagaKependidikan()
	{
		try {
            $this->SecurityModel->userOnlyGuard(TRUE);
            $data = $this->input->post();
            $data['photo'] = FileIO::genericUpload('photo', array('png', 'jpeg', 'jpg'), NULL, $data);
    
			$idTenagaKependidikan = $this->TenagaKependidikanModel->addTenagaKependidikan($data);
			$tenaga_kependidikan = $this->TenagaKependidikanModel->getTenagaKependidikan($idTenagaKependidikan);
			echo json_encode(array("data" => $tenaga_kependidikan));
		} catch (Exception $e) {
			ExceptionHandler::handle($e);
		}
	}

	public function editTenagaKependidikan()
	{
		try {
            $this->SecurityModel->userOnlyGuard(TRUE);
            $data = $this->input->post();
            if(!empty($data['photoFilename'])) {
                $data['photo'] = FileIO::genericUpload('photo', array('png', 'jpeg', 'jpg'), NULL, $data);
            }
            $idTenagaKependidikan = $this->TenagaKependidikanModel->editTenagaKependidikan($data);
			$tenaga_kependidikan = $this->TenagaKependidikanModel->getTenagaKependidikan($idTenagaKependidikan);
    
			// if ($tenaga_kependidikan['id_tenaga_kependidikan'] == $this->session->tenaga_kependidikandata('id_tenaga_kependidikan')) {
			// 	$this->session->set_tenaga_kependidikandata(array_merge($this->session->tenaga_kependidikandata(), $tenaga_kependidikan));
			// }
			// if ($tenaga_kependidikan['id_role'] == '2') {
			// 	$id = $this->PerusahaanModel->getAll(array('is_tenaga_kependidikan' => '1', 'id_tenaga_kependidikan' => $tenaga_kependidikan['id_tenaga_kependidikan']));
			// 	$this->PerusahaanModel->updateModifedDate($id);
			// }

			echo json_encode(array("data" => $tenaga_kependidikan));
		} catch (Exception $e) {
			ExceptionHandler::handle($e);
		}
	}

	public function deleteTenagaKependidikan()
	{
		try {
			$this->SecurityModel->userOnlyGuard(TRUE);
			$data = $this->input->post();
			$this->TenagaKependidikanModel->deleteTenagaKependidikan($data);
			echo json_encode(array());
		} catch (Exception $e) {
			ExceptionHandler::handle($e);
		}
	}

	public function logout()
	{
		// $this->SecurityModel->tenaga_kependidikanOnlyGuard();
		$this->session->sess_destroy();
		echo json_encode(["error" => FALSE, 'data' => 'Logout berhasil.']);
	}
}

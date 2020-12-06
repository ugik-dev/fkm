<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PimpinanController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('PimpinanModel', ));
		$this->load->helper(array('DataStructure', 'Validation'));
		$this->db->db_debug = false;
	}



	// public function update()
	// {
	// 	try {
	// 		$profile = $this->input->post();
	// 		$profile['id_pimpinan'] = $this->session->pimpinandata('id_pimpinan');
	// 		$newProfile = $this->PimpinanModel->updateDosenLocal($profile);
	// 		$oldSess = $this->session->pimpinandata();
	// 		$this->session->set_pimpinandata(array_merge($oldSess, $newProfile));
	// 		$profile = DataStructure::slice($this->session->pimpinandata(), ['nidn', 'nohp', 'telepon', 'email', 'bidang_keahlian']);
	// 		echo json_encode(array('profile' => $profile));
	// 	} catch (Exception $e) {
	// 		ExceptionHandler::handle($e);
	// 	}
	// }

	// public function changePassword()
	// {
	// 	try {
	// 		$this->SecurityModel->roleOnlyGuard('pengusul', TRUE);
	// 		$this->SecurityModel->pengusulSubTypeGuard(['dosen_tendik'], TRUE);
	// 		// Validation::ajaxValidateForm($this->SecurityModel->deleteDosenTendik());

	// 		$CP = $this->input->post();
	// 		if (md5($CP['old_password']) != $this->session->pimpinandata('password')) {
	// 			throw new PimpinanException('Password Lama Salah', 0);
	// 		}
	// 		$this->PimpinanModel->changePassword($CP);
	// 		$this->session->set_pimpinandata('password', md5($CP['password']));
	// 		echo json_encode(array());
	// 	} catch (Exception $e) {
	// 		ExceptionHandler::handle($e);
	// 	}
	// }

	// public function changePimpinanname()
	// {
	// 	$this->SecurityModel->apiKeyGuard();
	// 	try {
	// 		$data = $this->input->post();

	// 		if (!isset($data['pimpinanname']) || !isset($data['pimpinanname_new'])) {
	// 			throw new PimpinanException('Parameter tidak lengkap', 0);
	// 		}
	// 		$this->PimpinanModel->changePimpinanname($data);
	// 		echo json_encode(array());
	// 	} catch (Exception $e) {
	// 		ExceptionHandler::handle($e);
	// 	}
	// }

	public function getAllPimpinan()
	{
		try {
			// $this->SecurityModel->userOnlyGuard(TRUE);
			$data = $this->PimpinanModel->getAllPimpinan($this->input->post());
			echo json_encode(array("data" => $data));
		} catch (Exception $e) {
			ExceptionHandler::handle($e);
		}
	}

	public function addPimpinan()
	{
		try {
            $this->SecurityModel->userOnlyGuard(TRUE);
            $data = $this->input->post();
            $data['photo'] = FileIO::genericUpload('photo', array('png', 'jpeg', 'jpg'), NULL, $data);
    
			$idPimpinan = $this->PimpinanModel->addPimpinan($data);
			$pimpinan = $this->PimpinanModel->getPimpinan($idPimpinan);
			echo json_encode(array("data" => $pimpinan));
		} catch (Exception $e) {
			ExceptionHandler::handle($e);
		}
	}

	public function editPimpinan()
	{
		try {
            $this->SecurityModel->userOnlyGuard(TRUE);
            $data = $this->input->post();
            if(!empty($data['photoFilename'])) {
                $data['photo'] = FileIO::genericUpload('photo', array('png', 'jpeg', 'jpg'), NULL, $data);
            }
            $idPimpinan = $this->PimpinanModel->editPimpinan($data);
			$pimpinan = $this->PimpinanModel->getPimpinan($idPimpinan);
    
			// if ($pimpinan['id_pimpinan'] == $this->session->pimpinandata('id_pimpinan')) {
			// 	$this->session->set_pimpinandata(array_merge($this->session->pimpinandata(), $pimpinan));
			// }
			// if ($pimpinan['id_role'] == '2') {
			// 	$id = $this->PerusahaanModel->getAll(array('is_pimpinan' => '1', 'id_pimpinan' => $pimpinan['id_pimpinan']));
			// 	$this->PerusahaanModel->updateModifedDate($id);
			// }

			echo json_encode(array("data" => $pimpinan));
		} catch (Exception $e) {
			ExceptionHandler::handle($e);
		}
	}

	public function deletePimpinan()
	{
		try {
			$this->SecurityModel->userOnlyGuard(TRUE);
			$data = $this->input->post();
			$this->PimpinanModel->deletePimpinan($data);
			echo json_encode(array());
		} catch (Exception $e) {
			ExceptionHandler::handle($e);
		}
	}

	public function logout()
	{
		// $this->SecurityModel->pimpinanOnlyGuard();
		$this->session->sess_destroy();
		echo json_encode(["error" => FALSE, 'data' => 'Logout berhasil.']);
	}
}

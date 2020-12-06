<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DosenDanTenagaPendidikController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('DosenDanTenagaPendidikModel', ));
		$this->load->helper(array('DataStructure', 'Validation'));
		$this->db->db_debug = false;
	}

	public function getAllDosenDanTenagaPendidik()
	{
		try {
			// $this->SecurityModel->userOnlyGuard(TRUE);
			$data = $this->DosenDanTenagaPendidikModel->getAllDosenDanTenagaPendidik($this->input->post());
			echo json_encode(array("data" => $data));
		} catch (Exception $e) {
			ExceptionHandler::handle($e);
		}
	}

	public function addDosenDanTenagaPendidik()
	{
		try {
            $this->SecurityModel->userOnlyGuard(TRUE);
            $data = $this->input->post();
            $data['photo'] = FileIO::genericUpload('photo', array('png', 'jpeg', 'jpg'), NULL, $data);
    
			$idDosenDanTenagaPendidik = $this->DosenDanTenagaPendidikModel->addDosenDanTenagaPendidik($data);
			$dosen_dan_tenaga_pendidik = $this->DosenDanTenagaPendidikModel->getDosenDanTenagaPendidik($idDosenDanTenagaPendidik);
			echo json_encode(array("data" => $dosen_dan_tenaga_pendidik));
		} catch (Exception $e) {
			ExceptionHandler::handle($e);
		}
	}

	public function editDosenDanTenagaPendidik()
	{
		try {
            $this->SecurityModel->userOnlyGuard(TRUE);
            $data = $this->input->post();
            if(!empty($data['photoFilename'])) {
                $data['photo'] = FileIO::genericUpload('photo', array('png', 'jpeg', 'jpg'), NULL, $data);
            }
            $idDosenDanTenagaPendidik = $this->DosenDanTenagaPendidikModel->editDosenDanTenagaPendidik($data);
			$dosen_dan_tenaga_pendidik = $this->DosenDanTenagaPendidikModel->getDosenDanTenagaPendidik($idDosenDanTenagaPendidik);
    
			// if ($dosen_dan_tenaga_pendidik['id_dosen_dan_tenaga_pendidik'] == $this->session->dosen_dan_tenaga_pendidikdata('id_dosen_dan_tenaga_pendidik')) {
			// 	$this->session->set_dosen_dan_tenaga_pendidikdata(array_merge($this->session->dosen_dan_tenaga_pendidikdata(), $dosen_dan_tenaga_pendidik));
			// }
			// if ($dosen_dan_tenaga_pendidik['id_role'] == '2') {
			// 	$id = $this->PerusahaanModel->getAll(array('is_dosen_dan_tenaga_pendidik' => '1', 'id_dosen_dan_tenaga_pendidik' => $dosen_dan_tenaga_pendidik['id_dosen_dan_tenaga_pendidik']));
			// 	$this->PerusahaanModel->updateModifedDate($id);
			// }

			echo json_encode(array("data" => $dosen_dan_tenaga_pendidik));
		} catch (Exception $e) {
			ExceptionHandler::handle($e);
		}
	}

	public function deleteDosenDanTenagaPendidik()
	{
		try {
			$this->SecurityModel->userOnlyGuard(TRUE);
			$data = $this->input->post();
			$this->DosenDanTenagaPendidikModel->deleteDosenDanTenagaPendidik($data);
			echo json_encode(array());
		} catch (Exception $e) {
			ExceptionHandler::handle($e);
		}
	}

	public function logout()
	{
		// $this->SecurityModel->dosen_dan_tenaga_pendidikOnlyGuard();
		$this->session->sess_destroy();
		echo json_encode(["error" => FALSE, 'data' => 'Logout berhasil.']);
	}
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MahasiswaAlumniController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('MahasiswaAlumniModel', ));
		$this->load->helper(array('DataStructure', 'Validation'));
		$this->db->db_debug = false;
		$this->load->library('encryption');
	}


	public function getAllProdi()
	{
		try {
			// $this->SecurityModel->userOnlyGuard(TRUE);
			$data = $this->MahasiswaAlumniModel->getAllProdi($this->input->get());
			echo json_encode(array("data" => $data));
		} catch (Exception $e) {
			ExceptionHandler::handle($e);
		}
	}

	public function getAllMahasiswaAlumni()
	{
		try {
			// $this->SecurityModel->userOnlyGuard(TRUE);
			$data = $this->MahasiswaAlumniModel->getAllMahasiswaAlumni($this->input->post());
			echo json_encode(array("data" => $data));
		} catch (Exception $e) {
			ExceptionHandler::handle($e);
		}
	}

	

	public function getAllJurnal()
	{
		try {
			// $this->SecurityModel->userOnlyGuard(TRUE);
			$filter = $this->input->post();
			if ($this->session->userdata()['nama_role'] == 'mahasiswa') {
				$filter['id_mahasiswaalumni'] = $this->encryption->decrypt($this->session->userdata()['id_user']);
			}
            
			$data = $this->MahasiswaAlumniModel->getAllJurnal($filter);
			echo json_encode(array("data" => $data));
		} catch (Exception $e) {
			ExceptionHandler::handle($e);
		}
	}

	public function getMahasiswaSelf()
	{
		try {
			// $this->SecurityModel->userOnlyGuard(TRUE);
			$data = $this->MahasiswaAlumniModel->getMahasiswaSelf();
			echo json_encode(array("data" => $data));
		} catch (Exception $e) {
			ExceptionHandler::handle($e);
		}
	}

	public function getMahasiswaSelfSkripsi()
	{
		try {
			// $this->SecurityModel->userOnlyGuard(TRUE);
			$data = $this->MahasiswaAlumniModel->getMahasiswaSelfSkripsi();
			echo json_encode(array("data" => $data));
		} catch (Exception $e) {
			ExceptionHandler::handle($e);
		}
	}
	
	public function getMahasiswaSelfSkripsiAdmin()
	{
		try {
			$this->SecurityModel->rolesOnlyGuard(array('admin','kemahasiswaan'));
            $data = $this->input->post();
			$data = $this->MahasiswaAlumniModel->getMahasiswaSelfSkripsiAdmin($data);
			echo json_encode(array("data" => $data));
		} catch (Exception $e) {
			ExceptionHandler::handle($e);
		}
	}

	public function addMahasiswaAlumni()
	{
		try {
            $this->SecurityModel->userOnlyGuard(TRUE);
            $data = $this->input->post();
            $data['photo'] = FileIO::genericUpload('photo', array('png', 'jpeg', 'jpg'), NULL, $data);
    
			$idMahasiswaAlumni = $this->MahasiswaAlumniModel->addMahasiswaAlumni($data);
			$mahasiswaalumni = $this->MahasiswaAlumniModel->getMahasiswaAlumni($idMahasiswaAlumni);
			echo json_encode(array("data" => $mahasiswaalumni));
		} catch (Exception $e) {
			ExceptionHandler::handle($e);
		}
	}


	public function addJurnal()
	{
		try {
            $this->SecurityModel->userOnlyGuard(TRUE);
			$data = $this->input->post();
			if ($this->session->userdata()['nama_role'] == 'mahasiswa') {
				$data['id_mahasiswaalumni'] = $this->encryption->decrypt($this->session->userdata()['id_user']);
			}
           
			if(!empty($data['coverFilename'])) {
				
				$data['cover'] = FileIO::genericUpload3('cover', array('jpg', 'jpeg','png'), NULL, $data, '300');
			}

			if(!empty($data['jurnalFilename'])) {
				
				// $data['cover'] = FileIO::genericUpload3('cover', array('jpg', 'jpeg','png'), NULL, $data, '300');
				$data['jurnal'] = FileIO::genericUpload3('jurnal', array('pdf'), NULL, $data, '20000');
			}

			
			$data['id_jurnal'] = $this->MahasiswaAlumniModel->addJurnal($data);
			$jurnal = $this->MahasiswaAlumniModel->getAllJurnal($data);
			echo json_encode(array("data" => $jurnal));
		} catch (Exception $e) {
			ExceptionHandler::handle($e);
		}
	}


	public function editMahasiswaAlumni()
	{
		try {
            $this->SecurityModel->rolesOnlyGuard(array('admin','kemahasiswaan'));
            $data = $this->input->post();
            if(!empty($data['photoFilename'])) {
                $data['photo'] = FileIO::genericUpload('photo', array('png', 'jpeg', 'jpg'), NULL, $data);
            }
            $idMahasiswaAlumni = $this->MahasiswaAlumniModel->editMahasiswaAlumni($data);
			$mahasiswaalumni = $this->MahasiswaAlumniModel->getMahasiswaAlumni($idMahasiswaAlumni);
    
			// if ($mahasiswaalumni['id_mahasiswaalumni'] == $this->session->mahasiswaalumnidata('id_mahasiswaalumni')) {
			// 	$this->session->set_mahasiswaalumnidata(array_merge($this->session->mahasiswaalumnidata(), $mahasiswaalumni));
			// }
			// if ($mahasiswaalumni['id_role'] == '2') {
			// 	$id = $this->PerusahaanModel->getAll(array('is_mahasiswaalumni' => '1', 'id_mahasiswaalumni' => $mahasiswaalumni['id_mahasiswaalumni']));
			// 	$this->PerusahaanModel->updateModifedDate($id);
			// }

			echo json_encode(array("data" => $mahasiswaalumni));
		} catch (Exception $e) {
			ExceptionHandler::handle($e);
		}
	}

	public function editSelf()
	{
		try {
            // $this->SecurityModel->rolesOnlyGuard(array('admin','kemahasiswaan'));
            $data = $this->input->post();
          
            $this->MahasiswaAlumniModel->editSelf($data);
			// $mahasiswaalumni = $this->MahasiswaAlumniModel->getMahasiswaAlumni($idMahasiswaAlumni);
    
			// if ($mahasiswaalumni['id_mahasiswaalumni'] == $this->session->mahasiswaalumnidata('id_mahasiswaalumni')) {
			// 	$this->session->set_mahasiswaalumnidata(array_merge($this->session->mahasiswaalumnidata(), $mahasiswaalumni));
			// }
			// if ($mahasiswaalumni['id_role'] == '2') {
			// 	$id = $this->PerusahaanModel->getAll(array('is_mahasiswaalumni' => '1', 'id_mahasiswaalumni' => $mahasiswaalumni['id_mahasiswaalumni']));
			// 	$this->PerusahaanModel->updateModifedDate($id);
			// }

			echo json_encode(array("data" => ''));
		} catch (Exception $e) {
			ExceptionHandler::handle($e);
		}
	}

	public function editJurnal()
	{
		try {
            $this->SecurityModel->userOnlyGuard(TRUE);
			$data = $this->input->post();
			if ($this->session->userdata()['nama_role'] == 'mahasiswa') {
				$data['id_mahasiswaalumni'] = $this->encryption->decrypt($this->session->userdata()['id_user']);
			}
			if(!empty($data['coverFilename'])) {
				
				$data['cover'] = FileIO::genericUpload3('cover', array('jpg', 'jpeg','png'), NULL, $data, '300');
			}

			if(!empty($data['jurnalFilename'])) {
				
				// $data['cover'] = FileIO::genericUpload3('cover', array('jpg', 'jpeg','png'), NULL, $data, '300');
				$data['jurnal'] = FileIO::genericUpload3('jurnal', array('pdf'), NULL, $data, '20000');
			}
			$id = $this->MahasiswaAlumniModel->editJurnal($data);
			$jurnal = $this->MahasiswaAlumniModel->getAllJurnal($data);
			echo json_encode(array("data" => $jurnal[$id]));
		} catch (Exception $e) {
			ExceptionHandler::handle($e);
		}
	}

	public function editSelfSkripsi()
	{
		try {
            // $this->SecurityModel->rolesOnlyGuard(array('admin','kemahasiswaan'));
			$data = $this->input->post();
			// var_dump($data);
			if(!empty($data['skripsiFilename'])) {
				
				$data['skripsi'] = FileIO::genericUpload3('skripsi', array('pdf'), NULL, $data, '20000');
			}

			if(!empty($data['skripsi_enFilename'])) {
				
				$data['skripsi_en'] = FileIO::genericUpload3('skripsi_en', array('pdf'), NULL, $data, '20000');
			}

			if(!empty($data['coverFilename'])) {
				
				$data['cover'] = FileIO::genericUpload3('cover', array('jpg', 'jpeg','png'), NULL, $data, '300');
			}
			
            $this->MahasiswaAlumniModel->editSelfSkripsi($data);
		
			echo json_encode(array("data" => ''));
		} catch (Exception $e) {
			ExceptionHandler::handle($e);
		}
	}


	public function editSelfSkripsiAdmin()
	{
		try {
            $this->SecurityModel->rolesOnlyGuard(array('admin','kemahasiswaan'));
			$data = $this->input->post();
			// var_dump($data);
			if(!empty($data['skripsiFilename'])) {
				
				$data['skripsi'] = FileIO::genericUpload3('skripsi', array('pdf'), NULL, $data, '20000');
			}

			if(!empty($data['skripsi_enFilename'])) {
				
				$data['skripsi_en'] = FileIO::genericUpload3('skripsi_en', array('pdf'), NULL, $data, '20000');
			}

			if(!empty($data['coverFilename'])) {
				
				$data['cover'] = FileIO::genericUpload3('cover', array('jpg', 'jpeg','png'), NULL, $data, '300');
			}
			
            $this->MahasiswaAlumniModel->editSelfSkripsiAdmin($data);
		
			echo json_encode(array("data" => ''));
		} catch (Exception $e) {
			ExceptionHandler::handle($e);
		}
	}



	public function deleteMahasiswaAlumni()
	{
		try {
			$this->SecurityModel->userOnlyGuard(TRUE);
			$data = $this->input->post();
			$this->MahasiswaAlumniModel->deleteMahasiswaAlumni($data);
			echo json_encode(array());
		} catch (Exception $e) {
			ExceptionHandler::handle($e);
		}
	}

	public function logout()
	{
		// $this->SecurityModel->mahasiswaalumniOnlyGuard();
		$this->session->sess_destroy();
		echo json_encode(["error" => FALSE, 'data' => 'Logout berhasil.']);
	}
}

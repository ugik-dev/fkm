<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('UserModel','MahasiswaAlumniModel'));
		$this->load->helper(array('DataStructure', 'Validation'));
		$this->db->db_debug = false;
		$this->load->library('encryption');
	}

	public function index()
	{
		redirect('login');
	}

	public function login()
	{
		$this->SecurityModel->guestOnlyGuard();
		$this->load->view('PublicPage', [
			'title' => 'Login',
			'menu' => "Login",
			'content' => 'public/LoginPage',
		]);
	}

	public function create_account()
	{
		$this->SecurityModel->guestOnlyGuard();
		$pageData = array(
			'title' => 'Masuk',
		);

		$this->load->view('RegisterPage', $pageData);
	}

	public function loginProcess()
	{
		try {
			// $this->SecurityModel->guestOnlyGuard(TRUE);
			Validation::ajaxValidateForm($this->SecurityModel->loginValidation());

			$loginData = $this->input->post();

			$user = $this->UserModel->login($loginData);
			//  echo $user['id_user'];
			$user['id_user'] = $this->encryption->encrypt($user['id_user']);
			$this->session->set_userdata($user);
			if ($user['nama_role'] == 'mahasiswa') {
				$mhs = $this->MahasiswaAlumniModel->getMahasiswaAlumniByNIM($user['username']);
				$mhs['id_mahasiswaalumni'] = $this->encryption->encrypt($mhs['id_mahasiswaalumni']);
				$this->session->set_userdata(array_merge($this->session->userdata(), $mhs));
			}
			echo json_encode(array("error" => FALSE, "user" => $user));
		} catch (Exception $e) {
			ExceptionHandler::handle($e);
		}
	}

	// public function update()
	// {
	// 	try {
	// 		$profile = $this->input->post();
	// 		$profile['id_user'] = $this->session->userdata('id_user');
	// 		$newProfile = $this->UserModel->updateDosenLocal($profile);
	// 		$oldSess = $this->session->userdata();
	// 		$this->session->set_userdata(array_merge($oldSess, $newProfile));
	// 		$profile = DataStructure::slice($this->session->userdata(), ['nidn', 'nohp', 'telepon', 'email', 'bidang_keahlian']);
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
	// 		if (md5($CP['old_password']) != $this->session->userdata('password')) {
	// 			throw new UserException('Password Lama Salah', 0);
	// 		}
	// 		$this->UserModel->changePassword($CP);
	// 		$this->session->set_userdata('password', md5($CP['password']));
	// 		echo json_encode(array());
	// 	} catch (Exception $e) {
	// 		ExceptionHandler::handle($e);
	// 	}
	// }

	// public function changeUsername()
	// {
	// 	$this->SecurityModel->apiKeyGuard();
	// 	try {
	// 		$data = $this->input->post();

	// 		if (!isset($data['username']) || !isset($data['username_new'])) {
	// 			throw new UserException('Parameter tidak lengkap', 0);
	// 		}
	// 		$this->UserModel->changeUsername($data);
	// 		echo json_encode(array());
	// 	} catch (Exception $e) {
	// 		ExceptionHandler::handle($e);
	// 	}
	// }

	public function getAllUser()
	{
		try {
			$this->SecurityModel->userOnlyGuard(TRUE);
			$data = $this->UserModel->getAllUser($this->input->post());
			echo json_encode(array("data" => $data));
		} catch (Exception $e) {
			ExceptionHandler::handle($e);
		}
	}

	public function getAllRole()
	{
		try {
			$this->SecurityModel->userOnlyGuard(TRUE);
			$data = $this->UserModel->getAllRole($this->input->post());
			echo json_encode(array("data" => $data));
		} catch (Exception $e) {
			ExceptionHandler::handle($e);
		}
	}

	public function addUser()
	{
		try {
			$this->SecurityModel->userOnlyGuard(TRUE);
			$idUser = $this->UserModel->addUser($this->input->post());
			$user = $this->UserModel->getUser($idUser);
			echo json_encode(array("data" => $user));
		} catch (Exception $e) {
			ExceptionHandler::handle($e);
		}
	}

	public function editUser()
	{
		try {
			$this->SecurityModel->userOnlyGuard(TRUE);
			$data = $this->input->post();
			$data['id_user'] = $this->encryption->decrypt($data['id_user']);

			$idUser = $this->UserModel->editUser($data);
			$user = $this->UserModel->getUser($idUser);
			$user['id_user'] = $this->encryption->encrypt($user['id_user']);
			$user['password'] = $this->encryption->encrypt($user['password']);

			if ($user['id_user'] == $this->session->userdata('id_user')) {
				$this->session->set_userdata(array_merge($this->session->userdata(), $user));
				if ($user['nama_role'] == 'mahasiswa') {
					$mhs = $this->MahasiswaAlumniModel->getMahasiswaAlumniByNIM($user['username']);
					$mhs['id_mahasiswaalumni'] = $this->encryption->encrypt($mhs['id_mahasiswaalumni']);
					$this->session->set_userdata(array_merge($this->session->userdata(), $mhs));
				}
			}
		
			echo json_encode(array("data" => $user));
		} catch (Exception $e) {
			ExceptionHandler::handle($e);
		}
	}

	public function editPhoto()
	{
		try {
			$this->SecurityModel->userOnlyGuard(TRUE);
			$data = $this->input->post();
			$data['id_user'] = $this->encryption->decrypt($data['id_user']);
			$data['photo'] = FileIO::genericUpload3('photo', array('png', 'jpeg', 'jpg'), NULL, $data, '100');
			$user = $this->UserModel->getUser($data['id_user']);
			// var_dump($user);
			if($user['nama_role'] == 'mahasiswa')
			{
				$data['username'] = $user['username'];
				$idUser = $this->UserModel->editPhotoMahasiswa($data);
			}else{
				$idUser = $this->UserModel->editPhoto($data);

			}
			$user = $this->UserModel->getUser($idUser);
			// $user['id_user'] = $this->encryption->encrypt($user['id_user']);
		
			// if ($user['id_user'] == $this->session->userdata('id_user')) {
				$this->session->set_userdata('photo', $user['photo']);
				if ($user['nama_role'] == 'mahasiswa') {
					$mhs = $this->MahasiswaAlumniModel->getMahasiswaAlumniByNIM($user['username']);
					$mhs['id_mahasiswaalumni'] = $this->encryption->encrypt($mhs['id_mahasiswaalumni']);
					$this->session->set_userdata('photo', $mhs['photo']);
				}
			// }
		
			echo json_encode(array("data" => $user));
		} catch (Exception $e) {
			ExceptionHandler::handle($e);
		}
	}


	public function deleteUser()
	{
		try {
			$this->SecurityModel->userOnlyGuard(TRUE);
			$data = $this->input->post();
			$this->UserModel->deleteUser($data);
			echo json_encode(array());
		} catch (Exception $e) {
			ExceptionHandler::handle($e);
		}
	}

	public function logout()
	{
		// $this->SecurityModel->userOnlyGuard();
		$this->session->sess_destroy();
		echo json_encode(["error" => FALSE, 'data' => 'Logout berhasil.']);
	}
}

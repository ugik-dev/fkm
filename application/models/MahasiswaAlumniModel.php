<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MahasiswaAlumniModel extends CI_Model
{



	public function getAllProdi($filter = [])
	{
		$this->db->select("*");
		$this->db->from('prodi as u');
		$res = $this->db->get();
		return DataStructure::keyValue($res->result_array(), 'id_prodi');
	}


	public function search($filter)
	{
		if (!empty($this->session->userdata()['username'])) {
			$this->db->select(" u.nim, u.nama, u.dospem1 , u.dospem2, u.judul_skripsi, u.judul_skripsi_en, u.abstrak, u.abstrak_en, u.tahun_skripsi, u.cover, u.keyword ,u.skripsi , u.skripsi_en, p.nama_prodi, p.nama_prodi_en, u.date_update");
		} else {
			$this->db->select(" u.nim, u.nama, u.judul_skripsi, u.judul_skripsi_en, u.abstrak, u.abstrak_en, u.tahun_skripsi, u.cover, u.keyword, p.nama_prodi, p.nama_prodi_en, u.date_update ");
		}
		$this->db->from('mahasiswaalumni as u');
		$this->db->join('prodi as p', 'p.id_prodi = u.prodi');
		$this->db->order_by('date_update', 'desc');
		$this->db->where("u.judul_skripsi <> '' AND u.cover <> '' AND " . "( u.judul_skripsi like '%" . $filter['clue'] . "%' || u.judul_skripsi_en like '%" . $filter['clue'] . "%' || u.abstrak like '%" . $filter['clue'] . "%' || u.abstrak_en like '%" . $filter['clue'] . "%' )");


		if (!empty($filter['page'])) {
			$page = ($filter['page'] * 6) - 6;
		} else {
			$page = 0;
		}
		$this->db->limit(6, $page);

		$res = $this->db->get();
		$row = $res->result_array();
		// if (empty($row)) {
		// 	throw new UserException("Data Kosong", USER_NOT_FOUND_CODE);
		// }

		return $row;
	}

	public function searchJurnal($filter)
	{
		$this->db->select(" p.nim, p.nama, u.* ");
		
		$this->db->from('jurnal as u');
		$this->db->join('mahasiswaalumni as p', 'p.id_mahasiswaalumni = u.id_mahasiswaalumni');
			$this->db->order_by('date_update', 'desc');
		$this->db->where("u.judul_jurnal <> '' AND u.cover <> '' AND " . "( u.judul_jurnal like '%" . $filter['clue'] . "%' || u.abstrak like '%" . $filter['clue'] . "%' || u.nama_pengarang like '%" . $filter['clue'] . "%' || u.deskripsi like '%" . $filter['clue'] . "%' )");


		if (!empty($filter['page'])) {
			$page = ($filter['page'] * 3) - 3;
		} else {
			$page = 0;
		}
		$this->db->limit(3, $page);

		$res = $this->db->get();
		$row = $res->result_array();
		// if (empty($row)) {
		// 	throw new UserException("Data Kosong", USER_NOT_FOUND_CODE);
		// }

		return $row;
	}

	public function searchPageJurnal($filter)
	{
		$this->db->select("count(*) as page");
		$this->db->from('jurnal as u');
		// $this->db->join('prodi as p', 'p.id_prodi = u.prodi');
		$this->db->order_by('date_update', 'desc');
		$this->db->where("u.judul_jurnal <> '' AND u.cover <> '' AND " . "( u.judul_jurnal like '%" . $filter['clue'] . "%' || u.abstrak like '%" . $filter['clue'] . "%' || u.nama_pengarang like '%" . $filter['clue'] . "%' || u.deskripsi like '%" . $filter['clue'] . "%' )");



		$res = $this->db->get();
		$row = $res->result_array();

		return $row[0];
	}

	public function searchPage($filter)
	{
		$this->db->select("count(*) as page");
		$this->db->from('mahasiswaalumni as u');
		// $this->db->join('prodi as p', 'p.id_prodi = u.prodi');
		$this->db->order_by('date_update', 'desc');
		$this->db->where("u.judul_skripsi <> '' AND u.cover <> '' AND " . "( u.judul_skripsi like '%" . $filter['clue'] . "%' || u.judul_skripsi_en like '%" . $filter['clue'] . "%' || u.abstrak like '%" . $filter['clue'] . "%' || u.abstrak_en like '%" . $filter['clue'] . "%' )");
		// $this->db->where("u.judul_skripsi like '%".$filter['clue']."%' || u.judul_skripsi_en like '%".$filter['clue']."%' || u.abstrak like '%".$filter['clue']."%' || u.abstrak_en like '%".$filter['clue']."%' ");



		$res = $this->db->get();
		$row = $res->result_array();

		return $row[0];
	}

	public function getSkripsi($nim)
	{
		if (!empty($this->session->userdata()['username'])) {
			$this->db->select(" u.nim, u.nama, u.dospem1 , u.dospem2, u.judul_skripsi, u.judul_skripsi_en, u.abstrak, u.abstrak_en, u.tahun_skripsi, u.cover, u.keyword ,u.skripsi , u.skripsi_en, p.nama_prodi, p.nama_prodi_en,u.date_update ");
		} else {
			$this->db->select(" u.nim, u.nama, u.judul_skripsi, u.judul_skripsi_en, u.abstrak, u.abstrak_en, u.tahun_skripsi, u.cover, u.keyword, p.nama_prodi, p.nama_prodi_en,u.date_update  ");
		}
		$this->db->from('mahasiswaalumni as u');
		$this->db->join('prodi as p', 'p.id_prodi = u.prodi');
		$this->db->where("u.nim ", $nim);
		$res = $this->db->get();
		$row = $res->result_array();
		// if (empty($row)) {
		// 	throw new UserException("Data Kosong", USER_NOT_FOUND_CODE);
		// }
		return $row;
	}



	public function topSkripsi()
	{
		if (!empty($this->session->userdata('username'))) {
			$this->db->select(" u.nim, u.nama, u.dospem1 , u.dospem2, u.judul_skripsi, u.judul_skripsi_en, u.abstrak, u.abstrak_en, u.tahun_skripsi, u.cover, u.keyword ,u.skripsi , u.skripsi_en, p.nama_prodi, p.nama_prodi_en");
		} else {
			$this->db->select(" u.nim, u.nama, u.judul_skripsi, u.judul_skripsi_en, u.abstrak, u.abstrak_en, u.tahun_skripsi, u.cover, u.keyword, p.nama_prodi, p.nama_prodi_en ");
		}
		$this->db->from('mahasiswaalumni as u');
		$this->db->join('prodi as p', 'p.id_prodi = u.prodi');
		$this->db->where("u.judul_skripsi <> '' AND u.cover <> '' ");
		$res = $this->db->get();
		$row = $res->result_array();
		// if (empty($row)) {
		// 	throw new UserException("Data Kosong", USER_NOT_FOUND_CODE);
		// }
		return $row;
	}

	public function getJurnal($nim)
	{
		$this->db->select(" p.nim, p.nama, u.* ");
		
		$this->db->from('jurnal as u');
		$this->db->join('mahasiswaalumni as p', 'p.id_mahasiswaalumni = u.id_mahasiswaalumni');
		$this->db->where("u.id_jurnal ", $nim);
		$res = $this->db->get();
		$row = $res->result_array();
		// if (empty($row)) {
		// 	throw new UserException("Data Kosong", USER_NOT_FOUND_CODE);
		// }
		return $row;
	}



	public function topJurnal()
	{
			$this->db->select(" p.nim, p.nama, u.* ");
		
		$this->db->from('jurnal as u');
		$this->db->join('mahasiswaalumni as p', 'p.id_mahasiswaalumni = u.id_mahasiswaalumni');
		$this->db->where("u.judul_jurnal <> '' AND u.cover <> '' ");
		$res = $this->db->get();
		$row = $res->result_array();
		// if (empty($row)) {
		// 	throw new UserException("Data Kosong", USER_NOT_FOUND_CODE);
		// }
		return $row;
	}


	public function getPublic($filter = [])
	{
		$this->db->select("u.id_mahasiswaalumni, u.nim, u.nama, u.status, u.photo, u.tahun_masuk, u.tahun_keluar, u.deskripsi, u.jk, u.tempat_lahir, u.tanggal_lahir, u.prodi, u.sks_ditempuh, u.sks_saat_ini, u.ipk, p.nama_prodi, p.id_prodi");
		$this->db->from('mahasiswaalumni as u');
		$this->db->join('prodi as p', 'p.id_prodi = u.prodi');

		// $this->db->order_by('u.no', 'asc');	
		if (!empty($filter['search_mhs'])) {
			$this->db->where('( u.nama like "%' . $filter['search_mhs'] . '%" || u.deskripsi like "%' . $filter['search_mhs'] . '%" || u.tahun_masuk like "%' . $filter['search_mhs'] . '%" || u.tahun_keluar like "%' . $filter['search_mhs'] . '%" ) AND `u`.`status` <> "2"');
			// $this->db->where('u.status =! "'. '2"');
			$res = $this->db->get();
			return $res->result_array();
		} else   if (!empty($filter['search_alumni'])) {
			$this->db->where('( u.nama like "%' . $filter['search_alumni'] . '%" || u.deskripsi like "%' . $filter['search_alumni'] . '%" || u.tahun_masuk like "%' . $filter['search_alumni'] . '%" || u.tahun_keluar like "%' . $filter['search_alumni'] . '%" ) AND `u`.`status` = "2"');
			// $this->db->where('u.status =! "'. '2"');
			$res = $this->db->get();
			return $res->result_array();
		}
		return '';
		// $res = $this->db->get();
		// return $res->result_array();

	}


	public function getAllMahasiswaAlumni($filter = [])
	{
		$this->db->select("u.id_mahasiswaalumni,u.nim, u.nama, u.status, u.photo, u.tahun_masuk, u.tahun_keluar, u.deskripsi, u.jk, u.tempat_lahir, u.tanggal_lahir, u.prodi, u.sks_ditempuh, u.sks_saat_ini, u.ipk, p.nama_prodi , p.id_prodi");
		$this->db->from('mahasiswaalumni as u');
		$this->db->join('prodi as p', 'p.id_prodi = u.prodi');
		if (isset($filter['id_mahasiswaalumni'])) $this->db->where('u.id_mahasiswaalumni', $filter['id_mahasiswaalumni']);
		if (isset($filter['except_roles'])) $this->db->where_not_in('u.id_role', $filter['except_roles']);
		if (isset($filter['just_roles'])) $this->db->where_in('u.id_role', $filter['just_roles']);
		if (!empty($filter['status'])) $this->db->where('u.status', $filter['status']);
		if (!empty($filter['search'])) $this->db->where('u.nama like "%' . $filter['search'] . '%" || u.deskripsi like "%' . $filter['search'] . '%" || u.tahun_masuk like "%' . $filter['search'] . '%" || u.tahun_keluar like "%' . $filter['search'] . '%"');
		$res = $this->db->get();
		return DataStructure::keyValue($res->result_array(), 'id_mahasiswaalumni');
	}



	public function getAllJurnal($filter = [])
	{
		$this->db->select("*");
		$this->db->from('jurnal as u');
		if (!empty($filter['id_jurnal'])) $this->db->where('u.id_jurnal', $filter['id_jurnal']);
		if (!empty($filter['id_mahasiswaalumni'])) $this->db->where('u.id_mahasiswaalumni', $filter['id_mahasiswaalumni']);
		$res = $this->db->get();
		return DataStructure::keyValue($res->result_array(), 'id_jurnal');
	}


	public function getMahasiswaAlumni($idMahasiswaAlumni = NULL)
	{
		$row = $this->getAllMahasiswaAlumni(['id_mahasiswaalumni' => $idMahasiswaAlumni]);
		if (empty($row)) {
			throw new UserException("MahasiswaAlumni yang kamu cari tidak ditemukan", USER_NOT_FOUND_CODE);
		}
		return $row[$idMahasiswaAlumni];
	}


	public function getMahasiswaAlumniByNIM($NIM)
	{
		$this->db->select("u.id_mahasiswaalumni, u.nim, u.nama, u.status, u.photo, u.tahun_masuk, u.tahun_keluar, u.deskripsi, u.jk, u.tempat_lahir, u.tanggal_lahir, u.prodi, u.sks_ditempuh, u.sks_saat_ini, u.ipk, p.nama_prodi , p.id_prodi");
		$this->db->from('mahasiswaalumni as u');
		$this->db->join('prodi as p', 'p.id_prodi = u.prodi');
		$this->db->where('u.nim', $NIM);
		$res = $this->db->get();
		$row = $res->result_array();
		if (empty($row)) {
			throw new UserException("MahasiswaAlumni yang kamu cari tidak ditemukan", USER_NOT_FOUND_CODE);
		}
		return $row[0];
	}

	public function getMahasiswaSelf()
	{
		$this->db->select("u.id_mahasiswaalumni, u.nim, u.nama, u.status, u.photo, u.tahun_masuk, u.tahun_keluar, u.deskripsi, u.jk, u.tempat_lahir, u.tanggal_lahir, u.prodi, u.sks_ditempuh, u.sks_saat_ini, u.ipk, p.nama_prodi , p.id_prodi");
		$this->db->from('mahasiswaalumni as u');
		$this->db->join('prodi as p', 'p.id_prodi = u.prodi');
		$this->db->where('u.nim', $this->session->userdata('username'));
		$res = $this->db->get();
		$row = $res->result_array();
		if (empty($row)) {
			throw new UserException("MahasiswaAlumni yang kamu cari tidak ditemukan", USER_NOT_FOUND_CODE);
		}
		return $row[0];
	}

	public function getMahasiswaSelfSkripsi()
	{
		$this->db->select("u.id_mahasiswaalumni, u.nim, u.nama, u.dospem1 , u.dospem2, u.judul_skripsi, u.judul_skripsi_en, u.abstrak, u.abstrak_en, u.tahun_skripsi, u.cover, u.keyword ,u.skripsi , u.skripsi_en");
		$this->db->from('mahasiswaalumni as u');
		// $this->db->join('prodi as p', 'p.id_prodi = u.prodi');
		$this->db->where('u.nim', $this->session->userdata('username'));
		$res = $this->db->get();
		$row = $res->result_array();
		if (empty($row)) {
			throw new UserException("MahasiswaAlumni yang kamu cari tidak ditemukan", USER_NOT_FOUND_CODE);
		}
		return $row[0];
	}


	public function getMahasiswaSelfSkripsiAdmin($data)
	{
		$this->db->select("u.id_mahasiswaalumni, u.nim, u.nama, u.dospem1 , u.dospem2, u.judul_skripsi, u.judul_skripsi_en, u.abstrak, u.abstrak_en, u.tahun_skripsi, u.cover, u.keyword ,u.skripsi , u.skripsi_en");
		$this->db->from('mahasiswaalumni as u');
		// $this->db->join('prodi as p', 'p.id_prodi = u.prodi');
		$this->db->where('u.nim', $data['nim']);
		$res = $this->db->get();
		$row = $res->result_array();
		if (empty($row)) {
			throw new UserException("MahasiswaAlumni yang kamu cari tidak ditemukan", USER_NOT_FOUND_CODE);
		}
		return $row[0];
	}
	// 

	public function getMahasiswaAlumniByMahasiswaAlumniname($mahasiswaalumniname = NULL)
	{
		$row = $this->getAllMahasiswaAlumni(['mahasiswaalumniname' => $mahasiswaalumniname, 'is_login' => TRUE]);
		if (empty($row)) {
			throw new UserException("MahasiswaAlumni yang kamu cari tidak ditemukan", USER_NOT_FOUND_CODE);
		}
		return array_values($row)[0];
	}



	public function addMahasiswaAlumni($data)
	{
		$this->db->insert('mahasiswaalumni', DataStructure::slice($data, [
			'id_mahasiswaalumni', 'nama', 'status', 'photo', 'tahun_masuk', 'tahun_keluar', 'deskripsi', 'jk', 'tempat_lahir', 'tanggal_lahir', 'prodi', 'sks_ditempuh', 'sks_saat_ini', 'nim'
		], TRUE));
		ExceptionHandler::handleDBError($this->db->error(), "Tambah MahasiswaAlumni", "MahasiswaAlumni");

		$id_mahasiswaalumni = $this->db->insert_id();


		return $id_mahasiswaalumni;
	}





	public function editMahasiswaAlumni($data)
	{

		$this->db->set(DataStructure::slice($data, ['id_mahasiswaalumni', 'nama', 'status', 'photo', 'tahun_masuk', 'tahun_keluar', 'deskripsi', 'jk', 'tempat_lahir', 'tanggal_lahir', 'prodi', 'sks_ditempuh', 'sks_saat_ini', 'nim']));
		$this->db->where('id_mahasiswaalumni', $data['id_mahasiswaalumni']);
		$this->db->update('mahasiswaalumni');

		ExceptionHandler::handleDBError($this->db->error(), "ubah MahasiswaAlumni", "MahasiswaAlumni");

		return $data['id_mahasiswaalumni'];
	}

	public function editSelf($data)
	{

		$this->db->set(DataStructure::slice($data, ['status', 'photo', 'tahun_masuk', 'tahun_keluar', 'deskripsi', 'jk', 'tempat_lahir', 'tanggal_lahir', 'prodi', 'sks_ditempuh', 'sks_saat_ini', 'nim']));
		$this->db->where('nim', $this->session->userdata('username'));
		$this->db->update('mahasiswaalumni');

		ExceptionHandler::handleDBError($this->db->error(), "ubah MahasiswaAlumni", "MahasiswaAlumni");

		return "";
	}

	public function editSelfSkripsi($data)
	{
		// echo date("yy-m-d");
		$data['date_update'] = date("yy-m-d");
		// $this->db->set('date_update',date("yy-m-d"));

		$this->db->set(DataStructure::slice($data, [
			'dospem1', 'dospem2', 'judul_skripsi', 'judul_skripsi_en', 'abstrak', 'abstrak_en', 'tahun_skripsi', 'cover', 'keyword', 'skripsi', 'skripsi_en', 'date_update'
		]));
		$this->db->where('nim', $this->session->userdata('username'));
		$this->db->update('mahasiswaalumni');

		ExceptionHandler::handleDBError($this->db->error(), "ubah MahasiswaAlumni", "MahasiswaAlumni");

		return "";
	}

	public function editSelfSkripsiAdmin($data)
	{
		$data['date_update'] = date("yy-m-d");
		$this->db->set(DataStructure::slice($data, [
			'dospem1', 'dospem2', 'judul_skripsi', 'judul_skripsi_en', 'abstrak', 'abstrak_en', 'tahun_skripsi', 'cover', 'keyword', 'skripsi', 'skripsi_en', 'date_update'
		]));
		$this->db->where('nim', $data['nim']);
		$this->db->update('mahasiswaalumni');

		ExceptionHandler::handleDBError($this->db->error(), "ubah MahasiswaAlumni", "MahasiswaAlumni");

		return "";
	}


	public function deleteMahasiswaAlumni($data)
	{
		$this->db->where('id_mahasiswaalumni', $data['id_mahasiswaalumni']);
		$this->db->delete('mahasiswaalumni');

		ExceptionHandler::handleDBError($this->db->error(), "Hapus MahasiswaAlumni", "MahasiswaAlumni");
	}

	public function addJurnal($data)
	{
		$this->db->insert('jurnal', DataStructure::slice($data, [
			'id_mahasiswaalumni', 'judul_jurnal', 'vol', 'institusi', 'nama_pengarang', 'jurnal', 'deskripsi','abstrak', 'cover'
		], TRUE));
		ExceptionHandler::handleDBError($this->db->error(), "Tambah jurnal", "jurnal");

		$id_mahasiswaalumni = $this->db->insert_id();


		return $id_mahasiswaalumni;
	}

	public function editJurnal($data)
	{

		$this->db->set(DataStructure::slice($data, [
			 'judul_jurnal', 'vol', 'institusi', 'nama_pengarang', 'jurnal', 'deskripsi','abstrak' , 'cover'
			]));
		if(!empty($data['id_mahasiswaalumni']))$this->db->where('id_mahasiswaalumni', $data['id_mahasiswaalumni']);
		$this->db->where('id_jurnal', $data['id_jurnal']);

		$this->db->update('jurnal');

		ExceptionHandler::handleDBError($this->db->error(), "ubah jurnal", "jurnal");

		return $data['id_jurnal'];
	}
}

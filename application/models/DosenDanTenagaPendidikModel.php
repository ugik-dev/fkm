<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DosenDanTenagaPendidikModel extends CI_Model
{

    public function getPublic($filter = [])
	{
		$this->db->select("*");
		$this->db->from('dosen_dan_tenaga_pendidik as u');
		$this->db->order_by('u.no', 'asc');	
		$res = $this->db->get();
		return $res->result_array();
	}


	public function getAllDosenDanTenagaPendidik($filter = [])
	{
		// var_dump($filter);
		$this->db->select("*");

		$this->db->from('dosen_dan_tenaga_pendidik as u');
		// $this->db->join('role as r', 'r.id_role = u.id_role');
		// if (empty($filter['is_login'])) {
		// 	$this->db->select("NULL as password", FALSE);
		// }
		// if (isset($filter['is_not_self'])) $this->db->where('u.id_dosen_dan_tenaga_pendidik !=', $this->session->dosen_dan_tenaga_pendidikdata('id_dosen_dan_tenaga_pendidik'));
		// if (isset($filter['dosen_dan_tenaga_pendidikname'])) $this->db->where('u.dosen_dan_tenaga_pendidikname', $filter['dosen_dan_tenaga_pendidikname']);
		if (isset($filter['id_dosen_dan_tenaga_pendidik'])) $this->db->where('u.id_dosen_dan_tenaga_pendidik', $filter['id_dosen_dan_tenaga_pendidik']);
		if (isset($filter['except_roles'])) $this->db->where_not_in('u.id_role', $filter['except_roles']);
		if (isset($filter['just_roles'])) $this->db->where_in('u.id_role', $filter['just_roles']);
		if (!empty($filter['id_role'])) $this->db->where('u.id_role', $filter['id_role']);
		$res = $this->db->get();
		return DataStructure::keyValue($res->result_array(), 'id_dosen_dan_tenaga_pendidik');
    }
    



	public function getDosenDanTenagaPendidik($idDosenDanTenagaPendidik = NULL)
	{
		$row = $this->getAllDosenDanTenagaPendidik(['id_dosen_dan_tenaga_pendidik' => $idDosenDanTenagaPendidik]);
		if (empty($row)) {
			throw new UserException("DosenDanTenagaPendidik yang kamu cari tidak ditemukan", USER_NOT_FOUND_CODE);
		}
		return $row[$idDosenDanTenagaPendidik];
	}

	

	public function getDosenDanTenagaPendidikByDosenDanTenagaPendidikname($dosen_dan_tenaga_pendidikname = NULL)
	{
		$row = $this->getAllDosenDanTenagaPendidik(['dosen_dan_tenaga_pendidikname' => $dosen_dan_tenaga_pendidikname, 'is_login' => TRUE]);
		if (empty($row)) {
			throw new UserException("DosenDanTenagaPendidik yang kamu cari tidak ditemukan", USER_NOT_FOUND_CODE);
		}
		return array_values($row)[0];
	}



	public function addDosenDanTenagaPendidik($data)
	{
		$this->db->insert('dosen_dan_tenaga_pendidik', DataStructure::slice($data, [
			'id_dosen_dan_tenaga_pendidik', 'nama', 'jabatan', 'photo' , 'no' ,  'nip_nidn' , 'golongan' , 's1', 's2', 's3', 'bidang_keilmuan', 'fokus_penelitian'
		], TRUE));
		ExceptionHandler::handleDBError($this->db->error(), "Tambah DosenDanTenagaPendidik", "DosenDanTenagaPendidik");

		$id_dosen_dan_tenaga_pendidik = $this->db->insert_id();

	
		return $id_dosen_dan_tenaga_pendidik;
	}



	public function editDosenDanTenagaPendidik($data)
	{

		$this->db->set(DataStructure::slice($data, ['id_dosen_dan_tenaga_pendidik', 'nama', 'jabatan', 'photo','no',  'nip_nidn' , 'golongan' , 's1', 's2', 's3', 'bidang_keilmuan', 'fokus_penelitian']));
		$this->db->where('id_dosen_dan_tenaga_pendidik', $data['id_dosen_dan_tenaga_pendidik']);
		$this->db->update('dosen_dan_tenaga_pendidik');

		ExceptionHandler::handleDBError($this->db->error(), "ubah DosenDanTenagaPendidik", "DosenDanTenagaPendidik");

		return $data['id_dosen_dan_tenaga_pendidik'];
	}

	public function deleteDosenDanTenagaPendidik($data)
	{
		$this->db->where('id_dosen_dan_tenaga_pendidik', $data['id_dosen_dan_tenaga_pendidik']);
		$this->db->delete('dosen_dan_tenaga_pendidik');

		ExceptionHandler::handleDBError($this->db->error(), "Hapus DosenDanTenagaPendidik", "DosenDanTenagaPendidik");
	}

	
}

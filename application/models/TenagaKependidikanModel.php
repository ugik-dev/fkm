<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TenagaKependidikanModel extends CI_Model
{

    public function getPublic($filter = [])
	{
		$this->db->select("*");
		$this->db->from('tenaga_kependidikan as u');
		$this->db->order_by('u.no', 'asc');	
		$res = $this->db->get();
		return $res->result_array();
	}


	public function getAllTenagaKependidikan($filter = [])
	{
		// var_dump($filter);
		$this->db->select("*");

		$this->db->from('tenaga_kependidikan as u');
		// $this->db->join('role as r', 'r.id_role = u.id_role');
		// if (empty($filter['is_login'])) {
		// 	$this->db->select("NULL as password", FALSE);
		// }
		// if (isset($filter['is_not_self'])) $this->db->where('u.id_tenaga_kependidikan !=', $this->session->tenaga_kependidikandata('id_tenaga_kependidikan'));
		// if (isset($filter['tenaga_kependidikanname'])) $this->db->where('u.tenaga_kependidikanname', $filter['tenaga_kependidikanname']);
		if (isset($filter['id_tenaga_kependidikan'])) $this->db->where('u.id_tenaga_kependidikan', $filter['id_tenaga_kependidikan']);
		if (isset($filter['except_roles'])) $this->db->where_not_in('u.id_role', $filter['except_roles']);
		if (isset($filter['just_roles'])) $this->db->where_in('u.id_role', $filter['just_roles']);
		if (!empty($filter['id_role'])) $this->db->where('u.id_role', $filter['id_role']);
		$res = $this->db->get();
		return DataStructure::keyValue($res->result_array(), 'id_tenaga_kependidikan');
    }
    



	public function getTenagaKependidikan($idTenagaKependidikan = NULL)
	{
		$row = $this->getAllTenagaKependidikan(['id_tenaga_kependidikan' => $idTenagaKependidikan]);
		if (empty($row)) {
			throw new UserException("TenagaKependidikan yang kamu cari tidak ditemukan", USER_NOT_FOUND_CODE);
		}
		return $row[$idTenagaKependidikan];
	}

	

	public function getTenagaKependidikanByTenagaKependidikanname($tenaga_kependidikanname = NULL)
	{
		$row = $this->getAllTenagaKependidikan(['tenaga_kependidikanname' => $tenaga_kependidikanname, 'is_login' => TRUE]);
		if (empty($row)) {
			throw new UserException("TenagaKependidikan yang kamu cari tidak ditemukan", USER_NOT_FOUND_CODE);
		}
		return array_values($row)[0];
	}



	public function addTenagaKependidikan($data)
	{
		$this->db->insert('tenaga_kependidikan', DataStructure::slice($data, [
			'id_tenaga_kependidikan', 'nama', 'jabatan', 'photo' , 'no' ,  'nip_nidn' , 'golongan' , 's1', 's2', 's3', 'bidang_keilmuan', 'fokus_penelitian'
		], TRUE));
		ExceptionHandler::handleDBError($this->db->error(), "Tambah TenagaKependidikan", "TenagaKependidikan");

		$id_tenaga_kependidikan = $this->db->insert_id();

	
		return $id_tenaga_kependidikan;
	}



	public function editTenagaKependidikan($data)
	{

		$this->db->set(DataStructure::slice($data, ['id_tenaga_kependidikan', 'nama', 'jabatan', 'photo','no',  'nip_nidn' , 'golongan' , 's1', 's2', 's3', 'bidang_keilmuan', 'fokus_penelitian']));
		$this->db->where('id_tenaga_kependidikan', $data['id_tenaga_kependidikan']);
		$this->db->update('tenaga_kependidikan');

		ExceptionHandler::handleDBError($this->db->error(), "ubah TenagaKependidikan", "TenagaKependidikan");

		return $data['id_tenaga_kependidikan'];
	}

	public function deleteTenagaKependidikan($data)
	{
		$this->db->where('id_tenaga_kependidikan', $data['id_tenaga_kependidikan']);
		$this->db->delete('tenaga_kependidikan');

		ExceptionHandler::handleDBError($this->db->error(), "Hapus TenagaKependidikan", "TenagaKependidikan");
	}

	
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PimpinanModel extends CI_Model
{


	public function getPublic($filter = [])
	{
		$this->db->select("*");
		$this->db->from('pimpinan as u');
		$this->db->order_by('u.no', 'asc');	
		$res = $this->db->get();
		return $res->result_array();
	}


	public function getAllPimpinan($filter = [])
	{
		// var_dump($filter);
		$this->db->select("*");

		$this->db->from('pimpinan as u');
		// $this->db->join('role as r', 'r.id_role = u.id_role');
		// if (empty($filter['is_login'])) {
		// 	$this->db->select("NULL as password", FALSE);
		// }
		// if (isset($filter['is_not_self'])) $this->db->where('u.id_pimpinan !=', $this->session->pimpinandata('id_pimpinan'));
		// if (isset($filter['pimpinanname'])) $this->db->where('u.pimpinanname', $filter['pimpinanname']);
		if (isset($filter['id_pimpinan'])) $this->db->where('u.id_pimpinan', $filter['id_pimpinan']);
		if (isset($filter['except_roles'])) $this->db->where_not_in('u.id_role', $filter['except_roles']);
		if (isset($filter['just_roles'])) $this->db->where_in('u.id_role', $filter['just_roles']);
		if (!empty($filter['id_role'])) $this->db->where('u.id_role', $filter['id_role']);
		$res = $this->db->get();
		return DataStructure::keyValue($res->result_array(), 'id_pimpinan');
	}


	public function getPimpinan($idPimpinan = NULL)
	{
		$row = $this->getAllPimpinan(['id_pimpinan' => $idPimpinan]);
		if (empty($row)) {
			throw new UserException("Pimpinan yang kamu cari tidak ditemukan", USER_NOT_FOUND_CODE);
		}
		return $row[$idPimpinan];
	}

	

	public function getPimpinanByPimpinanname($pimpinanname = NULL)
	{
		$row = $this->getAllPimpinan(['pimpinanname' => $pimpinanname, 'is_login' => TRUE]);
		if (empty($row)) {
			throw new UserException("Pimpinan yang kamu cari tidak ditemukan", USER_NOT_FOUND_CODE);
		}
		return array_values($row)[0];
	}



	public function addPimpinan($data)
	{
		$this->db->insert('pimpinan', DataStructure::slice($data, [
			'id_pimpinan', 'nama', 'jabatan', 'photo' , 'no' ,  'nip_nidn' , 'golongan' , 's1', 's2', 's3', 'bidang_keilmuan', 'fokus_penelitian'
		], TRUE));
		ExceptionHandler::handleDBError($this->db->error(), "Tambah Pimpinan", "Pimpinan");

		$id_pimpinan = $this->db->insert_id();

	
		return $id_pimpinan;
	}



	public function editPimpinan($data)
	{

		$this->db->set(DataStructure::slice($data, ['id_pimpinan', 'nama', 'jabatan', 'photo','no', 'nip_nidn' , 'golongan' , 's1', 's2', 's3', 'bidang_keilmuan', 'fokus_penelitian']));
		$this->db->where('id_pimpinan', $data['id_pimpinan']);
		$this->db->update('pimpinan');

		ExceptionHandler::handleDBError($this->db->error(), "ubah Pimpinan", "Pimpinan");

		return $data['id_pimpinan'];
	}

	public function deletePimpinan($data)
	{
		$this->db->where('id_pimpinan', $data['id_pimpinan']);
		$this->db->delete('pimpinan');

		ExceptionHandler::handleDBError($this->db->error(), "Hapus Pimpinan", "Pimpinan");
	}

	
}

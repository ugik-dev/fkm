<?php
defined('BASEPATH') or exit('No direct script access allowed');

class GaleryModel extends CI_Model
{


	public function getPublic($filter = [])
	{
		$this->db->select("*");
		$this->db->from('galery as u');
		$this->db->order_by('u.no', 'asc');
		$res = $this->db->get();
		return $res->result_array();
	}

	public function getPublicHeader($filter = [])
	{
		$this->db->select("*");
		$this->db->from('v_header as u');
		$this->db->order_by('u.no', 'asc');
		$res = $this->db->get();
		return $res->result_array();
	}

	public function getAllPage()
	{
		$this->db->select('count(*) as page');
		$this->db->from('galery');
		$res = $this->db->get();
		$res = $res->result_array();
		return $res[0];
	}

	public function getAllGalery($filter = [])
	{
		// var_dump($filter);
		$this->db->select("*");

		$this->db->from('galery as u');
		// $this->db->join('role as r', 'r.id_role = u.id_role');
		// if (empty($filter['is_login'])) {
		// 	$this->db->select("NULL as password", FALSE);
		// }
		// if (isset($filter['is_not_self'])) $this->db->where('u.id_galery !=', $this->session->galerydata('id_galery'));
		// if (isset($filter['galeryname'])) $this->db->where('u.galeryname', $filter['galeryname']);
		if (isset($filter['id_galery'])) $this->db->where('u.id_galery', $filter['id_galery']);
		if (isset($filter['except_roles'])) $this->db->where_not_in('u.id_role', $filter['except_roles']);
		if (isset($filter['just_roles'])) $this->db->where_in('u.id_role', $filter['just_roles']);
		if (!empty($filter['id_role'])) $this->db->where('u.id_role', $filter['id_role']);
		if (!empty($filter['landing_page'])) {
			// $this->db->where('topik_utama', '2');
			if (!empty($filter['page'])) {
				$page = ($filter['page'] * 5) - 5;
			} else {
				$page = 0;
			}
			$this->db->limit(5, $page);
		};

		$res = $this->db->get();
		return DataStructure::keyValue($res->result_array(), 'id_galery');
	}


	public function getGalery($idGalery = NULL)
	{
		$row = $this->getAllGalery(['id_galery' => $idGalery]);
		if (empty($row)) {
			throw new UserException("Galery yang kamu cari tidak ditemukan", USER_NOT_FOUND_CODE);
		}
		return $row[$idGalery];
	}

	public function getAllHeader($filter = [])
	{
		// var_dump($filter);
		$this->db->select("*");

		$this->db->from('header as u');
		if (isset($filter['id'])) $this->db->where('u.id', $filter['id']);
		if (isset($filter['except_roles'])) $this->db->where_not_in('u.id_role', $filter['except_roles']);
		if (isset($filter['just_roles'])) $this->db->where_in('u.id_role', $filter['just_roles']);
		if (!empty($filter['id_role'])) $this->db->where('u.id_role', $filter['id_role']);
		if (!empty($filter['landing_page'])) {
			// $this->db->where('topik_utama', '2');
			if (!empty($filter['page'])) {
				$page = ($filter['page'] * 5) - 5;
			} else {
				$page = 0;
			}
			$this->db->limit(5, $page);
		};

		$res = $this->db->get();
		return DataStructure::keyValue($res->result_array(), 'id');
	}


	public function getHeader($idGalery = NULL)
	{
		$row = $this->getAllHeader(['id' => $idGalery]);
		if (empty($row)) {
			throw new UserException("Galery yang kamu cari tidak ditemukan", USER_NOT_FOUND_CODE);
		}
		return $row[$idGalery];
	}



	public function getGaleryByGaleryname($galeryname = NULL)
	{
		$row = $this->getAllGalery(['galeryname' => $galeryname, 'is_login' => TRUE]);
		if (empty($row)) {
			throw new UserException("Galery yang kamu cari tidak ditemukan", USER_NOT_FOUND_CODE);
		}
		return array_values($row)[0];
	}



	public function addGalery($data)
	{
		$this->db->insert('galery', DataStructure::slice($data, [
			'id_galery', 'media_galery', 'deskripsi'
		], TRUE));
		ExceptionHandler::handleDBError($this->db->error(), "Tambah Galery", "Galery");

		$id_galery = $this->db->insert_id();


		return $id_galery;
	}

	public function addHeader($data)
	{
		if (!empty($data['header_dir'])) {
			$strArray =	explode(".", $data['header_dir']);
			$lastElement = end($strArray);
			// print_r($lastElement);
			// var_dump($data['tipe']);
			if ($lastElement == 'mp4') {

				$data['tipe'] = 'vid';
			} else {
				$data['tipe'] = 'img';
			}
		}

		$this->db->insert('header', DataStructure::slice($data, [
			 'header_dir', 'tipe', 'show_head','no'
		], TRUE));
		ExceptionHandler::handleDBError($this->db->error(), "Tambah Header", "Header");

		$id_galery = $this->db->insert_id();


		return $id_galery;
	}

	
	public function editHeader($data)
	{

		if (!empty($data['header_dir'])) {
			$strArray =	explode(".", $data['header_dir']);
			$lastElement = end($strArray);
			// print_r($lastElement);
			// var_dump($data['tipe']);
			if ($lastElement == 'mp4') {

				$data['tipe'] = 'vid';
			} else {
				$data['tipe'] = 'img';
			}
		}
		$this->db->set(DataStructure::slice($data, ['header_dir', 'tipe', 'show_head' , 'no']));
		$this->db->where('id', $data['id']);
		$this->db->update('header');

		ExceptionHandler::handleDBError($this->db->error(), "ubah Galery", "Header");

		return $data['id'];
	}


	public function editGalery($data)
	{

		$this->db->set(DataStructure::slice($data, ['id_galery', 'deskripsi', 'media_galery']));
		$this->db->where('id_galery', $data['id_galery']);
		$this->db->update('galery');

		ExceptionHandler::handleDBError($this->db->error(), "ubah Galery", "Galery");

		return $data['id_galery'];
	}



	public function set_act_header($data)
	{

		$this->db->set(DataStructure::slice($data, ['act']));
		// $this->db->where('id_galery', $data['id_galery']);
		$this->db->update('header0');

		ExceptionHandler::handleDBError($this->db->error(), "ubah Header", "Header");

		return $data;
	}

	public function deleteGalery($data)
	{
		$this->db->where('id_galery', $data['id_galery']);
		$this->db->delete('galery');

		ExceptionHandler::handleDBError($this->db->error(), "Hapus Galery", "Galery");
	}

	
	public function deleteHeader($data)
	{
		$this->db->where('id', $data['id']);
		$this->db->delete('header');

		ExceptionHandler::handleDBError($this->db->error(), "Hapus Header", "Header");
	}
}

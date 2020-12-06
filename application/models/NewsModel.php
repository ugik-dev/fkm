<?php
class NewsModel extends CI_Model
{

  
  public function save_edit_post($data, $gambar)
  {
    // $tmp = $data['berita_judul'];
    if(!empty($gambar))  $data['berita_image'] = $gambar;
    $data['slug'] = str_replace(' ', '-', strtolower($data['berita_judul']));
    $data['slug'] = preg_replace('/[^A-Za-z0-9\- ]/', '',  $data['slug']);
    $this->db->where('berita_id', $data['berita_id']);
  
    $this->db->update('tbl_berita', DataStructure::slice($data, ['berita_tanggal','berita_judul','berita_judul_en',  'berita_isi', 'berita_isi_en', 'berita_image', 'topik_utama', 'jenis_berita', 'slug'], TRUE));
    ExceptionHandler::handleDBError($this->db->error(), "Edit Product gagal", "tbl_berita");

    // return $data['id_product'];
  }
  
  public function save_edit_pengumuman($data)
  {
    // $tmp = $data['berita_judul'];
    // $this->db->where('berita_id', $data['berita_id']);
  
    $this->db->update('papan_pengumuman', DataStructure::slice($data, ['pengumuman', 'pengumuman_en','act'], TRUE));
    ExceptionHandler::handleDBError($this->db->error(), "Edit Product gagal", "papan_pengumuman");

    // return $data['id_product'];
  }

  function simpan_berita($data, $gambar)
  {
    $data['slug'] = str_replace(' ', '-', strtolower($data['berita_judul']));
    $data['slug'] = preg_replace('/[^A-Za-z0-9\- ]/', '',  $data['slug']);
    $data['berita_image'] = $gambar;
    // $hsl=$this->db->query("INSERT INTO tbl_berita (berita_judul,berita_isi,berita_image) VALUES ('$jdl','$berita','$gambar')");
    // return $hsl;

    $this->db->insert('tbl_berita', DataStructure::slice($data, ['berita_tanggal','berita_judul','berita_judul_en',  'berita_isi', 'berita_isi_en', 'berita_image', 'topik_utama', 'jenis_berita', 'slug']));
    ExceptionHandler::handleDBError($this->db->error(), "Tambah Berita gagal", "tbl_berita");

    return $this->db->insert_id();
  }

  function get_berita_by_kode($filter)
  {
    // $hsl=$this->db->query("SELECT * FROM tbl_berita WHERE berita_id='$kode'");
    $this->db->select('*');
    $this->db->from("tbl_berita");
    $this->db->order_by('berita_id', 'desc');
    if (!empty($filter)) $this->db->where('berita_id', $filter);
    $res = $this->db->get();

    return DataStructure::keyValue($res->result_array(), 'berita_id');
  }

  function getPapanPengumuman()
  {
    // $hsl=$this->db->query("SELECT * FROM tbl_berita WHERE berita_id='$kode'");
    $this->db->select('*');
    $this->db->from("papan_pengumuman");
    $res = $this->db->get();
    // $res = $res->result_array();
// var_dump($res);
    return $res->result_array()[0];
  }


  function getSlug($filter)
  {
    $filter = str_replace('_', '-', strtolower($filter));
    // $hsl=$this->db->query("SELECT * FROM tbl_berita WHERE berita_id='$kode'");
    $this->db->select('*');
    $this->db->from("tbl_berita as tb");
    $this->db->join('jenis_berita as jb', 'jb.id_jenis_berita = tb.jenis_berita');
    $this->db->order_by('berita_id', 'desc');
    if (!empty($filter)) $this->db->where('slug', $filter);
    $res = $this->db->get();

    $res = $res->result_array();
    if (!empty($res[0])) {

      return $res[0];
    } else {
      throw new UserException("Berita yang kamu cari tidak ditemukan", USER_NOT_FOUND_CODE);
    }
  }



  function get_all_berita()
  {
    $hsl = $this->db->query("SELECT * FROM tbl_berita ORDER BY berita_id DESC");
    return $hsl;
  }

  public function getAllPage($filter = [])
  {
    $this->db->select('count(*) as page');
    $this->db->from("tbl_berita as tb");
    // $this->db->join('jenis_berita as jb','jb.id_jenis_berita = tb.jenis_berita');
    $this->db->order_by('berita_id', 'desc');
    if (!empty($filter['all_topik_utama'])) {
      $this->db->where('topik_utama', '2');
    }

    if (!empty($filter['all_berita_lainnya'])) {
      $this->db->where('jenis_berita', '1');
    }

    if (!empty($filter['all_kegiatan'])) {
      $this->db->where('jenis_berita', '3');
    }

    if (!empty($filter['all_pengumuman'])) {
      $this->db->where('jenis_berita', '2');
    }

    if (!empty($filter['prestasi'])) {
      $this->db->where('jenis_berita', '4');
    }

    if (!empty($filter['fasilitas'])) {
      $this->db->where('jenis_berita', '7');
    }

    if (!empty($filter['calendar'])) {
      $this->db->where('jenis_berita', '5');
    }
    if (!empty($filter['guide'])) {
      $this->db->where('jenis_berita', '6');
    }

    if (!empty($filter['research'])) {
      $this->db->where('jenis_berita', '8');
    }


    
    if (!empty($filter['clue'])) {
      $this->db->where('berita_judul like "%'.$filter['clue'].'%" || berita_isi like "%'.$filter['clue'].'%" || berita_judul_en like "%'.$filter['clue'].'%" || berita_isi_en like "%'.$filter['clue'].'%" ');
    }
  

    $res = $this->db->get();
    $res = $res->result_array();

    return $res[0];
  }

  public function search($filter)
	{
		$this->db->select("*");
    $this->db->from('tbl_berita as u');
    $this->db->join('jenis_berita as jb', 'jb.id_jenis_berita = u.jenis_berita');
    $this->db->order_by('berita_id', 'desc');
            $this->db->where('u.berita_judul like "%'.$filter['clue'].'%" || u.berita_isi like "%'.$filter['clue'].'%" || u.berita_judul_en like "%'.$filter['clue'].'%" || u.berita_isi_en like "%'.$filter['clue'].'%" ');

            if (!empty($filter['page'])) {
              $page = ($filter['page'] * 6) - 6;
            } else {
              $page = 0;
            }
            $this->db->limit(6, $page);

            $res = $this->db->get();
            return $res->result_array();
      
    }

    
    public function getAllRecent($filter = [])
  {
    $this->db->select('tb.berita_id, tb.berita_judul, tb.berita_judul_en , tb.slug, jb.nama_jenis_berita,  jb.nama_jenis_berita_en');
    $this->db->from("tbl_berita as tb");
    $this->db->join('jenis_berita as jb', 'jb.id_jenis_berita = tb.jenis_berita');
    $this->db->limit(3);
    $this->db->order_by('tb.berita_id', 'desc');
    $res = $this->db->get();
    return $res->result_array();
  }


  public function getAll($filter = [])
  {
    $this->db->select('*');
    $this->db->from("tbl_berita as tb");
    $this->db->join('jenis_berita as jb', 'jb.id_jenis_berita = tb.jenis_berita');
    $this->db->order_by('berita_tanggal', 'desc');
    if (!empty($filter['berita_id'])) $this->db->where('berita_id', $filter['berita_id']);
    if (!empty($filter['id_jenis_berita'])) $this->db->where('jenis_berita', $filter['id_jenis_berita']);
    if (!empty($filter['topik_utama'])) {
      $this->db->where('topik_utama', '2');
      $this->db->limit(6);
    };
    // int $page = 0;
    if (!empty($filter['all_topik_utama'])){
      $this->db->where('topik_utama', '2');
      if (!empty($filter['page'])) {
        $page = ($filter['page'] * 5) - 5;
      } else {
        $page = 0;
      }
      $this->db->limit(5, $page);
    };






    if (!empty($filter['all_berita_lainnya'])) {
      $this->db->where('jenis_berita', '1');
      if (!empty($filter['page'])) {
        $page = ($filter['page'] * 5) - 5;
      } else {
        $page = 0;
      }
      $this->db->limit(5, $page);
    }

    

    if (!empty($filter['prestasi'])) {
      $this->db->where('jenis_berita', '4');
      if (!empty($filter['page'])) {
        $page = ($filter['page'] * 5) - 5;
      } else {
        $page = 0;
      }
      $this->db->limit(5, $page);
    }


    if (!empty($filter['fasilitas'])) {
      $this->db->where('jenis_berita', '7');
      if (!empty($filter['page'])) {
        $page = ($filter['page'] * 5) - 5;
      } else {
        $page = 0;
      }
      $this->db->limit(5, $page);
    }

    if (!empty($filter['research'])) {
      $this->db->where('jenis_berita', '8');
      if (!empty($filter['page'])) {
        $page = ($filter['page'] * 5) - 5;
      } else {
        $page = 0;
      }
      $this->db->limit(5, $page);
    }


    
    if (!empty($filter['calendar'])) {
      $this->db->where('jenis_berita', '5');
      if (!empty($filter['page'])) {
        $page = ($filter['page'] * 5) - 5;
      } else {
        $page = 0;
      }
      $this->db->limit(5, $page);
    }
    if (!empty($filter['guide'])) {
      $this->db->where('jenis_berita', '6');
      if (!empty($filter['page'])) {
        $page = ($filter['page'] * 5) - 5;
      } else {
        $page = 0;
      }
      $this->db->limit(5, $page);
    }
    if (!empty($filter['all_kegiatan'])) {
      $this->db->where('jenis_berita', '3');
      if (!empty($filter['page'])) {
        $page = ($filter['page'] * 5) - 5;
      } else {
        $page = 0;
      }
      $this->db->limit(5, $page);
    }


 

    if (!empty($filter['all_pengumuman'])) {
      $this->db->where('jenis_berita', '2');
      if (!empty($filter['page'])) {
        $page = ($filter['page'] * 5) - 5;
      } else {
        $page = 0;
      }
      $this->db->limit(5, $page);
    }

    if (!empty($filter['berita_lainnya'])) {
      $this->db->where('jenis_berita', '1');
      $this->db->limit(5);
    }

    if (!empty($filter['kegiatan'])) {
      $this->db->where('jenis_berita', '3');
      $this->db->limit(5);
    }

    if (!empty($filter['pengumuman'])) {
      $this->db->where('jenis_berita', '2');
      $this->db->limit(5);
    }

    $res = $this->db->get();
    return $res->result_array();
    // return DataStructure::keyValue($res->result_array(), 'berita_id');
  }

  public function get($id = NULL)
  {
    $row = $this->getAll(['berita_id' => $id]);
    if (empty($row)) {
      throw new UserException("Berita yang kamu cari tidak ditemukan", USER_NOT_FOUND_CODE);
    }
    return $row[0];
  }

  public function add($data)
  {
    $this->db->insert('product', DataStructure::slice($data, ['id_perusahaan']));
    ExceptionHandler::handleDBError($this->db->error(), "Tambah Product gagal", "product");

    return $this->db->insert_id();
  }

  public function edit($data)
  {
    $this->db->where('id_product', $data['id_product']);
    $this->db->set('cover_product', !empty($data['cover_product']) ? $data['cover_product'] : NULL);
    $this->db->set('attachment_product', !empty($data['attachment_product']) ? $data['attachment_product'] : NULL);
    $this->db->update('product', DataStructure::slice($data, ['nama_product', 'deskripsi_product'], TRUE));
    ExceptionHandler::handleDBError($this->db->error(), "Edit Product gagal", "product");

    return $data['id_product'];
  }

  public function delete($data)
  {
    $this->db->where('berita_id', $data['berita_id']);
    $this->db->delete('tbl_berita');

    ExceptionHandler::handleDBError($this->db->error(), "Hapus News Post", "News");
  }
}

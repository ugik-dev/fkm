<?php
class MenuModel extends CI_Model
{

  public function save_edit_post($data)
  {
    $this->db->where('id_menu', $data['id_menu']);

    $this->db->update('menu', DataStructure::slice($data, ['berita_judul', 'berita_judul_en',  'berita_isi', 'berita_isi_en', 'tipe', 'parent', 'url'], TRUE));
    ExceptionHandler::handleDBError($this->db->error(), "Edit Product gagal", "menu");

    // return $data['id_product'];
  }

  function simpan_berita($data, $gambar)
  {
    $data['slug'] = str_replace(' ', '-', strtolower($data['berita_judul']));
    $data['berita_image'] = $gambar;
    // $hsl=$this->db->query("INSERT INTO menu (berita_judul,berita_isi,berita_image) VALUES ('$jdl','$berita','$gambar')");
    // return $hsl;

    $this->db->insert('menu', DataStructure::slice($data, ['berita_judul', 'berita_judul_en',  'berita_isi', 'berita_isi_en', 'berita_image', 'topik_utama', 'jenis_berita', 'slug']));
    ExceptionHandler::handleDBError($this->db->error(), "Tambah Berita gagal", "menu");

    return $this->db->insert_id();
  }

  function get_berita_by_kode($filter)
  {
    // $hsl=$this->db->query("SELECT * FROM menu WHERE berita_id='$kode'");
    $this->db->select('*');
    $this->db->from("menu");
    $this->db->order_by('berita_id', 'desc');
    if (!empty($filter)) $this->db->where('berita_id', $filter);
    $res = $this->db->get();

    return DataStructure::keyValue($res->result_array(), 'berita_id');
  }

  function getSlug($filter)
  {
    $filter = str_replace('_', '-', strtolower($filter));
    // $hsl=$this->db->query("SELECT * FROM menu WHERE berita_id='$kode'");
    $this->db->select('*');
    $this->db->from("menu as tb");
    // $this->db->join('jenis_berita as jb', 'jb.id_jenis_berita = tb.jenis_berita');
    // $this->db->order_by('berita_id', 'desc');
    if (!empty($filter)) $this->db->where('slug', $filter);
    $res = $this->db->get();

    $res = $res->result_array();
    if (!empty($res[0])) {
      return $res[0];
    } else {
      throw new UserException("Menu yang kamu cari tidak ditemukan", USER_NOT_FOUND_CODE);
    }
  }



  function get_all_berita()
  {
    $hsl = $this->db->query("SELECT * FROM menu ORDER BY berita_id DESC");
    return $hsl;
  }

  public function getAllPage($filter = [])
  {
    $this->db->select('count(*) as page');
    $this->db->from("menu as tb");
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

    if (!empty($filter['calendar'])) {
      $this->db->where('jenis_berita', '5');
    }
    if (!empty($filter['guide'])) {
      $this->db->where('jenis_berita', '6');
    }

    $res = $this->db->get();
    $res = $res->result_array();

    return $res[0];
  }

  public function getAll($filter = [])
  {
    if (!empty($filter['simpels'])) {
      $this->db->select('berita_judul, berita_judul_en, tipe, url, deleteable, id_menu, parent');
    } else {
      $this->db->select('*');
    }
    $this->db->from("menu as tb");
    // $this->db->join('jenis_berita as jb', 'jb.id_jenis_berita = tb.jenis_berita');
    // $this->db->order_by('berita_id', 'desc');
    if (!empty($filter['id_menu'])) $this->db->where('id_menu', $filter['id_menu']);
    // if (!empty($filter['id_jenis_berita'])) $this->db->where('jenis_berita', $filter['id_jenis_berita']);
    if (!empty($filter['topik_utama'])) {
      $this->db->where('topik_utama', '2');
      $this->db->limit(3);
    };
    // int $page = 0;
    if (!empty($filter['all_topik_utama'])) {
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
    $row = $this->getAll(['id_menu' => $id]);
    if (empty($row)) {
      throw new UserException("Berita yang kamu cari tidak ditemukan", USER_NOT_FOUND_CODE);
    }
    return $row[0];
  }

  function add($data, $gambar)
  {
    // $data['slug'] = str_replace(' ', '-', strtolower($data['berita_judul']));
    // $data['slug'] = preg_replace('/[^A-Za-z0-9\-]/', '',  $data['slug']);
    // $hsl=$this->db->query("INSERT INTO tbl_berita (berita_judul,berita_isi,berita_image) VALUES ('$jdl','$berita','$gambar')");
    // return $hsl;

    $this->db->insert('menu', DataStructure::slice($data, ['berita_tanggal', 'berita_judul', 'berita_judul_en',  'berita_isi', 'berita_isi_en', 'tipe', 'url', 'parent', 'slug']));
    ExceptionHandler::handleDBError($this->db->error(), "Tambah Berita gagal", "tbl_berita");

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
    $this->db->where('id_menu', $data['id_menu']);
    $this->db->delete('menu');
    ExceptionHandler::handleDBError($this->db->error(), "Hapus News Post", "News");
  }
}

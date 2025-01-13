<?php

namespace App\Models;

use CodeIgniter\Model;

class GaleriModels extends Model
{
    protected $table = 'tbl_galeri';
    protected $primaryKey = 'id_galeri';
    protected $allowedFields = ['foto', 'judul_foto'];

    public function data_galeri($id_galeri)
    {
        return $this->find($id_galeri);
    }

    public function update_data($data, $id_galeri)
    {
        $query = $this->db->table($this->table)->update(
            $data,
            array('id_galeri' => $id_galeri)
        );
        return $query;
    }
    public function delete_galeri($id_galeri)
    {
        $query = $this->db->table($this->table)->delete(array('id_galeri' => $id_galeri));
        return $query;
    }
}

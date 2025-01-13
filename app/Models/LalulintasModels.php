<?php

namespace App\Models;

use CodeIgniter\Model;

class LalulintasModels extends Model
{
    protected $table = 'tbl_lalin';
    protected $primaryKey = 'id_lalin';
    protected $allowedFields = ['foto_lalin', 'judul', 'deskripsi', 'kategori'];

    public function data_lalin($id_lalin)
    {
        return $this->find($id_lalin);
    }

    public function update_data($data, $id_lalin)
    {
        $query = $this->db->table($this->table)->update(
            $data,
            array('id_lalin' => $id_lalin)
        );
        return $query;
    }
    public function delete_lalin($id_lalin)
    {
        $query = $this->db->table($this->table)->delete(array('id_lalin' => $id_lalin));
        return $query;
    }
}

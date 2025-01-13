<?php

namespace App\Models;

use CodeIgniter\Model;

class kesehatanModels extends Model
{
    protected $table = 'tbl_kesehatan';
    protected $primaryKey = 'id_kes';
    protected $allowedFields = ['foto_kes', 'judul', 'deskripsi', 'kategori'];

    public function data_kesehatan($id_kes)
    {
        return $this->find($id_kes);
    }

    public function update_data($data, $id_kes)
    {
        $query = $this->db->table($this->table)->update(
            $data,
            array('id_kes' => $id_kes)
        );
        return $query;
    }
    public function delete_kesehatan($id_kes)
    {
        $query = $this->db->table($this->table)->delete(array('id_kes' => $id_kes));
        return $query;
    }
}

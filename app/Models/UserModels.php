<?php

namespace App\Models;

use CodeIgniter\Model;

class userModels extends Model
{
    protected $table = 'tbl_user';
    protected $primaryKey = 'id_user';
    protected $allowedFields = ['nama', 'email', 'username', 'password', 'userfile'];

    public function data_user($id_user)
    {
        return $this->find($id_user);
    }

    public function update_data($data, $id_user)
    {
        $query = $this->db->table($this->table)->update(
            $data,
            array('id_user' => $id_user)
        );
        return $query;
    }
    public function delete_data($id_user)
    {
        $query = $this->db->table($this->table)->delete(array('id_user' => $id_user));
        return $query;
    }
}

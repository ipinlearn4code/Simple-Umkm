<?php

namespace App\Models;

use CodeIgniter\Model;

class JenisUsahaModel extends Model
{
    protected $table = 'jenis_usaha';
    protected $primaryKey = 'id_usaha';
    protected $allowedFields = ['nama_jenis_usaha'];
    public function createJenisUsaha($data)
    {
        $this->insert($data);
    }

    public function getAllJenisUsaha()
    {
        return $this->findAll();
    }

    public function getJenisUsahaById($id)
    {
        return $this->find($id);
    }
    public function updateJenisUsaha($id, $data)
    {
        $this->update($id, $data);
    }
    public function deleteJenisUsaha($id)
    {
        $this->delete($id);
    }

}

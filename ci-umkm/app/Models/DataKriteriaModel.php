<?php

namespace App\Models;

use CodeIgniter\Model;

class DataKriteriaModel extends Model
{
    protected $table = 'data_kriteria';
    protected $primaryKey = 'id';
    protected $allowedFields = ['kode_kriteria', 'nama_kriteria', 'nama_bobot', 'nilai_bobot'];
    public function createDataKriteria($data)
    {
        $this->insert($data);
    }
    public function getAllDataKriteria()
    {
        return $this->findAll();
    }
    
    public function getDataKriteriaById($id)
    {
        return $this->find($id);
    }
    public function updateDataKriteria($id, $data)
    {
        $this->update($id, $data);
    }
    public function deleteDataKriteria($id)
    {
        $this->delete($id);
    }
                
}

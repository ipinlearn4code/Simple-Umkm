<?php

namespace App\Models;

use CodeIgniter\Model;
use Kint\Parser\ToStringPlugin;

class DataBobotModel extends Model
{
    protected $table = 'data_bobot';
    protected $primaryKey = 'id';
    protected $allowedFields = ['kode_kriteria', 'nama_kriteria', 'nilai_kriteria', 'tipe_kriteria'];
    public function createDataBobot($data)
    {
        $this->insert($data);
    }
    public function getAllDataBobot()
    {
        $dataaa = $this->findAll();
        if (!empty($dataaa)) {
            return $dataaa;
        } else {
            return view('welcome_message');
        }
        // return $this->findAll();
    }
    
    public function getDataBobotById($id)
    {
        return $this->find($id);
    }
    public function updateDataBobot($id, $data)
    {
        $this->update($id, $data);
    }
    public function deleteDataBobot($id)
    {
        $this->delete($id);
    }
                
}

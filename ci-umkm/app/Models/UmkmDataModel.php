<?php
namespace App\Models;

use CodeIgniter\Model;

class UmkmDataModel extends Model
{
    protected $table = 'umkm_data';
    protected $primaryKey = 'id_umkm';
    protected $allowedFields = ['nama_usaha', 'nama_pimpinan', 'jalan', 'desa', 'kecamatan', 'jenis_usaha_id'];

    public function createUmkmData($data)
    {
        $this->insert($data);
    }

    public function getAllUmkmData()
    {
        // Perform a join between umkm_data and jenis_usaha
        return $this->select('umkm_data.*, jenis_usaha.nama_jenis_usaha AS jenis_usaha')
            ->join('jenis_usaha', 'umkm_data.jenis_usaha_id = jenis_usaha.id_usaha')
            ->findAll();
    }

    // public function getUmkmDataById($id)
    // {
    //     // return $this->find($id);
    //     return $this->select('umkm_data.*,enis_usaha.nama_jenis_usaha AS jenis_usaha')
    //                 ->join('jenis_usaha', 'umkm_data.jenis_usaha_id =jenis_usaha.id_usaha')
    //                 ->where('umkm_data.id_umkm', $id);

    // }

    public function getUmkmDataById($id)
    {
        // Perform a join to get a single UMKM record by id_umkm with its corresponding jenis usaha
        return $this->select('umkm_data.*, jenis_usaha.nama_jenis_usaha AS jenis_usaha')
            ->join('jenis_usaha', 'umkm_data.jenis_usaha_id = jenis_usaha.id_usaha')
            ->where('umkm_data.id_umkm', $id)
            ->first();
    }

    public function updateUmkmData($id, $data)
    {
        $this->update($id, $data);
    }

    public function deleteUmkmData($id)
    {
        $this->delete($id);
    }
}


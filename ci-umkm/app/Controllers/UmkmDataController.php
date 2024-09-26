<?php

namespace App\Controllers;

use App\Models\UmkmDataModel;
use App\Models\JenisUsahaModel;
use CodeIgniter\Controller;

class UmkmDataController extends BaseController
{
    protected $umkmDataModel;
    protected $jenisUsahaModel;

    public function __construct()
    {
        $this->umkmDataModel = new UmkmDataModel();
        $this->jenisUsahaModel = new JenisUsahaModel();

    }

    // Display all UMKM records
    public function index()
    {
        $data['umkm'] = $this->umkmDataModel->getAllUmkmData();
        return view('umkm_data/index', $data);
    }
    
    // Show form to create a new UMKM record
    public function create()
    {
        $data['jenis_usaha'] = $this->jenisUsahaModel->getAllJenisUsaha();
        return view('umkm_data/create', $data);
    }

    // Store a new UMKM record
    public function store()
    {
        $this->umkmDataModel->save([
            'nama_usaha' => $this->request->getPost('nama_usaha'),
            'nama_pimpinan' => $this->request->getPost('nama_pimpinan'),
            'jalan' => $this->request->getPost('jalan'),
            'desa' => $this->request->getPost('desa'),
            'kecamatan' => $this->request->getPost('kecamatan'),
            'jenis_usaha_id' => $this->request->getPost('jenis_usaha_id')
        ]);

        return redirect()->to('/');
    }

    // Edit a UMKM record
    // public function edit($id)
    // {
    //     $data['umkm'] = $this->umkmDataModel->find($id);
    //     // $data['jenis_usaha'] = $this->jenisUsahaModel->findAll();
    //     return view('umkm_data/edit', $data);
    // }
    public function edit($id)
{
    $data['umkm'] = $this->umkmDataModel->find($id);
    
    // Fetch all 'jenis_usaha' options
    $data['jenis_usaha'] = $this->jenisUsahaModel->getAllJenisUsaha();
    
    return view('umkm_data/edit', $data);
}

    // Update UMKM record
    public function update($id)
    {
        $this->umkmDataModel->update($id, [
            'nama_usaha' => $this->request->getPost('nama_usaha'),
            'nama_pimpinan' => $this->request->getPost('nama_pimpinan'),
            'jalan' => $this->request->getPost('jalan'),
            'desa' => $this->request->getPost('desa'),
            'kecamatan' => $this->request->getPost('kecamatan'),
            'jenis_usaha_id' => $this->request->getPost('jenis_usaha_id')
        ]);

        return redirect()->to('/');
    }

    // Delete UMKM record
    public function delete($id)
    {
        $this->umkmDataModel->delete($id);
        return redirect()->to('/');
    }
}

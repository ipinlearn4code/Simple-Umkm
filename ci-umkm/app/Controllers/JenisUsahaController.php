<?php

namespace App\Controllers;

use App\Models\JenisUsahaModel;
use CodeIgniter\Controller;

class JenisUsahaController extends BaseController
{
    protected $jenisUsahaModel;

    public function __construct()
    {
        $this->jenisUsahaModel = new JenisUsahaModel();
    }

    // Display all records
    public function index()
    {
        $data['jenis_usaha'] = $this->jenisUsahaModel->findAll();
        return view('jenis_usaha/index', $data);
    }

    // Show form to create a new record
    public function create()
    {
        return view('jenis_usaha/create');
    }

    // Save the new record
    public function store()
    {
        $this->jenisUsahaModel->save([
            'nama_jenis_usaha' => $this->request->getPost('nama_jenis_usaha')
        ]);

        return redirect()->to('/');
    }

    // Edit a record
    public function edit($id)
    {
        $data['jenis_usaha'] = $this->jenisUsahaModel->find($id);
        return view('jenis_usaha/edit', $data);
    }

    // Update the record
    // public function update($id)
    // {
    //     $this->jenisUsahaModel->update($id, [
    //         'nama_jenis_usaha' => $this->request->getPost('nama_jenis_usaha')
    //     ]);

    //     return redirect()->to('/jenis_usaha');
    // }
    public function update($id)
    {
        // Correct the usage of getPost
        $this->jenisUsahaModel->update($id, [
            'nama_jenis_usaha' => $this->request->getPost('nama_jenis_usaha')
        ]);

        return redirect()->to('/');
    }


    // Delete a record
    public function delete($id)
    {
        $this->jenisUsahaModel->delete($id);
        return redirect()->to('/');
    }
}

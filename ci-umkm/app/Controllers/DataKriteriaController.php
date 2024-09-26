<?php

namespace App\Controllers;

use App\Models\DataKriteriaModel;
use CodeIgniter\Controller;

class DataKriteriaController extends BaseController
{
    protected $dataKriteriaModel;

    public function __construct()
    {
        $this->dataKriteriaModel = new DataKriteriaModel();
    }

    // Display all records
    public function index()
    {
        $data['data_kriteria'] = $this->dataKriteriaModel->getAllDataKriteria();
        return view('data_kriteria/index', $data);
    }

    // Show form to create a new record
    public function create()
    {
        return view('data_kriteria/create');
    }

    // Store a new record
    public function store()
    {
        $this->dataKriteriaModel->save([
            'kode_kriteria' => $this->request->getPost('kode_kriteria'),
            'nama_kriteria' => $this->request->getPost('nama_kriteria'),
            'nama_bobot' => $this->request->getPost('nama_bobot'),
            'nilai_bobot' => $this->request->getPost('nilai_bobot')
        ]);

        return redirect()->to('/');
    }

    // Edit a record
    public function edit($id)
    {
        $data['data_kriteria'] = $this->dataKriteriaModel->find($id);
        return view('data_kriteria/edit', $data);
    }

    // Update a record
    public function update($id)
    {
        $this->dataKriteriaModel->update($id, [
            'kode_kriteria' => $this->request->getPost('kode_kriteria'),
            'nama_kriteria' => $this->request->getPost('nama_kriteria'),
            'nama_bobot' => $this->request->getPost('nama_bobot'),
            'nilai_bobot' => $this->request->getPost('nilai_bobot')
        ]);

        return redirect()->to('/');
    }

    // Delete a record
    public function delete($id)
    {
        $this->dataKriteriaModel->delete($id);
        return redirect()->to('/');
    }
}

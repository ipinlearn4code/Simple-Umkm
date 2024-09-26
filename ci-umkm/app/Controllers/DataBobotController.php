<?php

namespace App\Controllers;

use App\Models\DataBobotModel;
use CodeIgniter\Controller;

class DataBobotController extends BaseController
{
    protected $dataBobotModel;

    public function __construct()
    {
        $this->dataBobotModel = new DataBobotModel();
    }

    // Display all records  
    public function index()
    {
        $dataBobot['data_bobot'] = $this->dataBobotModel->getAllDataBobot();
        return view('data_bobot/index', $dataBobot);
        // return view('data_bobot/index', $dataBobot);
    }

    // Show form to create a new record
    public function create()
    {
        return view('data_bobot/create');
    }

    // Store a new record
    public function store()
    {
        $this->dataBobotModel->save([
            'kode_kriteria' => $this->request->getPost('kode_kriteria'),
            'nama_kriteria' => $this->request->getPost('nama_kriteria'),
            'nilai_kriteria' => $this->request->getPost('nilai_kriteria'),
            'tipe_kriteria' => $this->request->getPost('tipe_kriteria')
        ]);

        return redirect()->to('/');
    }

    // Edit a record
    public function edit($id)
    {
        $data['data_bobot'] = $this->dataBobotModel->find($id);
        return view('data_bobot/edit', $data);
    }

    // Update a record
    public function update($id)
    {
        $this->dataBobotModel->update($id, [
            'kode_kriteria' => $this->request->getPost('kode_kriteria'),
            'nama_kriteria' => $this->request->getPost('nama_kriteria'),
            'nilai_kriteria' => $this->request->getPost('nilai_kriteria'),
            'tipe_kriteria' => $this->request->getPost('tipe_kriteria')
        ]);

        return redirect()->to('/');
    }

    // Delete a record
    public function delete($id)
    {
        $this->dataBobotModel->delete($id);
        return redirect()->to('/');
    }
}

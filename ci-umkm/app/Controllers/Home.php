<?php

namespace App\Controllers;

use App\Models\DataBobotModel;
use App\Models\DataKriteriaModel;
use App\Models\JenisUsahaModel;
use App\Models\UmkmDataModel;

class Home extends BaseController
{
    public function index(): string
    {
        // Instantiate the model
        // $model = new UmkmDataModel();
        // $data['data_kriteria'] = $model->getAllDataKriteria();
        // return view('data_kriteria/index', $data);
        
        echo redirect()->to('UmkmDataController/');
        // $data['umkm'] = $model->getAllUmkmData();
        // return view('umkm_data/index', $data);
    }
}

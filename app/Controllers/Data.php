<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DataModel;
use App\Models\MasterDataModel;

class Data extends BaseController
{
    public function __construct()
    {
        helper('form');
    }
    public function index()
    {
        $dataModel= new DataModel();

        $data= $dataModel->select('*')
        ->join('master_data', 'data.id_master_data=master_data.id')
                ->join('kode_wilayah', 'data.kode_wilayah=kode_wilayah.kode_wilayah')
                ->orderBy('data.id_master_data','asc')
                ->get();

        return view('data/index',[
            'data'=>$data,
        ]);
    }
    public function import()
    {
        if ($this->request->getPost()) {
            $fileName = $_FILES["csv"]["tmp_name"];
    
            if ($_FILES['csv']['size'] > 0) {
                $file = fopen($fileName, "r");
    
                if ($file) {
                    $modelMasterData = new MasterDataModel();
                    $dataMaster = [
                        'nama' => $this->request->getPost('nama')
                    ];
    
                    $modelMasterData->save($dataMaster);
                    $id_masterData = $modelMasterData->insertID();
                    $modelData = new DataModel();
                    $builder = $modelData->builder();
                    $data = array();
    
                    while (!feof($file)) {
                        $column = fgetcsv($file, 1000, ",");
    
                        // Check if $column is an array before accessing its elements
                        if (is_array($column) && count($column) >= 2) {
                            $kode_wilayah = $column[0];
                            $nilai = $column[1];
    
                            $row = [
                                'id_master_data' => $id_masterData,
                                'kode_wilayah' => $kode_wilayah,
                                'nilai' => $nilai,
                            ];
    
                            array_push($data, $row);
                        }
                    }
    
                    // Check if any data is collected before attempting to insert into the database
                    if (!empty($data)) {
                        $builder->insertBatch($data);
                    }
    
                    fclose($file);
                } else {
                    // Handle the case where the file couldn't be opened
                    die("Unable to open the file");
                }
            }
    
            return redirect()->to(site_url('Data/index'));
        }
    
        return view('data/import');
    }
}

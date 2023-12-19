<?php

namespace App\Controllers;
 
use App\Controllers\BaseController;

class KodeWilayah extends BaseController
{
    public function __construct(){
        helper('form');
    }
    public function index()
    {
        $model = new \App\Models\KodeWilayahModel();
        $kodeWilayah = $model->findAll();

        return view('kode_wilayah/index',[
            'kodeWilayah'=> $kodeWilayah,
        ]);
    }
    public function import()
    {
        if ($this->request->getPost()) {
            $fileName = $_FILES["csv"]["tmp_name"];
    
            if ($_FILES['csv']['size'] > 0) {
                $file = fopen($fileName, "r");
    
                if ($file) {
                    $model = new \App\Models\KodeWilayahModel();
                    $builder = $model->builder();
                    $data = array();
    
                    while (!feof($file)) {
                        $column = fgetcsv($file, 1000, ";");
    
                        // Check if $column is an array before accessing its elements
                        if (is_array($column)) {
                            $kode_wilayah = $column[0];
                            $nama_wilayah = $column[1];
    
                            $row = [
                                'kode_wilayah' => $kode_wilayah,
                                'nama_wilayah' => $nama_wilayah,
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
    
            return redirect()->to(site_url('KodeWilayah/index'));
        }
    
        return view('kode_wilayah/import');
    }
}

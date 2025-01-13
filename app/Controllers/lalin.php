<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use CodeIgniter\Files\File;

use App\Models\lalulintasModels;

class lalin extends BaseController
{
    protected $lalulintasModels;
    public function __construct()
    {
        $this->lalulintasModels = new lalulintasmodels();
    }

    // deklarasi function index
    public function index()
    {

        // memanggil data lalulintasModels() = get data dari lalulintas
        $lalulintas = $this->lalulintasModels->findAll();
        $bpop = $this->lalulintasModels->orderBy("pelihat", "DESC")->limit(4)->find();
        $bbaru = $this->lalulintasModels->orderBy("tanggal", "DESC")->limit(3)->find();

        // menyimpan data kedalam array
        $data = [
            'title' => 'Data Berita lalin',
            'lalulintas' => $lalulintas,
            'bpop' => $bpop,
            'bbaru' => $bbaru,
        ];

        // manggil view lalulintas berserta database lalulintas
        return view('pages/frontend/lalin', $data);
    }
    function detail($id_lalulintas)
    {
        $lalulintas = $this->lalulintasModels->find($id_lalulintas);
        $pelihat = ++$lalulintas['pelihat'];
        $this->lalulintasModels->update_data(['pelihat' => $pelihat], $id_lalulintas);
        $data = [
            'title' => 'Data Berita',
            'lalulintas' => $lalulintas,
        ];
        return view('pages/frontend/lalulintas/detail_lalin', $data);
    }
}

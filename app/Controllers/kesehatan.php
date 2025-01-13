<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use CodeIgniter\Files\File;

use App\Models\kesehatanModels;

class kesehatan extends BaseController
{
    protected $kesehatanModels;
    public function __construct()
    {
        $this->kesehatanModels = new kesehatanmodels();
    }

    // deklarasi function index
    public function index()
    {

        // memanggil data kesehatanModels() = get data dari kesehatan
        $kesehatan = $this->kesehatanModels->findAll();
        $bpop = $this->kesehatanModels->orderBy("pelihat", "DESC")->limit(4)->find();
        $kbaru = $this->kesehatanModels->orderBy("tanggal", "DESC")->limit(3)->find();

        // menyimpan data kedalam array
        $data = [
            'title' => 'Data Berita kesehatan',
            'kesehatan' => $kesehatan,
            'bpop' => $bpop,
            'kbaru' => $kbaru,
        ];

        // manggil view kesehatan berserta database kesehatan
        return view('pages/frontend/kesehatan', $data);
    }
    function detail($id_kesehatan)
    {
        $kesehatan = $this->kesehatanModels->find($id_kesehatan);
        $pelihat = ++$kesehatan['pelihat'];
        $this->kesehatanModels->update_data(['pelihat' => $pelihat], $id_kesehatan);
        $data = [
            'title' => 'Data Berita',
            'kesehatan' => $kesehatan,
        ];
        return view('pages/frontend/kesehatan/detail_kesehatan', $data);
    }
}

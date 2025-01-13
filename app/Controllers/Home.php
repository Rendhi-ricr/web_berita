<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\kesehatanModels;
use App\Models\lalulintasModels;


class Home extends BaseController
{
    protected $galeriModels, $kesehatanModels, $lalulintasModels;
    public function __construct()
    {
        $this->kesehatanModels = new kesehatanModels();
        $this->lalulintasModels = new lalulintasModels();
    }


    public function index()
    {
        $kesehatan = $this->kesehatanModels->orderBy("tanggal", "DESC")->limit(6)->find();
        $lalulintas = $this->lalulintasModels->orderBy("tanggal", "DESC")->limit(6)->find();
        $banner2 = $this->kesehatanModels->orderBy("tanggal", "DESC")->limit(2)->find();
        $banner1 = $this->lalulintasModels->orderBy("tanggal", "DESC")->limit(2)->find();
        $data = [
            'title' => 'Data Berita',
            'kesehatan' => $kesehatan,
            'lalulintas' => $lalulintas,
            'banner1' => $banner1,
            'banner2' => $banner2,
        ];
        return view('pages/frontend/index', $data);
    }
}

<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use CodeIgniter\Files\File;

use App\Models\GaleriModels;

class galeri extends BaseController
{
    protected $galeriModels;
    public function __construct()
    {
        $this->galeriModels = new GaleriModels();
    }

    // deklarasi function index
    public function index()
    {

        // memanggil data fasilitasModels() = get data dari fasilitas
        $galeri = $this->galeriModels->findAll();;

        // menyimpan data kedalam array
        $data = [
            'title' => 'Data Galeri',
            'galeri' => $galeri
        ];

        // manggil view fasilitas berserta database fasilitas
        return view('pages/frontend/galeri', $data);
    }
}

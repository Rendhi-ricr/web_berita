<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;
use App\Models\GaleriModels;
use App\Models\kesehatanModels;
use App\Models\LalulintasModels;


class home extends BaseController
{
    function __construct()
    {
        if (!session('id_user')) {
            return redirect()->to('login');
        }
    }
    public function index()
    {

        $galeri = count(model(GaleriModels::class)->findAll());
        $kes = count(model(kesehatanModels::class)->findAll());
        $lalin = count(model(LalulintasModels::class)->findAll());
        $data = [
            'galeri' => $galeri,
            'kesehatan' => $kes,
            'lalulintas' => $lalin,
        ];
        return view('pages/backend/index', $data);
    }
}

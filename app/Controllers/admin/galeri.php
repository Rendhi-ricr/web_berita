<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;

use CodeIgniter\Files\File;

use App\Models\galeriModels;

class galeri extends BaseController
{
    protected $galeriModels;
    public function __construct()
    {
        $this->galeriModels = new galeriModels();
    }

    public function index()
    {

        $galeri = $this->galeriModels->findAll();

        $data = [
            'title' => 'Data Berita',
            'galeri' => $galeri
        ];

        return view('pages/backend/galeri', $data);
    }

    public function tambah()
    {
        // membuat array untuk title windows = " tambah data berita"
        $data = ['title' => 'Tambah Data Galeri'];

        // retrive data array ke view tambah_berita
        return view('pages/backend/galeri/tambah', $data);
    }

    public function simpan()
    {

        // cek kebutuhan file
        $validationRule = [
            'foto' => [
                'label' => 'Image File',
                'rules' => [
                    'uploaded[foto]',
                    'is_image[foto]',
                ],
            ],
        ];


        $foto = $this->request->getFile('foto');


        if ($foto != null) {

            if (!$this->validate($validationRule)) {

                // tampil pesan error
                return redirect()->back()->with('errors', $this->validator->getErrors())->withInput();
            }

            // jika file nya ada dan inputkan
            // memindahkan file ke folder yang di tentukan
            if (!$foto->hasMoved()) {

                // ngambil nama file
                $fileName = $foto->getName();

                // echo $fileName;
                // mindahin file ke folder public/img/berita
                $foto->move(ROOTPATH . 'public/img/galeri', $fileName);
            } else {

                //echo $fileName;
                return redirect()->back()->with('errors', 'File sudah di pindahkan!');
            }
        }

        // beritaModels save() fungsi untuk menyimpan data
        $this->galeriModels->save([
            // judul diambil dari inputan dengan name="judul"
            'judul_foto' => $this->request->getVar('judulfoto'),
            'foto' => $fileName,
        ]);

        // mengakses halaman berita
        return redirect()->to('admin/galeri');
    }

    public function edit($id_galeri)
    {

        // mengakses beritaModels data_berita + id_berita
        $galeri = $this->galeriModels->data_galeri($id_galeri);

        // mengubah data kedalam array
        $data = [
            'title' => 'Edit Data berita',
            'galeri' => $galeri
        ];

        // retrive data kedalam view edit_berita + $data
        return view('pages/backend/galeri/edit', $data);
    }

    public function update()
    {

        $validationRule = [
            'foto' => [
                'label' => 'Image File',
                'rules' => [
                    'uploaded[foto]',
                    'is_image[foto]',
                ],
            ],
        ];

        $id_galeri = $this->request->getVar('id');
        $foto = $this->request->getFile('foto');

        $data = [
            'judul_foto' => $this->request->getVar('judulfoto'),
        ];

        if ($foto->getFilename() != null) {
            if (!$this->validate($validationRule)) {
                return redirect()->back()->with('errors', $this->validator->getErrors())->withInput();
            }
            $fileLama = $this->galeriModels->find($id_galeri)['foto'];
            $filePath = ROOTPATH . 'public/img/galeri/' . $fileLama;
            if (file_exists($filePath)) {
                unlink($filePath);
            }
            if (!$foto->hasMoved()) {
                $fileName = $foto->getName();
                $foto->move(ROOTPATH . 'public/img/galeri', $fileName);
            } else {
                return redirect()->back()->with('errors', 'File sudah di pindahkan!');
            }
            $data = [
                'judul_foto' => $this->request->getVar('judulfoto'),
                'foto' => $fileName,
            ];
        }
        // merubah data yang sudah ada
        $this->galeriModels->update_data($data, $id_galeri);
        return redirect()->to('admin/galeri');
    }

    public function delete($id_galeri)
    {

        // proses pengambilan data berita berdasarkan id_berita
        $galeri = $this->galeriModels->data_galeri($id_galeri);

        // nama file yang berada dikolom userfile
        $file = $galeri['foto'];

        // proses penghapusan file menggunakan fungsi unlink
        unlink('../public/img/galeri/' . $file);

        // penghapusan database
        $this->galeriModels->delete_galeri($id_galeri);

        // mengakses halaman berita
        return redirect()->to('admin/galeri');
    }
}

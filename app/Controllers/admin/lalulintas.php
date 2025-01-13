<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;

use CodeIgniter\Files\File;

use App\Models\LalulintasModels;

class lalulintas extends BaseController
{
    protected $LalulintasModels;
    public function __construct()
    {
        $this->LalulintasModels = new LalulintasModels();
    }

    public function index()
    {

        $lalin = $this->LalulintasModels->findAll();

        $data = [
            'title' => 'Data Berita',
            'lalin' => $lalin
        ];

        return view('pages/backend/lalin', $data);
    }

    public function tambah()
    {
        // membuat array untuk title windows = " tambah data berita"
        $data = ['title' => 'Tambah Data Berita lalin'];

        // retrive data array ke view tambah_berita
        return view('pages/backend/lalin/tambah', $data);
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
                $foto->move(ROOTPATH . 'public/img/lalin', $fileName);
            } else {

                //echo $fileName;
                return redirect()->back()->with('errors', 'File sudah di pindahkan!');
            }
        }

        // beritaModels save() fungsi untuk menyimpan data
        $this->LalulintasModels->save([
            // judul diambil dari inputan dengan name="judul"
            'judul' => $this->request->getVar('judulberita'),
            'deskripsi'  => $this->request->getVar('isiberita'),
            'kategori' => $this->request->getVar('kategori'),
            'foto_lalin' => $fileName,
        ]);

        // mengakses halaman berita
        return redirect()->to('admin/lalulintas');
    }

    public function edit($id_lalin)
    {

        // mengakses beritaModels data_berita + id_berita
        $lalin = $this->LalulintasModels->data_lalin($id_lalin);

        // mengubah data kedalam array
        $data = [
            'title' => 'Edit Data berita',
            'lalin' => $lalin
        ];

        // retrive data kedalam view edit_berita + $data
        return view('pages/backend/lalin/edit', $data);
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

        $id_lalin = $this->request->getVar('id');
        $foto = $this->request->getFile('foto');

        $data = [
            'judul' => $this->request->getVar('judulberita'),
            'deskripsi'  => $this->request->getVar('isiberita'),
            'kategori' => $this->request->getVar('kategori'),
        ];

        if ($foto->getFilename() != null) {
            if (!$this->validate($validationRule)) {
                return redirect()->back()->with('errors', $this->validator->getErrors())->withInput();
            }
            $fileLama = $this->LalulintasModels->find($id_lalin)['foto_lalin'];
            $filePath = ROOTPATH . 'public/img/lalin/' . $fileLama;
            if (file_exists($filePath)) {
                unlink($filePath);
            }
            if (!$foto->hasMoved()) {
                $fileName = $foto->getName();
                $foto->move(ROOTPATH . 'public/img/lalin', $fileName);
            } else {
                return redirect()->back()->with('errors', 'File sudah di pindahkan!');
            }
            $data = [
                'judul' => $this->request->getVar('judulberita'),
                'deskripsi'  => $this->request->getVar('isiberita'),
                'kategori' => $this->request->getVar('kategori'),
                'foto_lalin' => $fileName,
            ];
        }
        // merubah data yang sudah ada
        $this->LalulintasModels->update_data($data, $id_lalin);
        return redirect()->to('admin/lalulintas');
    }

    public function delete($id_lalin)
    {

        // proses pengambilan data berita berdasarkan id_berita
        $lalin = $this->LalulintasModels->data_lalin($id_lalin);

        // nama file yang berada dikolom userfile
        $file = $lalin['foto_lalin'];

        // proses penghapusan file menggunakan fungsi unlink
        unlink('../public/img/lalin/' . $file);

        // penghapusan database
        $this->LalulintasModels->delete_lalin($id_lalin);

        // mengakses halaman berita
        return redirect()->to('admin/lalulintas');
    }
}

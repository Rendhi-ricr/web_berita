<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;

use CodeIgniter\Files\File;

use App\Models\kesehatanModels;

class kesehatan extends BaseController
{
    protected $kesehatanModels;
    public function __construct()
    {
        $this->kesehatanModels = new kesehatanModels();
    }

    public function index()
    {

        $kesehatan = $this->kesehatanModels->findAll();

        $data = [
            'title' => 'Data Berita',
            'kesehatan' => $kesehatan
        ];

        return view('pages/backend/kesehatan', $data);
    }

    public function tambah()
    {
        // membuat array untuk title windows = " tambah data berita"
        $data = ['title' => 'Tambah Data Berita kesehatan'];

        // retrive data array ke view tambah_berita
        return view('pages/backend/kesehatan/tambah', $data);
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
                $foto->move(ROOTPATH . 'public/img/kesehatan', $fileName);
            } else {

                //echo $fileName;
                return redirect()->back()->with('errors', 'File sudah di pindahkan!');
            }
        }

        // beritaModels save() fungsi untuk menyimpan data
        $this->kesehatanModels->save([
            // judul diambil dari inputan dengan name="judul"
            'judul' => $this->request->getVar('judulberita'),
            'deskripsi'  => $this->request->getVar('isiberita'),
            'kategori' => $this->request->getVar('kategori'),
            'foto_kes' => $fileName,
        ]);

        // mengakses halaman berita
        return redirect()->to('admin/kesehatan');
    }

    public function edit($id_kesehatan)
    {

        // mengakses beritaModels data_berita + id_berita
        $kesehatan = $this->kesehatanModels->data_kesehatan($id_kesehatan);

        // mengubah data kedalam array
        $data = [
            'title' => 'Edit Data berita',
            'kesehatan' => $kesehatan
        ];

        // retrive data kedalam view edit_berita + $data
        return view('pages/backend/kesehatan/edit', $data);
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

        $id_kesehatan = $this->request->getVar('id');
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
            $fileLama = $this->kesehatanModels->find($id_kesehatan)['foto_kes'];
            $filePath = ROOTPATH . 'public/img/kesehatan/' . $fileLama;
            if (file_exists($filePath)) {
                unlink($filePath);
            }
            if (!$foto->hasMoved()) {
                $fileName = $foto->getName();
                $foto->move(ROOTPATH . 'public/img/kesehatan', $fileName);
            } else {
                return redirect()->back()->with('errors', 'File sudah di pindahkan!');
            }
            $data = [
                'judul' => $this->request->getVar('judulberita'),
                'deskripsi'  => $this->request->getVar('isiberita'),
                'kategori' => $this->request->getVar('kategori'),
                'foto_kes' => $fileName,
            ];
        }
        // merubah data yang sudah ada
        $this->kesehatanModels->update_data($data, $id_kesehatan);
        return redirect()->to('admin/kesehatan');
    }

    public function delete($id_kesehatan)
    {

        // proses pengambilan data berita berdasarkan id_berita
        $kesehatan = $this->kesehatanModels->data_kesehatan($id_kesehatan);

        // nama file yang berada dikolom userfile
        $file = $kesehatan['foto_kes'];

        // proses penghapusan file menggunakan fungsi unlink
        unlink('../public/img/kesehatan/' . $file);

        // penghapusan database
        $this->kesehatanModels->delete_kesehatan($id_kesehatan);

        // mengakses halaman berita
        return redirect()->to('admin/kesehatan');
    }
}

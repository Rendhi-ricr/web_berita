<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;

use CodeIgniter\Files\File;

use App\Models\userModels;

class User extends BaseController
{
    protected $userModels;
    public function __construct()
    {
        $this->userModels = new userModels();
    }

    public function index()
    {
        $user = $this->userModels->findAll();
        $data = [
            'title' => 'Data User',
            'user' => $user
        ];
        return view('pages/backend/user', $data);
    }

    public function tambah()
    {
        $data = ['title' => 'Tambah Data user'];
        return view('pages/auth/tambah', $data);
    }

    public function simpan()
    {
        $validationRule = [
            'userfile' => [
                'label' => 'Image File',
                'rules' => [
                    'uploaded[userfile]',
                    'is_image[userfile]',
                ],
            ],
        ];
        $userfile = $this->request->getFile('userfile');


        if ($userfile != null) {
            // jika file nya tidak null atau kosong ( empty )
            if (!$this->validate($validationRule)) {

                // tampil pesan error
                return redirect()->back()->with('errors', $this->validator->getErrors())->withInput();
            }

            // jika file nya ada dan inputkan
            // memindahkan file ke folder yang di tentukan
            if (!$userfile->hasMoved()) {

                // ngambil nama file
                $fileName = $userfile->getName();

                // echo $fileName;
                // mindahin file ke folder public/img/berita
                $userfile->move(ROOTPATH . 'public/img/user', $fileName);
            } else {

                //echo $fileName;
                return redirect()->back()->with('errors', 'File sudah di pindahkan!');
            }
        }
        $this->userModels->save([
            'nama' => $this->request->getVar('nama_u'),
            'email'  => $this->request->getVar('email_u'),
            'username' => $this->request->getVar('username'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
            'userfile' => $fileName,
        ]);
        return redirect()->to('admin/user');
    }

    public function edit($id_user)
    {
        $user = $this->userModels->data_user($id_user);
        $data = [
            'title' => 'Edit Data user',
            'user' => $user
        ];

        return view('pages/auth/edit', $data);
    }

    public function update()
    {
        $validationRule = [
            'userfile' => [
                'label' => 'Image File',
                'rules' => [
                    'uploaded[userfile]',
                    'is_image[userfile]',
                ],
            ],
        ];
        $id_user = $this->request->getVar('id');
        $userfile = $this->request->getFile('userfile');
        $data = [
            'nama' => $this->request->getVar('nama_u'),
            'email'  => $this->request->getVar('email_u'),
            'username' => $this->request->getVar('username'),
        ];

        if ($userfile->getFilename() != null) {
            if (!$this->validate($validationRule)) {
                return redirect()->back()->with('errors', $this->validator->getErrors())->withInput();
            }
            $fileLama = $this->userModels->find($id_user)['userfile'];
            $filePath = ROOTPATH . 'public/img/user' . $fileLama;
            if (file_exists($filePath)) {
                unlink($filePath);
            }
            if (!$userfile->hasMoved()) {
                $fileName = $userfile->getName();
                $userfile->move(ROOTPATH . 'public/img/user', $fileName);
            } else {
                return redirect()->back()->with('errors', 'File sudah di pindahkan!');
            }
            $data = [
                'nama' => $this->request->getVar('nama_u'),
                'email'  => $this->request->getVar('email_u'),
                'username' => $this->request->getVar('username'),
                'userfile' => $fileName,
            ];
        }
        if ($this->request->getVar('password') != null) {
            $data['password'] = password_hash($this->request->getVar('password'), PASSWORD_BCRYPT);
        }
        $this->userModels->update_data($data, $id_user);
        return redirect()->to('admin/user');
    }

    public function delete($id_user)
    {
        $user = $this->userModels->data_user($id_user);
        $file = $user['userfile'];

        // proses penghapusan file menggunakan fungsi unlink
        unlink('../public/img/user/' . $file);
        $this->userModels->delete_data($id_user);
        return redirect()->to('admin/user');
    }
}

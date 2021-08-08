<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class UsersAdmin extends BaseController
{
    public function __construct()
    {
        $this->session = session();
    }
	public function index()
	{
        if(!$this->session->has('isLogin')){
            return redirect()->to('/auth/login');
        }
        
        //cek role dari session
        if($this->session->get('role') != 1){
            return redirect()->to('/home');
        }
		 // buat object model $users
		$users = new UserModel();
        
        /*
         siapkan data untuk dikirim ke view dengan nama $userses
         dan isi datanya dengan users yang sudah terbit
        */
		$data['users'] = $users->findAll();

        // kirim data ke view
		echo view('admin/user', $data);
	}

	public function view($id)
	{
		$users = new UserModel();
		$data['users'] = $users->where('id', $id)->first();
		
		if(!$data['users']){
			throw PageNotFoundException::forPageNotFound();
		}
		echo view('users_detail', $data);
    }

	// public function create()
    // {
    //     // lakukan validasi
    //     $validation =  \Config\Services::validation();
    //     $validation->setRules(['nama' => 'required']);
    //     $validation->setRules(['tgl_lahir' => 'required']);
    //     $validation->setRules(['umur' => 'required']);
    //     $isDataValid = $validation->withRequest($this->request)->run();

    //     // jika data valid, simpan ke database
    //     if($isDataValid){
    //         $users = new UserModel();
    //         $users->insert([
    //             "nama" => $this->request->getPost('nama'),
    //             "tgl_lahir" => $this->request->getPost('tgl_lahir'),
    //             "umur" => $this->request->getPost('umur'),
    //             "slug" => url_title($this->request->getPost('nama'), '-', TRUE)
    //         ]);
    //         session()->setFlashdata('message', 'Tambah Data User Berhasil');
    //         return redirect('admin/users');
    //     }
	// 	session()->setFlashdata('error', $this->validator->listErrors());
    //         return redirect()->back()->withInput();
    //     // tampilkan form create
    //     echo view('admin/newuser');
    // }


    public function create()
    {
        return view('admin/newuser');
    }
    public function store()
    {
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Harus diisi'
                ]
            ],
            'username' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Username Harus diisi'
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Password Harus diisi'
                ]
            ],
            'role' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Role Harus diisi 1(admin) 2(biasa)'
                ]
            ],
 
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        $users = new UserModel();
        $users->insert([
            'nama' => $this->request->getVar('nama'),
            'username' => $this->request->getVar('username'),
            'password' => $this->request->getVar('password'),
            'slug' => url_title($this->request->getPost('nama'), '-', TRUE)
        ]);
        session()->setFlashdata('message', 'Tambah Data User Berhasil');
        return redirect()->to('admin/users');
    }

	public function edit($id)
    {
        // ambil artikel yang akan diedit
        $users = new UserModel();
        $data['users'] = $users->where('id', $id)->first();
        
        // lakukan validasi data artikel
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'id' => 'required',
            'nama' => 'required',
            'username' => 'required',
            'password' => 'required',
            'role' => 'required',
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();
        // jika data vlid, maka simpan ke database
        if($isDataValid){
            $users->update($id, [
                "nama" => $this->request->getPost('nama'),
                "username" => $this->request->getPost('username'),
                "password" => $this->request->getPost('password'),
                "role" => $this->request->getPost('role')
            ]);
            session()->setFlashdata('edit', 'Update Data User Berhasil');
            return redirect('admin/users');
        }

        // tampilkan form edit
        echo view('admin/edituser', $data);
    }

	public function delete($id){
        $users = new UserModel();
        $users->delete($id);
        session()->setFlashdata('delete', 'Hapus Data User Berhasil');
        return redirect('admin/users');
    }


}

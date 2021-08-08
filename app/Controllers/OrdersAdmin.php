<?php

namespace App\Controllers;

use App\Models\OrderModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class OrdersAdmin extends BaseController
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
		// return view('admin/user');
		 // buat object model $orders
		$orders = new OrderModel();
        
        /*
         siapkan data untuk dikirim ke view dengan nama $orderses
         dan isi datanya dengan orders yang sudah terbit
        */
		$data['orders'] = $orders->findAll();

        // kirim data ke view
		echo view('admin/order', $data);
	}

	public function view($id)
	{
		$orders = new OrderModel();
		$data['orders'] = $orders->where('id', $id)->first();
		
		if(!$data['orders']){
			throw PageNotFoundException::forPageNotFound();
		}
		echo view('orders_detail', $data);
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
    //         $orders = new OrderModel();
    //         $orders->insert([
    //             "nama" => $this->request->getPost('nama'),
    //             "tgl_lahir" => $this->request->getPost('tgl_lahir'),
    //             "umur" => $this->request->getPost('umur'),
    //             "slug" => url_title($this->request->getPost('nama'), '-', TRUE)
    //         ]);
    //         session()->setFlashdata('message', 'Tambah Data User Berhasil');
    //         return redirect('admin/orders');
    //     }
	// 	session()->setFlashdata('error', $this->validator->listErrors());
    //         return redirect()->back()->withInput();
    //     // tampilkan form create
    //     echo view('admin/newuser');
    // }


    public function create()
    {
        return view('admin/neworder');
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
			'tujuan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tujuan Harus diisi'
                ]
            ],
            'pulang' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tanggal Berangkat Harus diisi'
                ]
            ],
			'pergi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tanggal Pergi Harus diisi'
                ]
            ],
            'jumlah' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jumlah Harus diisi'
                ]
            ],
 
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        $orders = new OrderModel();
        $orders->insert([
            'nama' => $this->request->getVar('nama'),
            'tujuan' => $this->request->getVar('tujuan'),
            'pulang' => $this->request->getVar('pulang'),
            'pergi' => $this->request->getVar('pergi'),
            'jumlah' => $this->request->getVar('jumlah'),
            'slug' => url_title($this->request->getPost('tujuan'), '-', TRUE)
        ]);
        session()->setFlashdata('message', 'Tambah Data Order Berhasil');
        return redirect()->to('admin/orders');
    }

	public function edit($id)
    {
        // ambil artikel yang akan diedit
        $orders = new OrderModel();
        $data['orders'] = $orders->where('id', $id)->first();
        
        // lakukan validasi data artikel
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'id' => 'required',
            'nama' => 'required',
            'tujuan' => 'required',
            'pulang' => 'required',
            'pergi' => 'required',
            'jumlah' => 'required',
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();
        // jika data vlid, maka simpan ke database
        if($isDataValid){
            $orders->update($id, [
                "nama" => $this->request->getPost('nama'),
                "tujuan" => $this->request->getPost('tujuan'),
                "pulang" => $this->request->getPost('pulang'),
                "pergi" => $this->request->getPost('pergi'),
                "jumlah" => $this->request->getPost('jumlah')
            ]);
            session()->setFlashdata('edit', 'Update Data Order Berhasil');
            return redirect('admin/orders');
        }

        // tampilkan form edit
        echo view('admin/editorder', $data);
    }

	public function delete($id){
        $orders = new OrderModel();
        $orders->delete($id);
        session()->setFlashdata('delete', 'Hapus Data Order Berhasil');
        return redirect('admin/orders');
    }


}

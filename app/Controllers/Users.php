<?php

namespace App\Controllers;

use App\Models\OrderModel;

class Users extends BaseController
{
    public function __construct()
    {
        $this->session = session();
    }
    
    
    public function index()
    {
        //cek apakah ada session bernama isLogin
        if(!$this->session->has('isLogin')){
            return redirect()->to('/auth/login');
        }

        $orders = new OrderModel();
        
        /*
         siapkan data untuk dikirim ke view dengan nama $orderses
         dan isi datanya dengan orders yang sudah terbit
        */
		$data['orders'] = $orders->findAll();
        return view('welkam');
    }

    public function store()
    {
        if (!$this->validate([
            'dari' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Asal Harus diisi'
                ]
            ],
			'ke' => [
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
            'maskapai' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Maskapai Harus diisi'
                ]
            ],
            'room' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Room Harus diisi'
                ]
            ],
            'jumlah' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jumlah Harus diisi'
                ]
            ],
            'kelas' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kelas Harus diisi'
                ]
            ],
 
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        $orders = new OrderModel();
        $orders->insert([
            'dari' => $this->request->getVar('dari'),
            'ke' => $this->request->getVar('ke'),
            'pulang' => $this->request->getVar('pulang'),
            'pergi' => $this->request->getVar('pergi'),
            'maskapai' => $this->request->getVar('maskapai'),
            'room' => $this->request->getVar('room'),
            'jumlah' => $this->request->getVar('jumlah'),
            'kelas' => $this->request->getVar('kelas'),
            'slug' => url_title($this->request->getPost('ke'), '-', TRUE)
        ]);
        session()->setFlashdata('message', 'Tambah Data Order Berhasil');
        return redirect()->to('bayar');
    }
    
}
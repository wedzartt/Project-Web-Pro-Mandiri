<?php

namespace App\Controllers;

class Wisata extends BaseController
{
    public function index(): string
    {
        return view(
            'destinations/index',
            [
                'title' => 'Destinations',
                'page'  => 'destinations'
            ]
        );
    }

    public function detail($id)
    {
        return view(
            'destinations/detail',
            [
                'title' => 'Destination Detail',
                'page'  => 'destinations',
                'id'    => $id
            ]
        );
    }

    public function proses()
    {
        // Mengambil semua data yang dikirim via POST
        $dataKirim = $this->request->getPost();

        // Debugging: Program berhenti di sini dan menampilkan isi variabel
        // dd($dataKirim);
        
        // Kode di bawah ini tidak akan jalan selama ada dd() di atas
        // return redirect()->to('/form'); 
    }

}

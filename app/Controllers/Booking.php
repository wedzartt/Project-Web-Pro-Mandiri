<?php

namespace App\Controllers;

class Booking extends BaseController
{

    // public function proses()
    // {
    //     // Mengambil semua data yang dikirim via POST
    //     $dataKirim = $this->request->getPost();

    //     // Debugging: Program berhenti di sini dan menampilkan isi variabel
    //     // dd($dataKirim);
        
    //     // Kode di bawah ini tidak akan jalan selama ada dd() di atas
    //     // return redirect()->to('/form'); 

    //     return view(
    //         'booking/summary',
    //         $dataKirim
    //     );
    // }

    public function summary()
    {
        // $dataKirim = $this->request->getPost();
        // dd($dataKirim);

        $data = [

            'title' => 'Journey Summary',
            'page'  => 'summary',

            'destination_id'
                => $this->request->getPost('destination_id'),

            'destination_name'
                => $this->request->getPost('destination_name'),

            'price'
                => $this->request->getPost('price'),

            'travel_date'
                => $this->request->getPost('travel_date'),

            'travelers'
                => $this->request->getPost('travelers'),

            'fullname'
                => $this->request->getPost('fullname'),

            'email'
                => $this->request->getPost('email'),

            'phone'
                => $this->request->getPost('phone'),

            // 'notes'
            //     => $this->request->getPost('notes'),

            'special_notes'
                => $this->request->getPost('special_notes'),
        ];

        return view(
            'booking/summary',
            $data
        );
    }
}
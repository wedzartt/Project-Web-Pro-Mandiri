<?php

namespace App\Controllers;

use App\Models\BookingModel;

class Booking extends BaseController
{

    public function summary()
    {
    // dd($_POST);
   
        $travelers = $this->request->getPost('travelers');

        $ticketPrice = $this->request->getPost('price');

        $totalPrice =  $travelers * $ticketPrice;

        $bookingModel = new BookingModel();
    
        $bookingModel -> save([

            'destination_id'
            => $this->request->getPost('destination_id'),

            'fullname'
            => $this->request->getPost('fullname'),

            'email'
            => $this->request->getPost('email'),

            'phone'
            => $this->request->getPost('phone'),

            'travel_date'
            => $this->request->getPost('travel_date'),

            'travelers' => $travelers,

            'total_price' => $totalPrice,

            'special_notes'
            => $this->request->getPost('special_notes'),
        ]);

        $bookingId = $bookingModel->getInsertID();

        // dd($bookingId);

        // Ambil semua data yang dikirim dari form POST
        // $dataKirim = $this->request->getPost();

        // STOP program di sini dan tampilkan isi datanya ke layar
        // dd($dataKirim);

        $data = [
            'destination_id'
            => $this->request->getPost('destination_id'),

            'fullname'
            => $this->request->getPost('fullname'),

            'email'
            => $this->request->getPost('email'),

            'phone'
            => $this->request->getPost('phone'),

            'travel_date'
            => $this->request->getPost('travel_date'),

            'travelers' => $travelers,

            'total_price' => $totalPrice,

            'special_notes'
            => $this->request->getPost('special_notes'),
        ];

        // dd($data);

        return redirect()->to('/payment/' . $bookingId);
    }

    public function method($id)
    {
        $bookingModel = new BookingModel();

        $order = $bookingModel->find($id);

        return view('payment/index', [
            'order' => $order
        ]);
    }
}

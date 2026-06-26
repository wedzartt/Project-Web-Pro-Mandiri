<?php

namespace App\Controllers;

use App\Models\BookingModel;
use App\Models\TransactionModel;

class Journey extends BaseController
{
    public function index($id)
    {
        $transactionModel = new TransactionModel();
        $bookingModel = new BookingModel();

        $data = [
        'transaction' => $transactionModel->find($id),
        'booking' => $bookingModel->find($id)
        ];

        // $data2['bookings'] = $bookingModel->find($id);
        // $data1['transaction'] = $transactionModel->find($id);

        return view(
            'journey/index', $data,
            [
                'title' => 'My Journey',
                'page'  => 'Journey',
            ]
        );
    }
}
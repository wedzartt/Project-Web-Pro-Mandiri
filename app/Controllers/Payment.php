<?php

namespace App\Controllers;

use App\Models\BookingModel;
use App\Models\TransactionModel;

class Payment extends BaseController
{
    public function index($id)
    {
        $bookingModel = new BookingModel();

        $booking = $bookingModel->find($id);

        if (!$booking) {

            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view(
            'payment/index',
            [
                'booking' => $booking
            ]
        );
    }

    public function process()
    {
        $transactionModel = new TransactionModel();

        $bookingId =
            $this->request->getPost('booking_id');

        $paymentMethod =
            $this->request->getPost('payment_method');

        $transactionModel->insert([

            'booking_id' => $bookingId,

            'payment_method' => $paymentMethod,

            'payment_status' => 'paid'
        ]);

        return redirect()->to(
            '/payment/success/' . $bookingId
        );
    }

    public function success($id)
    {
        $bookingModel = new BookingModel();

        $transactionModel = new TransactionModel();

        $booking = $bookingModel->find($id);

        $transaction = $transactionModel
            ->where('booking_id', $id)
            ->first();

        return view(
            'succes/index',
            [
                'booking' => $booking,
                'transaction' => $transaction
            ]
        );
    }
}

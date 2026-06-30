<?php

namespace App\Controllers;

class Journey extends BaseController
{
    public function index()
    {
        $db = \Config\Database::connect();

        $journeys = $db->table('bookings')

            ->select('
                bookings.*,

                transactions.id
                    as transaction_id,

                transactions.payment_method,

                transactions.payment_status
            ')

            ->join(
                'transactions',
                'transactions.booking_id = bookings.id',
                'left'
            )

            ->where(
                'bookings.user_id',
                session()->get('id')
            )

            ->orderBy(
                'bookings.id',
                'DESC'
            )

            ->get()

            ->getResultArray();

        return view(
            'journey/index',
            [
                'journeys' => $journeys,
                'title' => 'My Journey'
            ]
        );
    }
}
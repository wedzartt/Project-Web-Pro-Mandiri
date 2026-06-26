<?php

namespace App\Controllers;

class Wisata extends BaseController
{
    public function success()
    {
        $bookingId =
            $this->request->getPost('booking_id');


        return view(
            'payment/success' / $bookingId
        );
    }
}
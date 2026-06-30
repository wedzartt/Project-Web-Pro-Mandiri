<?php

namespace App\Controllers;

class Wisata extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Destinations'
        ];

        return view(
            'destinations/index',
            $data
        );
    }

    public function detail($destinationsId)
    {
        if ($destinationsId == 1) {
            $detail = [

                'ticket_type' => 'DAY 1',

                'price' => 1500000

            ];
        } elseif ($destinationsId == 2) {
            $detail = [

                'ticket_type' => 'DAY 2',

                'price' => 750000

            ];
        } elseif ($destinationsId == 3) {
            $detail = [

                'ticket_type' => 'DAY 2',

                'price' => 1200000

            ];
        } else {
            $detail = [

                'ticket_type' => '2 DAY PASS',

                'price' => 600000

            ];
        }

        return view(
            'destinations/detail',
            [
                'detail' => $detail,
                'destination_id' => $destinationsId
            ]
        );
    }
}

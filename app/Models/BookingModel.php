<?php

namespace App\Models;

use CodeIgniter\Model;

class BookingModel extends Model
{
    protected $table = 'bookings';

    protected $primaryKey = 'id';

    protected $allowedFields = [
        'user_id',
        'destination_id',
        'fullname',
        'email',
        'phone',
        'travel_date',
        'travelers',
        'total_price',
        'special_notes'
    ];
}
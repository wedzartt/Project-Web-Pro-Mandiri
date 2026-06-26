<?php

namespace App\Models;

use CodeIgniter\Model;

class TransactionModel extends Model
{
    protected $table = 'transactions';

    protected $primaryKey = 'id';

    protected $allowedFields = [

        'booking_id',

        'payment_method',

        'payment_status'

    ];

    protected $useTimestamps = false;
}
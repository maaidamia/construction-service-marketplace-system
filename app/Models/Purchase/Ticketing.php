<?php

namespace App\Models\Purchase;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticketing extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'sp_id',
        'po_code',
        'tic_data1',
        'tic_data2',
        'tic_data3',
        'tic_data4',
        'tic_data5',
        'tic_data6',
    ];
}

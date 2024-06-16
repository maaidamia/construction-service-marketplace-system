<?php

namespace App\Models\BD;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $table = 'bdcontact';

    protected $fillable = [
        'user_id',
        'bdcon_data1',
        'bdcon_data2',
        'bdcon_data3',
        'bdcon_data4',
        'bdcon_data5',
        'bdcon_data6',
        'bdcon_data7',
        'bdcon_data8',
    ];

}

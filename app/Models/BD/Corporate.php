<?php

namespace App\Models\BD;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Corporate extends Model
{
    use HasFactory;

    protected $table = 'bdcorporate';

    protected $fillable = [
        'user_id',
        'bdcor_data1',
        'bdcor_data2',
        'bdcor_data3',
        'bdcor_data4',
        'bdcor_data5',
        'bdcor_data6', ###doi
        'bdcor_data7',
        'bdcor_data8',
        'bdcor_data9',
        'bdcor_data10',
        'bdcor_data11',
        'bdcor_data12',
        'bdcor_data13',
        'bdcor_data14',
        'bdcor_data15',
        'bdcor_data16',
    ];
}

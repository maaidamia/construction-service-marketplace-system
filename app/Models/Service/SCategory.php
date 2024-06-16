<?php

namespace App\Models\Service;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'scat_user_id',
        'scat_data1',
        'scat_data2',
        'scat_data3',
    ];

    public function services()
    {
        return $this->belongsTo(Service::class);
    }
}

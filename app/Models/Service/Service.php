<?php

namespace App\Models\Service;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'ser_data1',
        'ser_data2',
        'ser_data3',
        'ser_data4',
        'ser_data5',
        'ser_data6',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scategory()
    {
        return $this->hasMany(SCategory::class, 'id', 'ser_data2');
    }
}

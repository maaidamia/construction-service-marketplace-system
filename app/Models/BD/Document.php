<?php

namespace App\Models\BD;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $table = 'documents';

    protected $fillable = [
        'user_id',
        'bddoc_data1',
        'bddoc_data2',
        'bddoc_data3',
        'bddoc_data4',
        'bddoc_data5',
    ];
}

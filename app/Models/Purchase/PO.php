<?php

namespace App\Models\Purchase;

use App\Models\Service\Service;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PO extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_id',
        'sp_id',
        'admin_id',
        'user_id',
        'po_data1','po_data2','po_data3','po_data4','po_data5',
        'po_data6','po_data7','po_data8','po_data9','po_data10',
        'po_data11','po_data12','po_data13','po_data14','po_data15',
        'po_data16','po_data17','po_data18','po_data19','po_data20',
        'po_data21','po_data22','po_data23','po_data24','po_data25',
    ];

    /**
     * Get the service that owns the PO
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id', 'id');
    }

    /**
     * Get the user that owns the PO
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sp()
    {
        return $this->belongsTo(User::class, 'sp_id', 'id');
    }
}

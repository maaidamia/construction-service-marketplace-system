<?php

namespace App\Models;

use App\Models\BD\Contact;
use App\Models\BD\Corporate;
use App\Models\BD\Document;
use App\Models\Service\SCategory;
use App\Models\Service\Service;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable
{
    use LaratrustUserTrait;
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'userType',
        'isActive',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    #### Services ####
    public function bdContact()
    {
        return $this->hasOne(Contact::class);
    }
    public function bdCorporate()
    {
        return $this->hasOne(Corporate::class);
    }
    public function bdDocument()
    {
        return $this->hasOne(Document::class);
    }
    public function services()
    {
        return $this->hasMany(Service::class);
    }
    public function scategories()
    {
        return $this->hasManyThrough(SCategory::class, Service::class, 'ser_data2', 'id');
    }
    #### Services ####
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;
class Warehouse extends Authenticatable
{
    use SoftDeletes;
       /**
     * Summary of table
     * @var string
     */
    protected $fillable=['name_warehouse','email','password','city_warehouse','street_warehouse','phone_warehouse'],
    $table='warehouses';
    use HasApiTokens , HasFactory, Notifiable;
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
        'password' => 'hashed',
    ];
    public function medicine()
    {
        return $this->hasMany(Medicine::class);
    }
    public function oreder(){
        return $this->hasMany(Order::class);
    }
}

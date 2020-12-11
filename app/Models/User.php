<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class User extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'cpf',
        'address',
        'birthday'
    ];

    public $timestamps = false;

    public function getBirthdayAttribute($value)
    {
        return Carbon::create($value)->format('d/m/Y');
    }

}

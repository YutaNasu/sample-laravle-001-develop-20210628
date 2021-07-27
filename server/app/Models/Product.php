<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\List2 as Authenticatable;
use Illuminate\Notifications\Notifiable;

class List2 extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * 出品者情報
     * @param $fillable
     * @return int list2_id
     * @author nasu
     * @var array
     * @name index
     * @modifid 06/14
     */
    protected $fillable = [
        'list2_id',
        'list_name',
        'office_name',
        'street_address',
        'tel_number',
        'mail_address',
        'respons_name',
        'review',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}

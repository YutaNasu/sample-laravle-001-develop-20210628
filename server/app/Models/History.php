<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class History extends Model
{
    protected $table = 'History';
    use HasFactory, Notifiable;

    /**
     * 履歴
     * @param $fillable
     * @return int order_number
     * @author nasu
     * @var array
     * @name index
     * @modifid 06/14
     */
    protected $fillable = [
        'order_number',
        'product_id',
        'user_id',
        'total_money',
        'total_count',
        'buy_date',
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

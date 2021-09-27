<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'User';

    /**
     * ユーザー情報
     * @param $fillable
     * @return int user_id
     * @author nasu
     * @var array
     * @name index
     * @modifid 06/14
     */
    protected $fillable = [
        'user_id',
        'username',
        'street_address',
        'tel_number',
        'mail_address',
    ];

    public function getAllUsers()
    {
        return parent::all();
    }

}

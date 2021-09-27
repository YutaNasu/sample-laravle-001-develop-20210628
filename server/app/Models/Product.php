<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Product extends Model
{
  protected $table = 'Product';
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
        'id',
        'name',
        'price',
        'date',
        'informaition',
        'image',
    ];

    /*
      The attributes that should be hidden for arrays.
     
      @var array
     
    protected $hidden = [
        'password',
        'remember_token',
    ];

    
      The attributes that should be cast to native types.
     
      @var array
     
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];*/

    public function newItem( $item )
    {
      $this->fill( $item );
      $this->save();
    }
  }

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Invoice extends Model
{
    use HasFactory;
    public $table = 'invoices';
    protected $fillable = [
        'description',
        'value',
        'address_id',
        'user_id',
    ];
    protected $hidden = [
        'user_id',
        'address_id'
    ];
    public function address(){
       return $this->hasOne(Address::class, 'id', 'address_id');
    }
    public function user(){
       return $this->hasOne(User::class, 'id', 'user_id');
    }
}

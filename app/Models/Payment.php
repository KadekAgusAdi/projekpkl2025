<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model {
    protected $fillable = ['order_id','payment_method','transaction_id','payment_status','amount','paid_at','raw_response'];
    protected $casts = ['raw_response'=>'array','paid_at'=>'datetime'];
    public function order(){ return $this->belongsTo(Order::class); }
}

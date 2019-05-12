<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use \App\Restaurant as RestaurantEloquent;
use \App\CouponsStatus as CouponsStatusEloquent;
use Illuminate\Database\Eloquent\Model;



class Coupon extends Model
{
    use Notifiable;
    protected $table = 'coupons';
    protected $fillable = [
        'restaurant_id',
        'title',
        'content',
        'status',
        'StartTime',
        'EndTime',
    ];
    public function restaurant(){
        return $this->belongsTo(RestaurantEloquent::class);
    }
    public function CouponsStatus(){
        return $this->belongsTo(CouponsStatusEloquent::class);
    }
}

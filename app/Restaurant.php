<?php

namespace App;
use \App\Staff as StaffEloquent;
use \App\Post as PostEloquent;
use \App\Coupon as CouponEloquent;
use \App\Meal as MealEloquent;
use \App\Record as RecordEloquent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Restaurant extends Model
{
    use Notifiable;
    protected $table = 'restaurants';
    protected $fillable = [
        'id',
        'name',
//        'logo',
        'phone',
        'address',
        'open',
    ];
    public function staff(){
        return $this->hasMany(StaffEloquent::class);
    }
    public function post(){
        return $this->hasMany(PostEloquent::class);
    }
    public function coupon(){
        return $this->hasMany(CouponEloquent::class);
    }
    public function meal(){
        return $this->hasMany(MealEloquent::class);
    }
    public function record(){
        return $this->hasMany(RecordEloquent::class);
    }
}

<?php

namespace SJoussin\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $connection = "mysql";

    protected $table = "location";

    protected $fillable = ['id','user_id','lat','long','address',];

    protected int $id;

    protected int $user_id;

    protected float $lat;

    protected float $long;

    protected string $address;



    protected static function newFactory()
    {
        return \SJoussin\Database\Factories\LocationFactory::new();
    }


//    public function user()
//    {
//        return $this->belongsTo(User::class, 'user_id', 'id');
//    }


}

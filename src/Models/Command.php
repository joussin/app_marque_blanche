<?php

namespace SJoussin\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Command extends Model
{
    use HasFactory;

    protected $connection = "mysql";

    protected $table = "command";

    protected $fillable = ['id','user_id','date','status',];

    protected int $id;

    protected int $user_id;

    protected datetime $date;

    protected string $status;



    protected static function newFactory()
    {
        return \SJoussin\Database\Factories\CommandFactory::new();
    }


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function delivery()
    {
        return $this->hasOne(Delivery::class);
    }

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }

    public function product()
    {
        return $this->belongsToMany(Product::class, "command_product");
    }
}

<?php

namespace SJoussin\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $connection = "mysql";

    protected $table = "payment";

    protected $fillable = ['id','command_id','type','status',];

    protected int $id;

    protected int $command_id;

    protected string $type;

    protected string $status;



    protected static function newFactory()
    {
        return \SJoussin\Database\Factories\PaymentFactory::new();
    }


    public function command()
    {
        return $this->belongsTo(Command::class, 'command_id', 'id');
    }

}

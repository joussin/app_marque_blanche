<?php

namespace SJoussin\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

}

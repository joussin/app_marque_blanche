<?php

namespace SJoussin\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommandProduct extends Model
{
    use HasFactory;

    protected $connection = "mysql";

    protected $table = "command_product";

    protected $fillable = ['command_id','product_id',];

    protected int $command_id;

    protected int $product_id;



    protected static function newFactory()
    {
        return \SJoussin\Database\Factories\CommandProductFactory::new();
    }

}

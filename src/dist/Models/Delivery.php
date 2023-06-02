<?php

namespace SJoussin\LaravelScaffolder\dist\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    use HasFactory;

    protected $connection = "mysql";

    protected $table = "delivery";

    protected $fillable = ['id','command_id','delivery_user_id','date_start','date_finish_estimation','date_finish','status',];

    protected int $id;

    protected int $command_id;

    protected int $delivery_user_id;

    protected datetime $date_start;

    protected datetime $date_finish_estimation;

    protected datetime $date_finish;

    protected string $status;



    protected static function newFactory()
    {
        return \SJoussin\LaravelScaffolder\dist\Database\Factories\DeliveryFactory::new();
    }

}

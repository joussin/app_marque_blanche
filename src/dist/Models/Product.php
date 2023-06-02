<?php

namespace SJoussin\LaravelScaffolder\dist\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $connection = "mysql";

    protected $table = "product";

    protected $fillable = ['id','name','description','price','image','available',];

    protected int $id;

    protected string $name;

    protected string $description;

    protected int $price;

    protected string $image;

    protected bool $available;



    protected static function newFactory()
    {
        return \SJoussin\LaravelScaffolder\dist\Database\Factories\ProductFactory::new();
    }

}

<?php

namespace SJoussin\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

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
        return \SJoussin\Database\Factories\ProductFactory::new();
    }

    public function command(): BelongsToMany
    {
        return $this->belongsToMany(
            Command::class,
            'command_product');
    }
}

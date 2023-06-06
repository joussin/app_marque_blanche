<?php

namespace SJoussin\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class User extends Model
{
    use HasFactory;

    protected $connection = "mysql";

    protected $table = "user";

    protected $fillable = ['id','phone','role',];

    protected int $id;

    protected string $phone;

    protected string $role;



    protected static function newFactory()
    {
        return \SJoussin\Database\Factories\UserFactory::new();
    }

}

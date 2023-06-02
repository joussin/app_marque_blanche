<?php

namespace SJoussin\LaravelScaffolder\dist\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $connection = "mysql";

    protected $table = "user";

    protected $fillable = ['id','phone','username','password','role',];

    protected int $id;

    protected string $phone;

    protected string $username;

    protected string $password;

    protected string $role;



    protected static function newFactory()
    {
        return \SJoussin\LaravelScaffolder\dist\Database\Factories\UserFactory::new();
    }

}

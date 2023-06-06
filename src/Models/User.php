<?php

namespace SJoussin\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class User extends \App\Models\User
{
    use HasFactory;

    protected $connection = "mysql";


    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'role',
    ];

    protected $hidden = [
        'password',
        'remember_token',
        'role',
    ];


    protected string $phone;
    protected string $role; // CUSTOMER, DELIVERY, ADMIN


    public function location()
    {
        return $this->hasMany(Location::class);
    }

    public function command()
    {
        return $this->hasMany(Command::class);
    }

}

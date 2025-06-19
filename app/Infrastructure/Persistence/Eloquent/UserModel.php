<?php
namespace App\Infrastructure\Persistence\Eloquent;

use Illuminate\Foundation\Auth\User as Authenticatable;

class UserModel extends Authenticatable {
    protected $fillable = [
        'name',
        'email',
        'password',
        'role'
    ];
    protected $hidden = ['password'];
}

<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use App\Models\User as Authenticatable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use HasFactory;

    protected $table = 'tb_user';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'email', 'password'];
}

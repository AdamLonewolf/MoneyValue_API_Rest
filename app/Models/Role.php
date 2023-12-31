<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_role',
    ];

    //Je crée la relation entre la table rôles et Users
    public function users()
    {
        return $this->hasMany(User::class, 'role_id');
    }
}

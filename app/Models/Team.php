<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = ['team_name'];

    // Bir takım birden fazla üyeye sahiptir
    public function members()
    {
        return $this->hasMany(Member::class);
    }
}

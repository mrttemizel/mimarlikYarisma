<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = ['team_id', 'name', 'email', 'university', 'country', 'file','team_name'];

    // Bir üye yalnızca bir takıma aittir
    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}

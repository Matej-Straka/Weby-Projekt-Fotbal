<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    use HasFactory;
    protected $table = 'season';

    public function leagues()
    {
        return $this->belongsToMany(League::class, 'league_season', 'id_season', 'id_league')->using(SeasonLeague::class)->withPivot('id');
    }
}

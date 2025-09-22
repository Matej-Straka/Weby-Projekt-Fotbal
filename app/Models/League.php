<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class League extends Model
{
    use HasFactory;

    protected $table = 'league';

    public function seasons()
    {
        return $this->belongsToMany(Season::class, 'league_season', 'id_league', 'id_season')->using(SeasonLeague::class)->withPivot('id');
    }

}

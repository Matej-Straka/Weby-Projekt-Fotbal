<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class SeasonLeague extends Pivot
{

    protected $table = 'league_season';

    public function league()
    {
        return $this->belongsTo(League::class, 'id_league', 'id');
    }
    public function season()
    {
        return $this->belongsTo(Season::class, 'id_season', 'id');
    }
    public function games()
    {
        return $this->hasMany(Game::class, 'id_league_season', 'id');
    }
}

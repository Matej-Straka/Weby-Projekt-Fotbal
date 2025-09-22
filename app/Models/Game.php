<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $table = 'game';

    public function homeTeam()
    {
        return $this->belongsTo(Team::class, 'home', 'id');
    }

    public function awayTeam()
    {
        return $this->belongsTo(Team::class, 'away', 'id');
    }
    public function seasonLeague()
    {
        return $this->belongsTo(SeasonLeague::class, 'id_league_season', 'id');
    }


}

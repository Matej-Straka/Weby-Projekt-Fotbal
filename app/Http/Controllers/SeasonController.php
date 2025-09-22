<?php
// app/Http/Controllers/SeasonController.php

namespace App\Http\Controllers;

use App\Models\Season;
use App\Models\League;

use Illuminate\Http\Request;

class SeasonController extends Controller
{
    public function index()
    {
        $seasons = Season::orderBy('start', 'desc')->paginate(25);

        return view('season.index', compact('seasons'));
    }


    public function show($id)
    {
        $season = Season::with(['leagues' => function ($query) {
            $query->orderBy('level', 'asc')->orderBy('name', 'asc');
        }])->findOrFail($id);

        return view('season.show', compact('season'));
    }

public function showLeagueMatches(Season $season, League $league)
{
    // Najděte konkrétní spojení sezóny a ligy v pivot tabulce
    $seasonLeague = $season->leagues()->where('id_league', $league->id)->firstOrFail()->pivot;

    // Načtěte všechny zápasy, seřaďte je podle kola a seskupte
    $games = $seasonLeague->games()
                          ->with(['homeTeam', 'awayTeam'])
                          ->orderBy('round', 'asc') // Seřadit vzestupně podle kola
                          ->get()
                          ->groupBy('round'); // Seskupit podle sloupce 'round'
        return view('season.league_matches', compact('season', 'league', 'games'));
    }

    public function showGameDetails($id)
    {
        $game = \App\Models\Game::with(['homeTeam', 'awayTeam', 'seasonLeague.league', 'seasonLeague.season'])->findOrFail($id);

        return view('season.game_details', compact('game'));
    }
}

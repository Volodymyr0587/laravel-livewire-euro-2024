<?php

namespace App\Livewire;

use Carbon\Carbon;
use App\Models\Game;
use Livewire\Component;

class Games extends Component
{
    public $selectedGame;
    public $showModal = false;

    public $score1;
    public $score2;

    protected $rules = [
        'score1' => 'nullable|integer|min:0',
        'score2' => 'nullable|integer|min:0',
    ];

    public function selectGame($gameId)
    {
        $this->selectedGame = Game::findOrFail($gameId);
        $this->score1 = $this->selectedGame->score1;
        $this->score2 = $this->selectedGame->score2;
        $this->showModal = true;
    }

    public function saveScore()
    {
        $this->validate();

        $this->selectedGame->score1 = $this->score1;
        $this->selectedGame->score2 = $this->score2;
        $this->selectedGame->save();

        $this->showModal = false;

        $this->reset('selectedGame', 'score1', 'score2');
    }

    public function closeModal()
    {
        $this->reset(['selectedGame', 'showModal', 'score1', 'score2']);
    }

    public function render()
    {
        $games = Game::where('stage', 'group_stage')->get()->map(function ($game) {
            $game->date = Carbon::parse($game->date . ' ' . $game->time)->format('D, M d, H:i');
            return $game;
        });

        $roundOf16Games = Game::where('stage', 'round_of_16')->get()->map(function ($game) {
            $game->date = Carbon::parse($game->date . ' ' . $game->time)->format('D, M d, H:i');
            return $game;
        });

        $quarterFinalGames = Game::where('stage', 'quarter_final')->get()->map(function ($game) {
            $game->date = Carbon::parse($game->date . ' ' . $game->time)->format('D, M d, H:i');
            return $game;
        });

        $semiFinalGames = Game::where('stage', 'semi_final')->get()->map(function ($game) {
            $game->date = Carbon::parse($game->date . ' ' . $game->time)->format('D, M d, H:i');
            return $game;
        });

        $finalGames = Game::where('stage', 'final')->get()->map(function ($game) {
            $game->date = Carbon::parse($game->date . ' ' . $game->time)->format('D, M d, H:i');
            return $game;
        });

        return view('livewire.games', [
            'games' => $games,
            'roundOf16Games' => $roundOf16Games,
            'quarterFinalGames' => $quarterFinalGames,
            'semiFinalGames' => $semiFinalGames,
            'finalGames' => $finalGames,
        ]);
    }
}

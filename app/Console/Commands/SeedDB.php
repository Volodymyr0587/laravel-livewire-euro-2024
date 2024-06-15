<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SeedDB extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'seeddb';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run migrate:fresh with GamesTableSeeder';

    /**
     * Execute the console command.
     */
    public function handle()
    {
       $this->call('migrate:fresh', [
            '--seed' => true,
            '--seeder' => 'GamesTableSeeder',
       ]);

       $this->info('Database migrated and seeded with GamesTableSeeder.');
    }
}

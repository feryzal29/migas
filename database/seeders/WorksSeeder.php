<?php

namespace Database\Seeders;

use App\Models\Works;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WorksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Works::create([
            'name' => 'Client tells the requirement',
            'desc' => 'The client tells the team about the requirement of the proposed system. How the system works, how does the system integrate with existing system and so on.'
        ]);

        Works::create([
            'name' => 'The team implements the proposed system',
            'desc' => 'The team makes the clients dream come true by creating the system based on the agreed requirement.'
        ]);
        
        Works::create([
            'name' => 'Client gives feedback about the finished system.',
            'desc' => "The team improve the system based on the client's feedback."
        ]);
    }
}

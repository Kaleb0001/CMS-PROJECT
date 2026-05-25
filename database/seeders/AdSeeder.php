<?php

namespace Database\Seeders;

use App\Models\Ad;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ad::create([
            'location' => 'header',
            'content' => '<img src="/images/pub-header.png" alt="Pub Header">',
            'is_active' => true
        ]);

        Ad::create([
            'location' => 'sidebar',
            'content' => '<p>Annonce spéciale dans la sidebar</p>',
            'is_active' => true
        ]);

        Ad::create([
            'location' => 'footer',
            'content' => '<p>Publicité en bas de page</p>',
            'is_active' => false
        ]);

    }
}

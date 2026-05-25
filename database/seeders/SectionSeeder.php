<?php

namespace Database\Seeders;

use App\Models\Section;
use Illuminate\Database\Seeder;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Section::create([
            'title' => 'Accueil',
            'content' => 'Bienvenue sur notre site',
            'is_visible' => true,
            'position' => 1,
            'slug' => 'accueil',
            'seo_title' => 'Page d’accueil',
            'seo_description' => 'Bienvenue sur la page d’accueil du site.'
        ]);

        Section::create([
            'title' => 'À propos',
            'content' => 'Nous sommes une équipe passionnée...',
            'is_visible' => true,
            'position' => 2,
            'slug' => 'a-propos',
            'seo_title' => 'À propos',
            'seo_description' => 'Découvrez qui nous sommes.'
        ]);

        Section::create([
            'title' => 'Contact',
            'content' => 'Contactez-nous via ce formulaire.',
            'is_visible' => false,
            'position' => 3,
            'slug' => 'contact',
            'seo_title' => 'Contact',
            'seo_description' => 'Envoyez-nous un message.'
        ]);


    }
}

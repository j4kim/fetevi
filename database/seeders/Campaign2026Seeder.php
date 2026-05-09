<?php

namespace Database\Seeders;

use App\Models\Campaign;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Campaign2026Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Campaign::firstWhere('name', '2025')
            ->replicate()
            ->fill([
                'name' => '2026',
                'description' => 'Fête villageoise des Ponts-de-Martel, les 5 et 6 juin 2026 à la salle du Bugnon.',
                'theme' => '2026',
                'is_active' => true,
                'header' => <<<MARKDOWN
                    # FÊTE VI’

                    ### Les Ponts-de-Martel

                    ## 5-6 juin 2026

                    #### Salle du Bugnon
                    MARKDOWN,
                'articles' => collect([
                    'Vendredi 5 juin',
                    'Samedi 6 juin',
                    'Menu de la Balade Gourmande',
                    'Bipédibus revisité',
                ])->map(function (string $title) {
                    $content = file_get_contents(database_path("seeders/2026/$title.md"));
                    return compact('title', 'content');
                }),
            ])
            ->save();
    }
}

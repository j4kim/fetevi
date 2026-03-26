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
                'theme' => '2026',
                'is_active' => false,
                'header' => <<<MARKDOWN
                    # FÊTE VI’

                    ### Les Ponts-de-Martel

                    ## 5-6 juin 2026

                    #### Salle du Bugnon
                    MARKDOWN
            ])
            ->save();
    }
}

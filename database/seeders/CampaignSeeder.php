<?php

namespace Database\Seeders;

use App\Models\Campaign;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CampaignSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Campaign::create([
            "name" => "2025",
            "title" => "Fête vi' Les Ponts de Martel",
            "description" => "Fête villageoise des Ponts-de-Martel, les 20 et 21 juin 2025 à la salle du Bugnon.",
            "template" => "2025",
            "is_active" => true
        ]);
    }
}

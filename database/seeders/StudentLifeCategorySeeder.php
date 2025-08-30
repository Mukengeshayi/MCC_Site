<?php

namespace Database\Seeders;

use App\Models\StudentLifeCategory;
use App\Models\EducationLevel;
use Illuminate\Database\Seeder;

class StudentLifeCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $educationLevels = EducationLevel::all();

        if ($educationLevels->isEmpty()) {
            $this->command->warn('Aucun niveau d\'éducation trouvé. Veuillez d\'abord exécuter EducationLevelSeeder.');
            return;
        }

        $categories = [
            [
                'name' => 'Activités sportives',
                'description' => 'Toutes les activités sportives et physiques proposées aux élèves',
                'icon' => 'fas fa-futbol',
                'level_id' => $educationLevels->where('name', 'like', '%primaire%')->first()->id ?? $educationLevels->first()->id,
            ],
            [
                'name' => 'Activités culturelles',
                'description' => 'Théâtre, musique, arts plastiques et autres activités culturelles',
                'icon' => 'fas fa-palette',
                'level_id' => $educationLevels->where('name', 'like', '%secondaire%')->first()->id ?? $educationLevels->first()->id,
            ],
            [
                'name' => 'Sorties éducatives',
                'description' => 'Visites de musées, excursions et sorties pédagogiques',
                'icon' => 'fas fa-bus',
                'level_id' => $educationLevels->where('name', 'like', '%primaire%')->first()->id ?? $educationLevels->first()->id,
            ],
            [
                'name' => 'Clubs et associations',
                'description' => 'Clubs scientifiques, littéraires et autres associations étudiantes',
                'icon' => 'fas fa-users',
                'level_id' => $educationLevels->where('name', 'like', '%secondaire%')->first()->id ?? $educationLevels->first()->id,
            ],
            [
                'name' => 'Événements spéciaux',
                'description' => 'Fêtes de fin d\'année, carnaval, et autres événements spéciaux',
                'icon' => 'fas fa-calendar-alt',
                'level_id' => $educationLevels->first()->id,
            ],
            [
                'name' => 'Activités parascolaires',
                'description' => 'Activités organisées en dehors des heures de cours',
                'icon' => 'fas fa-clock',
                'level_id' => $educationLevels->where('name', 'like', '%primaire%')->first()->id ?? $educationLevels->first()->id,
            ],
        ];

        foreach ($categories as $category) {
            StudentLifeCategory::create($category);
        }

        $this->command->info('Catégories de vie étudiante créées avec succès !');
    }
}

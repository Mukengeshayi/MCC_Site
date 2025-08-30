<?php

namespace Database\Seeders;

use App\Models\EducationLevel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EducationLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $educationLevels = [
            [
                'name' => 'Crèche & Maternelle',
                'description' => 'Éveil et développement des tout-petits dans un environnement sécurisé et stimulant pour leur épanouissement. Programme adapté aux enfants dès 9 mois avec des activités d\'éveil, de motricité et de socialisation.',
                'order' => 1,
            ],
            [
                'name' => 'École Primaire',
                'description' => 'Acquisition des fondamentaux avec un encadrement bienveillant et personnalisé pour chaque élève. Programme complet couvrant les matières essentielles avec une approche pédagogique moderne et interactive.',
                'order' => 2,
            ],
            [
                'name' => 'Secondaire',
                'description' => 'Programme complet préparant aux humanités avec développement des compétences clés et orientation. Formation académique solide de la 7ème EB à la 8ème CTEB avec préparation aux études supérieures.',
                'order' => 3,
            ],
            [
                'name' => 'Humanités',
                'description' => 'Orientation Sciences, Littéraire, Commerciale ou Informatique avec accompagnement expert et suivi personnalisé. Formation spécialisée préparant à l\'enseignement supérieur avec des options variées selon les aspirations des élèves.',
                'order' => 4,
            ],
        ];

        foreach ($educationLevels as $level) {
            EducationLevel::create($level);
        }
    }
}

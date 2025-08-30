<?php

namespace Database\Seeders;

use App\Models\StudentLifeItem;
use App\Models\StudentLifeCategory;
use Illuminate\Database\Seeder;

class StudentLifeItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = StudentLifeCategory::all();

        if ($categories->isEmpty()) {
            $this->command->warn('Aucune catégorie trouvée. Veuillez d\'abord exécuter StudentLifeCategorySeeder.');
            return;
        }

        $items = [
            [
                'category_id' => $categories->where('name', 'Clubs / Arts')->first()->id ?? $categories->first()->id,
                'titre' => 'Clubs de musique',
                'description' => "Permet aux élèves de développer leur créativité musicale à travers le chant, les instruments et la composition, tout en favorisant l’esprit de collaboration.",
                'is_featured' => true,
                'order' => 1,
            ],





            [
                'category_id' => $categories->where('name', 'Activités sportives')->first()->id ?? $categories->first()->id,
                'titre' => 'Tournoi de football inter-classes',
                'description' => 'Un tournoi passionnant de football opposant les différentes classes de l\'école. Les matchs se déroulent pendant les récréations et les pauses déjeuner. Tous les élèves peuvent participer et encourager leurs camarades.',
                'is_featured' => true,
                'order' => 1,
            ],
            [
                'category_id' => $categories->where('name', 'Activités sportives')->first()->id ?? $categories->first()->id,
                'titre' => 'Cours de natation',
                'description' => 'Cours de natation obligatoires pour tous les élèves de primaire. Les enfants apprennent les techniques de base de la natation dans un environnement sécurisé et encadré par des professionnels.',
                'is_featured' => false,
                'order' => 2,
            ],
            [
                'category_id' => $categories->where('name', 'Activités culturelles')->first()->id ?? $categories->first()->id,
                'titre' => 'Atelier de peinture',
                'description' => 'Atelier créatif de peinture où les élèves peuvent exprimer leur créativité. Les œuvres réalisées sont exposées dans l\'école et certaines participent à des concours locaux.',
                'is_featured' => true,
                'order' => 1,
            ],
            [
                'category_id' => $categories->where('name', 'Activités culturelles')->first()->id ?? $categories->first()->id,
                'titre' => 'Pièce de théâtre de fin d\'année',
                'description' => 'Spectacle de théâtre préparé par les élèves de 6ème année. Les enfants répètent pendant plusieurs mois pour présenter une pièce originale devant leurs parents et camarades.',
                'is_featured' => false,
                'order' => 2,
            ],
            [
                'category_id' => $categories->where('name', 'Sorties éducatives')->first()->id ?? $categories->first()->id,
                'titre' => 'Visite du musée des sciences',
                'description' => 'Sortie éducative au musée des sciences pour découvrir les merveilles de la science de manière interactive. Les élèves participent à des ateliers pratiques et des démonstrations.',
                'is_featured' => true,
                'order' => 1,
            ],
            [
                'category_id' => $categories->where('name', 'Sorties éducatives')->first()->id ?? $categories->first()->id,
                'titre' => 'Excursion en forêt',
                'description' => 'Journée en forêt pour découvrir la nature et la biodiversité. Les élèves apprennent à identifier les arbres, les plantes et les animaux dans leur environnement naturel.',
                'is_featured' => false,
                'order' => 2,
            ],
            [
                'category_id' => $categories->where('name', 'Clubs et associations')->first()->id ?? $categories->first()->id,
                'titre' => 'Club de lecture',
                'description' => 'Club de lecture hebdomadaire où les élèves partagent leurs coups de cœur littéraires. Chaque semaine, un élève présente un livre à ses camarades et anime une discussion.',
                'is_featured' => false,
                'order' => 1,
            ],
            [
                'category_id' => $categories->where('name', 'Événements spéciaux')->first()->id ?? $categories->first()->id,
                'titre' => 'Carnaval de l\'école',
                'description' => 'Grande fête du carnaval avec défilé de costumes, musique et animations. Tous les élèves et enseignants participent à cette journée festive qui marque le début du printemps.',
                'is_featured' => true,
                'order' => 1,
            ],
            [
                'category_id' => $categories->where('name', 'Événements spéciaux')->first()->id ?? $categories->first()->id,
                'titre' => 'Fête de fin d\'année',
                'description' => 'Cérémonie de fin d\'année avec remise des diplômes, spectacles et buffet. Un moment important pour célébrer les réussites de l\'année scolaire.',
                'is_featured' => true,
                'order' => 2,
            ],
            [
                'category_id' => $categories->where('name', 'Activités parascolaires')->first()->id ?? $categories->first()->id,
                'titre' => 'Cours de piano',
                'description' => 'Cours de piano dispensés par un professeur qualifié après les heures de cours. Les élèves peuvent apprendre à jouer de cet instrument dans une salle dédiée.',
                'is_featured' => false,
                'order' => 1,
            ],
        ];

        foreach ($items as $item) {
            StudentLifeItem::create($item);
        }

        $this->command->info('Éléments de vie étudiante créés avec succès !');
    }
}

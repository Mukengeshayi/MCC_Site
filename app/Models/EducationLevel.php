<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class EducationLevel extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'name',
        'description',
        'image',
        'order'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($educationLevel) {
            if (empty($educationLevel->slug)) {
                $educationLevel->slug = Str::slug($educationLevel->name);
            }
        });
    }

    public function getImageUrlAttribute()
    {
        return $this->image ? asset('storage/' . $this->image) : asset('assets/img/default-education.jpg');
    }

    /**
     * Génère l'icône Bootstrap Icons appropriée selon le nom du niveau
     */
    public function getIconAttribute()
    {
        $name = strtolower($this->name);

        if (Str::contains($name, ['crèche', 'maternelle', 'maternelle'])) {
            return 'bi-emoji-heart-eyes-fill';
        }

        if (Str::contains($name, ['primaire', 'primaire'])) {
            return 'bi-pencil-fill';
        }

        if (Str::contains($name, ['secondaire', 'secondaire'])) {
            return 'bi-journal-bookmark-fill';
        }

        if (Str::contains($name, ['humanités', 'humanites', 'humanité'])) {
            return 'bi-mortarboard-fill';
        }

        // Icône par défaut
        return 'bi-book-fill';
    }

    /**
     * Génère le lien de route approprié selon le slug
     */
    public function getRouteAttribute()
    {
        $slug = $this->slug;

        if (Str::contains($slug, ['creche', 'maternelle'])) {
            return route('education-levels.preschool');
        }

        if (Str::contains($slug, ['primaire'])) {
            return route('education-levels.primary');
        }

        if (Str::contains($slug, ['secondaire'])) {
            return route('education-levels.high-school');
        }

        if (Str::contains($slug, ['humanites'])) {
            return route('education-levels.high-school');
        }

        // Route par défaut
        return route('education-levels.primary');
    }

    /**
     * Génère le sous-titre approprié selon le nom du niveau
     */
    public function getSubtitleAttribute()
    {
        $name = strtolower($this->name);

        if (Str::contains($name, ['crèche', 'maternelle'])) {
            return '(dès 9 mois)';
        }

        if (Str::contains($name, ['secondaire'])) {
            return '(7ème EB - 8ème CTEB)';
        }

        return '';
    }
}

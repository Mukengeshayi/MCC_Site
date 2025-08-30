<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class StudentLifeCategory extends Model
{
    protected $fillable = [
        'name',
        'description',
        'icon',
        'level_id'
    ];

    /**
     * Relation avec le niveau d'éducation
     */
    public function educationLevel(): BelongsTo
    {
        return $this->belongsTo(EducationLevel::class, 'level_id');
    }

    /**
     * Relation avec les éléments de la vie étudiante
     */
    public function items(): HasMany
    {
        return $this->hasMany(StudentLifeItem::class, 'category_id');
    }

    /**
     * Obtenir les éléments mis en avant
     */
    public function featuredItems(): HasMany
    {
        return $this->hasMany(StudentLifeItem::class, 'category_id')->where('is_featured', true);
    }

    /**
     * Obtenir les éléments ordonnés
     */
    public function orderedItems(): HasMany
    {
        return $this->hasMany(StudentLifeItem::class, 'category_id')->orderBy('order', 'asc');
    }
}

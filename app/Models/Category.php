<?php

namespace App\Models;

use App\Models\Project;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends Model
{
    use HasFactory, SoftDeletes, CrudTrait;

    protected $fillable = [
        'name',
    ];

    /**
     * [Description for projects]
     *
     * @return BelongsToMany
     * 
     */
    public function projects(): BelongsToMany
    {
        return $this->belongsToMany(Project::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $table = 'languages';

    public function projects()
    {
        return $this->belongsToMany(Project::class, 'language_project');
    }
}

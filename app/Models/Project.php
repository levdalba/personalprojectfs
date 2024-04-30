<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Language;

class Project extends Model
{
    protected $table = 'projects';  

    public function languages()
    {
        return $this->belongsToMany(Language::class, 'language_project');
    }
}

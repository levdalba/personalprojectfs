<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Language as LanguageModel;

class Language extends Component
{
    public $languages;

    public function __construct()
    {
        $this->languages = LanguageModel::all();
    }

    public function render()
    {
        return view('components.language');
    }
}

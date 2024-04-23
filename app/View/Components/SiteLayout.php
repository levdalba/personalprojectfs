<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SiteLayout extends Component
{
    public string $title;
    /**
     * Create a new component instance.
     */
    public function __construct(string $title = 'default')
    {
        $this->title = $title;
        // articles dict:
        $this->articles = [
            [
                'title' => 'Article 1',
                'body' => 'This is the body of article 1',
                'author' => 'John Doe',
            ],
            [
                'title' => 'Article 2',
                'body' => 'This is the body of article 2',
                'author' => 'Jane Doe',
            ],
            [
                'title' => 'Article 3',
                'body' => 'This is the body of article 3',
                'author' => 'John Doe',
            ],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.site-layout');
    }
}

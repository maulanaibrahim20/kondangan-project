<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PageTitle extends Component
{
    public $title;
    public $homeUrl;
    public $breadcrumbs;
    /**
     * Create a new component instance.
     */
    public function __construct($title, $homeUrl, $breadcrumbs = [])
    {
        $this->title = $title;
        $this->homeUrl = $homeUrl;
        $this->breadcrumbs = $breadcrumbs;
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.page-title');
    }
}

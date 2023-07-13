<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class AppLayout extends Component
{
    public $title;
    public $breadcrumb;

    public function __construct($title = "" , $breadcrumb = [])
    {
        $this->title = $title;
        $this->breadcrumb = $breadcrumb;
    }

    /**
     * Get the view / contents that represents the component.
     */
    public function render()
    {
        return view('layouts.admin');
    }
}

<?php

namespace App\View\Components\Layouts\Admin;

use App\Abstracts\View\Component;

class Head extends Component
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.layouts.admin.head');
    }
}

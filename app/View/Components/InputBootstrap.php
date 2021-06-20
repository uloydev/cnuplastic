<?php

namespace App\View\Components;

use Illuminate\View\Component;

class InputBootstrap extends Component
{
    public $id, $name, $label, $type;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id, $name, $label, $type = 'text')
    {
        $this->id = $id;
        $this->name = $name;
        $this->label = $label;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.input-bootstrap');
    }
}

<?php

namespace App\Http\Livewire;

use Livewire\Component;


class HelloWorld extends Component
{
    public $titleHead = 'Components with databinding';
    public $name = "Fabio";
    public $title = '';
    public $body;
    public $active = false;
    public $country = "BR";

    public function resetTitle($title, $body)
    {
        $this->title = $title;
        $this->body = $body;
    }

    public function render()
    {
         return view('livewire.hello-world');
    }
}
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
    public $country;

    public function resetTitle($title, $body, $country)
    {
        $this->title = $title;
        $this->body = $body;
        $this->country = $country;
    }

    public function render()
    {
         return view('livewire.hello-world');
    }
}
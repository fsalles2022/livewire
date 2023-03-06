<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;

use Livewire\Component;


class HelloWorld extends Component
{
    public $titleHead = 'Components with databinding';
    public $name = "Fabio";
    public $title = '';
    public $body;
    public $active = false;
    public $country;

    public $test;
    public $mountCall = 0;
    public $hydrateCall = 0;
    public $updateCall = 0;

    public function resetTitle($title, $body, $country)
    {
        $this->title = $title;
        $this->body = $body;
        $this->country = $country;
    }

    public function mount(Request $request){

        $this->title = $request->title;
        $this->mountCall++;


    }

    public function hydrate()
    {

        $this->hydrateCall++;
    }

    public function updateTest()
    {

        $this->updateCall++;
    }

    public function render()
    {
         return view('livewire.hello-world');
    }
}
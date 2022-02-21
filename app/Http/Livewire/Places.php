<?php

namespace App\Http\Livewire;

use App\Location;
use App\TrainTicket;
use Livewire\Component;

class Places extends Component
{
    public $from;
    public $tickets;
    public $to;
    public $destinations = [ ];

    public function mount()
    {

    }


    public function render()
    {

        $this->tickets = TrainTicket::all();

        if(!empty($this->from)){
            $this->destinations = Location::where('name', '!=', $this->from)->get();
        }
        //dd($this->from, $this->destinations);
        return view('livewire.places')
            ->withLocations(Location::all());
    }



}

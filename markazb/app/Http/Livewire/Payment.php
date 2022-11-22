<?php

namespace App\Http\Livewire;

use App\Models\Kurs;
use App\Models\RealPupils;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class Payment extends Component
{
    use WithPagination;
    public $search = '';
    public $kurss = '';
    public function render()
    {
        $this->kurss = Kurs::all();
        $pupils = RealPupils::search($this->search)->first();
        return view('livewire.payment',['p'=>$pupils]);

        

      
    }
}   
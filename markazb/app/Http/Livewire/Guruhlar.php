<?php

namespace App\Http\Livewire;

use App\Models\Guruh;
use App\Models\Qabul;
use App\Models\Teacher;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;
use Rappasoft\LaravelLivewireTables\Traits\Helpers\PaginationHelpers;

class Guruhlar extends Component
{
   
    use WithPagination;
    public $perPage = 10;
    public $search = '';
    public $teachers = '';
    
    public function render()
    {
        // $this->teachers  = Guruh::changeTeacher($this->teachers)->join('teachers','teachers.id','=','guruhs.g_teacher')->join('kurs','kurs.id','=','guruhs.kurs_id')->join('kurs_kuns','kurs_kuns.id','=','guruhs.g_kun')->join('kurs_vaqts','kurs_vaqts.k_id','=','guruhs.g_vaqt')->get();
        
        $g = Guruh::search($this->search)->join('teachers','teachers.id','=','guruhs.g_teacher')->join('kurs','kurs.id','=','guruhs.kurs_id')->join('kurs_kuns','kurs_kuns.id','=','guruhs.g_kun')->join('kurs_vaqts','kurs_vaqts.k_id','=','guruhs.g_vaqt')->get();
     
        
        return view('livewire.guruhlar',[
            'qabul'=> $g,
            
        
        ]);
    }
}
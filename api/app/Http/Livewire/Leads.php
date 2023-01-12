<?php

namespace App\Http\Livewire;

use App\Models\Lead;
use Livewire\Component;
use Livewire\WithPagination;

class Leads extends Component
{
    // use WithPagination;
    public function render()
    {
        $leads = Lead::paginate(10);
        return view('livewire.leads', [
            'leads' => $leads
        ]);
    }
}

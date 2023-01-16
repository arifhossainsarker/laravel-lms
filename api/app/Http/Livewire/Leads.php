<?php

namespace App\Http\Livewire;

use App\Models\Lead;
use Flasher\Prime\FlasherInterface;
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

    // delete function
    public function leadDelete($id, FlasherInterface $flasher)
    {
        $lead = Lead::findOrFail($id);
        $lead->delete();

        // $flasher->addSuccess('Delete Successfully');
        Successfully_msg('Delete Successfully', $flasher);
    }
}

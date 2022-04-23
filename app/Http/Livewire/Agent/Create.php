<?php

namespace App\Http\Livewire\Agent;

use Livewire\Component;

class Create extends Component
{
    public $FiscalEntityId;
    public $PersonId;
    public $Application;
    public $SectorId;
    public $RoleId;
    public $Status;
    public $BanqueId; // If cassier

    public function submit()
    {
        $data = $this->validate($this->rules());

        $response = httpPost('/Settings/AddAgent', $data);
    }

    public function render()
    {
        return view('livewire.agent.create');
    }
}

<?php

namespace App\Http\Livewire;

use App\Models\Project;
use Livewire\Component;

class ProjectListing extends Component
{
    public $per_page = 2;
    public $hasMorePages;

    public function loadMore()
    {
        $this->per_page = $this->per_page + 2;
    }

    public function render()
    {
        $projects = Project::latest()->paginate($this->per_page);
        $this->hasMorePages = $projects->hasMorePages();
        return view('livewire.project-listing', ['projects' => $projects]);
    }
}

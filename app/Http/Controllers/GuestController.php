<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Models
use App\Models\Project;

class GuestController extends Controller
{
    public function projects()
    {
        $projects = Project::all();

        return view('projects', [
            'projects' => $projects
        ]);
    }
}

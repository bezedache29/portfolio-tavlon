<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\Project;

class HomeController extends Controller
{
    public function index()
    {
        $projects = Project::with('categories')->orderBy('id', 'desc')->get();
        $skills = Skill::all();

        return view('home', compact('projects', 'skills'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Project;

class HomeController extends Controller
{
    public function index()
    {
        $projects = Project::with('categories')->orderBy('id', 'desc')->get();

        return view('home', compact('projects'));
    }
}

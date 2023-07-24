<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Type;
use Illuminate\Http\Request;


class ProjectController extends Controller
{
    public function index()
    {

        $projects = Project::all();

        return view('home', compact('projects'));
    }

    public function show($id)
    {
        $projects = Project::findOrFail($id);
        return view("show", compact('projects'));
    }
}

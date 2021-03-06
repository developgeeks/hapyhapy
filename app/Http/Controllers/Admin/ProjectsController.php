<?php

namespace App\Http\Controllers\Admin;
use App\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectsController extends Controller
{
    public function index(){
        $projects = Project::all();
        return view('admin.projects.index', compact('projects'));
    }

    public function create(){
        return view('admin.projects.create');
    }
}
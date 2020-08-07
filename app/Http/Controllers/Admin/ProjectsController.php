<?php

namespace App\Http\Controllers\Admin;
use App\Property;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectsController extends Controller
{
    public function index(){
        $projects = Property::all();
        return view('admin.project.index', compact('projects'));
    }
}
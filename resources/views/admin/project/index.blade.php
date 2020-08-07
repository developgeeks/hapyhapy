@extends('admin.layout')
@section('header')
    <h1>
        All projects
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Projects</li>
    </ol>
@endsection
@section('content')
    <div class="box">
        <div class="box-header">
          <h3 class="box-title">Data Table With Full Features</h3>
        </div>
        <div class="box-body">
            <table id="projects-table" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project)
                        <tr>
                            <td>{{ $project->name }}</td>
                            <td>{{ $project->description }}</td>
                        </tr>
                    @endforeach
                </tbody>
          </table>
        </div>
      </div>
@endsection
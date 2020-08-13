@extends('admin.layout')
@section('header')
    <h1>
        All Projects
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Projects</li>
    </ol>
@endsection
@section('content')
    <div class="box box-primary">
        <div class="box-header">
          <h3 class="box-title">List Of All Projects</h3>
        </div>
        <div class="box-body">
            <table id="projects-table" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Municipal Address</th>
                        <th>Community</th>
                        <th>Zoning</th>
                        <th>Availability</th>
                        <th>Term</th>
                        <th>Parking</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project)
                        <tr>
                            <td>{{ $project->name }}</td>
                            <td>{{ $project->description }}</td>
                            <td>{{ $project->address }}</td>
                            <td>{{ $project->community }}</td>
                            <td>{{ $project->zoning }}</td>
                            <td>{{ $project->availability }}</td>
                            <td>{{ $project->term }}</td>
                            <td>{{ $project->parking }}</td>
                            <td>{{ $project->status }}</td>
                            <td>
                                <a href="#" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i></a>    
                                <a href="#" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>                            
                            </td>
                        </tr>
                    @endforeach
                </tbody>
          </table>
        </div>
      </div>
@endsection
@extends('admin.layout')
@section('header')
    <h1>
        Register A Project
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="{{ route('admin.projects.index') }}"><i class="fa fa-list"></i>Projects</a></li>
        <li class="active">Create</li>
    </ol>
@endsection
@section('content')
<div class="box box-primary">
    <div class="box-header">
        <h3 class="box-title">Create A Project</h3>
    </div>
    <div class="box-body">
        <div class="form-group">
            <label>Name</label>
            <input name="" class="form-control">
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea name="" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label>Address</label>
            <input name="" class="form-control">
        </div>
        <div class="form-group">
            <label>Community</label>
            <input name="" class="form-control">
        </div>
        <div class="form-group">
            <label>Zoning</label>
            <input name="" class="form-control">
        </div>
    </div>
</div>
@endsection
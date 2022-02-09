@extends('layouts.master')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add New Maritial Status</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item active">General Form</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8">
                    <div class="card card-primary">

                        {!! Form::model($maritialStatus, ['route' => ['maritialStatus.update', $maritialStatus->id], 'method' => 'PUT', 'class' => 'form-horizontal']) !!}
                        <div class="card-body">
                            <div class="form-group">
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    {!! Form::label('name', 'Name') !!}
                                    {!! Form::text('name', null, ['placeholder' => 'Name', 'class' => 'form-control', 'required' => 'required']) !!}
                                    <small class="text-danger">{{ $errors->first('name') }}</small>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                    {!! Form::label('description', 'Description') !!}
                                    {!! Form::textarea('description', null, ['placeholder' => 'Write Description', 'class' => 'form-control']) !!}
                                    <small class="text-danger">{{ $errors->first('description') }}</small>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="checkbox{{ $errors->has('is_active') ? ' has-error' : '' }}">
                                    <label for="is_active">
                                        {!! Form::checkbox('is_active', '1', 1, ['id' => 'is_active']) !!} Status
                                    </label>
                                </div>
                                <small class="text-danger">{{ $errors->first('is_active') }}</small>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
    </section>
@endsection

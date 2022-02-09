@extends('layouts.master')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Gender</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item active">Gender</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th style="width: 150px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($genders as $gender)
                                    <tr>
                                        <td>{{$gender->name}}</td>
                                        <td> {{$gender->description}}</td>
                                        <td nowrap="nowrap">
                                                <a href="{{ route('gender.edit', $gender->id) }}">
                                                    <span class="btn btn-primary btn-sm mr-2">
                                                        <i class="fas fa-edit"></i>
                                                    </span>
                                                </a>

                                                {!! Form::model($genders, ['route' => ['gender.destroy',$gender->id], 'method' => 'DELETE','class' => 'd-inline-block']) !!}
                                                        {!! Form::button('<span class="fas fa-trash"></span>', ['type' => 'submit','class' => 'btn btn-danger btn-sm mr-2']) !!}
                                                {!! Form::close() !!}


                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

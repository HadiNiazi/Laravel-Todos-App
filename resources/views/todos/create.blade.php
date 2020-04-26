@extends('layouts.main')

@section('content')

    <h1 class="text-center mt-5">Create Todos</h1>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">Create new todo</div>
                <div class="card-body">
                     {!!Form::open(['method'=>'post','action'=>'TodosController@store'])!!}
                        <div class="form-group">
                            {!! Form::label('name','Name') !!}
                            {!! Form::text('name',null,['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('description','Description') !!}
                            {!! Form::text('description',null,['class'=>'form-control']) !!}
                        </div>


                        <div class="form-group">
                            {!! Form::submit('Create Todo',['class'=>'btn btn-primary created_success']) !!}
                        </div>
                         {!! Form::close() !!}

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                </div>
            </div>

        </div>
    </div>

@endsection

@extends('layouts.main')
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous">
<title>Todos</title>
</head>

@section('content')

    <body>
    <div class="container">


        <h1 class="text-center my-5">TODOS PAGE</h1>
        @if(session()->has('todo_created'))
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card-default">
                        <p class="text-center alert alert-primary mt-4">Todo Created Successfully.</p>
                    </div>
                </div>
            </div>
        @endif
        @if(session()->has('todo_updated'))
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card-default">
                        <p class="text-center alert alert-success mt-4">Todo Updated Successfully.</p>
                    </div>
                </div>
            </div>
        @endif
        @if(session()->has('todo_completed'))
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card-default">
                        <p class="text-center alert alert-success mt-4">Todo Completed Successfully.</p>
                    </div>
                </div>
            </div>
        @endif
        @if(session()->has('todo_deleted'))
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card-default">
                        <p class="text-center alert alert-danger mt-4">Todo Deleted Successfully.</p>
                    </div>
                </div>
            </div>
        @endif
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">
                        Todos
                    </div>

                    @if(count($todos) > 0)

                        <div class="card-body">
                            <ul class="list-group">
                                @foreach($todos as $todo)
                                <li class="list-group-item ">
                                    {{$todo->name}}
                                   @if(!$todo->completed)
                                        <a href="{{url('todo/'.$todo->id.'/completed')}}" class="btn btn-warning btn-sm float-right completing_success">Complete</a>
                                    @endif
                                   <div style="margin-top: -40px">
                                       @if($todo->completed)
                                           {!!Form::model($todo,['method'=>'DELETE','action'=>['TodosController@destroy',$todo->id]])!!}
                                           {!! Form::submit('Delete',['class'=>'btn btn-danger btn-sm float-right mr-2 error']) !!}
                                           {!! Form::close() !!}
                                       @endif
                                       <a href="{{url('todo', $todo->id)}}" class="btn btn-primary btn-sm float-right mr-2">View </a>
                                   </div>
                                </li>
                                 @endforeach
                            </ul>
                            @else
                                <br> <h5 class="text-center text-danger">No Todos set.</h5><br>
                            @endif
                        </div>

                </div>
            </div>
        </div>
    </div>

@endsection
@section('scripts')
@endsection

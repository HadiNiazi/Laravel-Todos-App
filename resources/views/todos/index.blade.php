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
                                        <a href="{{url('todo/'.$todo->id.'/completed')}}" class="btn btn-warning btn-sm float-right success">Complete</a>
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

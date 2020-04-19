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
                        Detail
                    </div>

                    @if($todo)

                        <div class="card-body">
                            <ul class="list-group">

                                    <li class="list-group-item ">
                                        <b>{{$todo->name}}</b>
                                        <a href="{{url('todo/' .$todo->id. '/edit')}}" class="btn btn-primary btn-sm float-right">Edit</a>
                                       <p> {{$todo->description}}</p>
                                    </li>


                            </ul>
                        </div>
                    @else
                        <h2 class="text-center">No Todo set.</h2>
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection


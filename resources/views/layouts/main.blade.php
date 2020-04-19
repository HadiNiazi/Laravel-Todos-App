<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous">

    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery/1/jquery.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
    <title>
        @yield('title')
    </title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{url('/')}}">Todos App</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{url('todo')}}">todos <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{url('todo/create')}}">Create todos <span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </div>
</nav>
<div class="container">
    @yield('content')


</div>

<script type="text/javascript">
    $(".success").click(function(){
        toastr.success('Updating process started. :)', 'Success Alert', {timeOut: 2000})
    });
    $(".created_success").click(function(){
        toastr.success('Creating process started. :)', 'Success Alert', {timeOut: 500})
    });

    $(".error").click(function(){
        toastr.error('Deleting process started -:)', 'Inconceivable!', {timeOut: 5000})
    });

    $(".info").click(function(){
        toastr.info('Info process Started', 'Information', {timeOut: 5000})
    });

    $(".warning").click(function(){
        toastr.warning('Warning', 'Warning', {timeOut: 5000})
    });
</script>
@yield('scripts')
</body>
</html>

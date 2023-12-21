<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Task</title>
    <link rel="stylesheet" href="{{ asset('css/update.css') }}">
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>To Do List</h1>
            <p>A Simple CRUD in Laravel</p>
        </div>
        <div>
            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            @endif
        </div>
        <form method="POST" action="{{ route('updateTask', $task->id) }}">
            @csrf
            <input type="text" name="task" value="{{$task->task}}"/>
            <button>Update Task</button>
        </form>
    </div>
</body>
</html>
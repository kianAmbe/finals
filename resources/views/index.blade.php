<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo List</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>To Do List</h1>
            <p>A Simple CRUD in Laravel</p>
        </div>
        <form method="POST" action="{{ route('save') }}">
            @csrf
            @method('post')
            <input type="text" name="task" placeholder="Enter Your Task">
            <button>Save Task</button>
        </form>
        <table>
            <tr>
                <th class="wideCell">Task</th>
                <th>Action</th>
            </tr>
            @foreach ($tasks as $task)
            <tr>
                <td class="wideCell taskCell-left">{{$task->task}}</td>
                <td class="actionCell">
                    <a href="{{ route('update', $task->id) }}"><button class="update updateColor">Update</button></a>
                    <a  href="{{ route('delete', $task->id) }}"><button class="update deleteColor">Delete</button></a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>
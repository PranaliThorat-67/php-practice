<!DOCTYPE html>
<html>
<head>
    <title>All Tasks</title>
</head>
<body>

<h1>All Tasks</h1>

<a href="/tasks/create">➕ Add New Task</a>

<br><br>

@foreach($tasks as $task)
    <div style="border:1px solid #000; padding:10px; margin-bottom:10px;">
        <h3>{{ $task->title }}</h3>
        <p>{{ $task->description }}</p>
    </div>
@endforeach



</body>
</html>




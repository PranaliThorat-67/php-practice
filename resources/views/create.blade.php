<!DOCTYPE html>
<html>
<head>
    <title>Create Task</title>
</head>
<body>

<h1>Add New Task</h1>

<form action="/tasks" method="POST">
    @csrf

    <label>Title:</label><br>
    <input type="text" name="title" required><br><br>

    <label>Description:</label><br>
    <textarea name="description" required></textarea><br><br>

    <button type="submit">Save Task</button>
</form>

<br>
<a href="/tasks">Back to Tasks</a>

</body>
</html>
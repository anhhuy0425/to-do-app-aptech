<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>TO DO APP</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>TITLE</th>
            <th>STATUS</th>
            <td>ACTION</td>
        </tr>
        <tr>
            @if(count($tasks) > 0)
            @foreach($tasks as $task)
        <tr>
            <td>{{$task->id}}</td>
            <td>{{$task->title}}</td>
            <td>{{$task->completed==true?'Done':'Not yet'}}</td>
            <td><a href="">Details</a></td>
        </tr>
        @endforeach
        @else
        <tr>
            <td colspan="5">No data found</td>
        </tr>
        @endif
    </table>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Optional CSS link -->
</head>

<body>
    <header>
        <h1>Detail Page Title</h1> <!-- Dynamic title can be added here -->
    </header>

    <section>
        <h2>{{ $task->title }}</h2> <!-- Dynamic item name -->
        <p>{{ $task->description }}</p> <!-- Dynamic description -->
        <img src="{{ asset('images/item-image.jpg') }}" alt="Item Image"> <!-- Dynamic image -->
    </section>

    <footer>
        <button onclick="location.href='{{ url('/edit/' . $task->id) }}'">Edit</button> <!-- Dynamic edit button -->
        <button onclick="if(confirm('Are you sure you want to delete this item?')) { location.href='{{ url('/delete/' . $task->id) }}'; }">Delete</button> <!-- Dynamic delete button -->
    </footer>
</body>

</html>

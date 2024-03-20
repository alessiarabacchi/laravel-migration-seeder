<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trains Departing Today</title>
</head>
<body>
    <h1>Trains Departing Today</h1>
    <ul>
        @foreach ($todayTrains as $train)
            <li>{{ $train->company }} - Departure: {{ $train->departure_time }}</li>
        @endforeach
    </ul>
</body>
</html>

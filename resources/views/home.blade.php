<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trains</title>
</head>
<body>
@forelse ($trains as $train)
    <h3>{{ $train->company }} | {{ $train->train_code }} | {{ $train->departure_station}} | {{ $train->departure_time}}  | {{ $train->arrival_station }} | {{ $train->arrival_time}} |  {{ $train->carriage_number}}</h3>
@empty
    <h2>Non ci sono treni</h2>
@endforelse
</body>
</html>

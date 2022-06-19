<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>St. Hector's Veterinary Clinic - Search</title>

    <link rel="stylesheet" href="/css/app.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
</head>

<body>
    <nav class="nav">

        <div class=logo>
            <a href="http://www.clinic.pets/home"><img src="/img/vetlogo.png"></a>
            <a href="http://www.clinic.pets/home">
                <h2 class="h2">ST. HECTOR'S VETERINARY CLINIC</h2>
            </a>

        </div>

        <form action="/home/search" method="get">
            <input name="search" type="text">
            <input type="submit" value="Search">
        </form>

    </nav>

    <div class="main">

        <h1>Results</h1>
        <h3>Search results for: &nbsp; {{$name}}  &nbsp; | &nbsp; Number of results: &nbsp; {{$number_of_records}}</h3>
        

        <ul>
            @foreach ($result as $animal)
            <li>
                <a href="{{route('animal.detail', $animal->id)}}">
                    Pet name: {{ $animal->name }} |
                    Age: {{ $animal->age }} |
                    Weight: {{ $animal->weight }}
                </a>
            </li>
            @endforeach
        </ul>
        <br>
        <a href="{{route('animal.search_next', $name)}}">Page:&nbsp;{{$page}} &nbsp; next page -></a>
        

    </div>

    <footer>
        <p>© St. Hector's Veterinary Clinic 2022</p>
    </footer>

</body>

</html>
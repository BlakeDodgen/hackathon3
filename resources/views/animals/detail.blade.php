<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>St. Hector's Veterinary Clinic - Detail</title>

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
            <a href="/create">
                <input type="button" value="New Record" />
            </a>
        </form>

    </nav>

    <body>
        <div class="animal_detail">
            <img class="animal_detail__pic" src={{"/images/pets/".$animal_img}} alt="img" />

            <ul class="animal_detail__list">
                <li><strong>Name: {{$animal_detail->name}}</strong></li>
                <li>Breed: {{$animal_detail->breed}}</li>
                <li>Age: {{$animal_detail->age}}</li>
                <li>Weight: {{$animal_detail->weight}}</li>
            </ul>


        </div>

        <footer>
            <p>© St. Hector's Veterinary Clinic 2022</p>
        </footer>


    </body>

</html>
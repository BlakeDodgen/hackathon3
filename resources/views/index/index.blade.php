<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOME PAGE</title>
</head>
<body>
    <form action="" method="get">
        <input type="text">
        <input type="submit" value="Search">
    </form>
    <ul>
    <?php foreach ($animals as $value): ?>
        
    <li>name: <?=$value->name?> </li>
   
    <?php endforeach; ?>
    
 </ul>
</body>
</html>
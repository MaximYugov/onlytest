<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добро пожаловать</title>
    <link href="/css/style.css" rel="stylesheet">
</head>
<body>
    <div>
        <h2>Добро пожаловать, <?php echo $_SESSION['name']; ?>!</h2>
        <p><a href="/logout">Выйти</a></p>
    </div>
</body>
</html>
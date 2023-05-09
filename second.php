<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link rel="stylesheet" href="/css/style.css"/>
</head>
<body>

    <header>
        <img src="/img/poli.png" class="logo">
        <h1>Домашняя работа: Feedback Form</h1>
    </header>

    <main> 
        <textarea rows=10 cols=40> <?print_r(get_headers('https://httpbin.org/post'))?> </textarea><br>
        <a href="/index.php" class="button beer-button-blue">BACK</a>
    </main>
    

    <footer>
        <p>задание для самостоятельно работы (без описания)</p>
    </footer>
</body>
</html>